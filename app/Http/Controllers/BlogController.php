<?php

namespace App\Http\Controllers;

use App\Http\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    use FileUploadTrait;
    
    public function index(Request $request)
    {
        $data = Blog::with('images')->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            return DataTables::of($data)
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
                ->rawColumns(['image','status','actions'])
                ->make(true);
        }

        return view('admin.blogs.index');
    }

    public function addBlog(Request $request)
    { 
        return view('admin.blogs.edit');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'banner' => 'required',
        ]);

        if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();

        if ($request->banner) {
            $file = $request->banner;
            $url =  $this->uploadSingleFile($file);
            if (!empty($url)) {
                $blog->images()->create([
                'blog_id' => $blog->id,
                'url' => $url,
                'type' => 'media',
                'created_at' => now(),
                'updated_at' => now(),
                ]);
            } 
        }
        // Upload Image for the blog
        return redirect()->route('blogs.index')->with('success', 'Blog saved successfully.');
        
    }

    public function editBlog(Request $request,$id)
    {
        $type = Blog::find($id);
        return view('admin.blogs.edit',compact('type'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
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
        if (isset($request->banner)) {
            $blog->images()->delete();
            $file = $request->banner;
            $url =  $this->uploadSingleFile($file);
            if (!empty($url)) {
                $blog->images()->create([
                'blog_id' => $blog->id,
                'url' => $url,
                'type' => 'media',
                'created_at' => now(),
                'updated_at' => now(),
                ]);
            } 
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

    public function uploadImage(Request $request)
    {
        if ($request->upload) {
            $file = $request->upload;
            $url =  $this->uploadSingleFile($file);
            if (!empty($url)) {
                return response()->json(['image_url' => $url]);
            } else {
                return response()->json(['error' => 'Image upload failed. Please try again.'], 400);
            }
        }
        return response()->json(['error' => 'No image uploaded'], 400);
    }


}
