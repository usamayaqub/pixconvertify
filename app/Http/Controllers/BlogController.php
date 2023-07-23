<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    use FileUploadTrait, GlobalTrait;
    

    public function index(Request $request)
    {
        $data = Blog::with('images','category')->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            return DataTables::of($data)
            ->addColumn('category', function ($data) {
                $category = 'general';
                if(!empty($data->category->name)){
                $category = $data->category->name;
                }
                return $category;       
            })
            ->addColumn('image', function ($data) {
                $firstImage = $data->images->first(); // Get the first image from the blog's images
                if ($firstImage) {
                    return '<img src="' . $firstImage->url . '" height="40px"/>';
                }
            })
                ->addColumn('status', function ($data) {
                    $status = '<span class="badge badge-pill badge-soft-danger font-size-11">InActive</span>';
                    if ($data->status == 1) {
                        $status = '<span class="badge badge-pill badge-soft-success font-size-11">Active</span>';
                    }
                    return $status;
                })
                ->addColumn('actions', function ($data) {
                    $actions = '<div class=" btn-group-sm" role="group" aria-label="Basic example">
                    <a  href="' . route('edit.blog', $data->id) . '" class="btn btn-outline-primary btn-sm">Edit</a>
                    </div>';
                    return $actions;
                })
                ->rawColumns(['image','status','category','actions'])
                ->make(true);
        }

        return view('blogs.index');
    }

    public function addBlog(Request $request)
    {
        $categories = Category::where('is_active',1)->get();  
        return view('blogs.edit',compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
        }

        $blog = new Blog();
        $blog->cat_id = $request->cat_id;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();

        // Upload Image for the blog
        if(isset($request->image)){
        $images = $this->uploadMultipleFiles($request->image);
        $images_arr = [];
        if (count($images) > 0) {
            foreach ($images as $key => $i) {
                $images_arr[$key]['blog_id'] = $blog->id;
                $images_arr[$key]['url'] = $i;
                $images_arr[$key]['type'] = 'media';
                $images_arr[$key]['created_at'] = now();
                $images_arr[$key]['updated_at'] = now();
            }
        }
        $blog->images()->insert($images_arr);
        }
        // Upload Image for the blog
        return redirect()->route('blogs.index')->with('success', 'Blog saved successfully.');
        
    }

    public function editBlog(Request $request,$id)
    {
        $type = Blog::find($id);
        $categories = Category::where('is_active',1)->get();  
        return view('blogs.edit',compact('type','categories'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        $blog->cat_id = $request->cat_id;
        $blog->title = $request->title;
        $blog->content = $request->content;
        if($request->status == 'on')
        {
            $blog->status = 1;
        }else{
            $blog->status = 0;
        }
        $blog->save();
        // Update Image for the blog
        if(isset($request->image)){
            $images = $this->uploadMultipleFiles($request->image);
            $images_arr = [];

            if (count($images) > 0) {
                foreach ($images as $key => $i) {
                    $images_arr[$key]['blog_id'] = $blog->id;
                    $images_arr[$key]['url'] = $i;
                    $images_arr[$key]['type'] = 'media';
                    $images_arr[$key]['created_at'] = now();
                    $images_arr[$key]['updated_at'] = now();
                }
            }
            $blog->images()->delete();
            $blog->images()->insert($images_arr);
            }
        // Update Image for the blog

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }


    public function deleteBlogImage(Request $request, $id)
    {
        $image = BlogImage::find($id);
        if (!$image) {
            return response()->json(['error' => 'Image not found'], 404);
        }
        // Delete image from storage
        Storage::delete($image->url);
        // Delete image record from the database
        $image->delete();
        return response()->json(['message' => 'Image deleted successfully']);
    }
}
