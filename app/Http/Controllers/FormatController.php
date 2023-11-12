<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Format;

class FormatController extends Controller
{
    use FileUploadTrait;

    public function index(Request $request)
    {
        $data = Format::with('content')->orderBy('created_at', 'desc')->get();

        if ($request->ajax()) {
            return DataTables::of($data)
                ->addColumn('status', function ($data) {
                    $status = '<span class="badge badge-pill badge-soft-danger font-size-11">InActive</span>';
                    if ($data->status == 1) {
                        $status = '<span class="badge badge-pill badge-soft-success font-size-11">Active</span>';
                    }
                    return $status;
                })
                ->addColumn('actions', function ($data) {
                    $actions = '<div class=" btn-group-sm" role="group" aria-label="Basic example">
                    <a  href="' . route('edit.format', $data->id) . '" class="btn btn-outline-primary btn-sm">Edit</a>
                    </div>';
                    return $actions;
                })
                ->rawColumns(['status', 'actions'])
                ->make(true);
        }

        return view('admin.formats.index');
    }

    public function add(Request $request)
    {
        return view('admin.formats.edit');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'meta_title' => 'required',
            'meta_desc' => 'required',
            'name' => 'required',
            'from' => 'required',
            'to' => 'required',
            'badge' => 'required',
            'heading' => 'required',
            'banner_text' => 'required',
            'section_heading' => 'required',
            // 'content.*.heading' => 'required|string',
            // 'content.*.content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $format = new Format();
        $format->meta_title = $request->meta_title;
        $format->meta_desc = $request->meta_desc;
        $format->name = $request->name;
        $format->from = $request->from;
        $format->to = $request->to;
        $format->badge = $request->badge;
        $format->heading = $request->heading;
        $format->banner_text = $request->banner_text;
        $format->section_heading = $request->section_heading;
        $format->save();

        if (isset($request->content)  && !empty($request->content)) {
            $contentData = $request->content;
        // return $request->content;
            // $format->content()->delete();
            foreach ($contentData as $contentItem) {
                if(isset($contentItem['image']) && !empty($contentItem['image']))
                {
                    $image = $this->uploadSingleFile($contentItem['image']);
                }
                $format->content()->create([
                    'heading' => $contentItem['heading'],
                    'content' => $contentItem['content'],
                    'image' => $image ?? null,
                ]);
            }
        }
        return redirect()->route('formats.index')->with('success', 'Format added successfully.');
    }


    public function edit(Request $request, $id)
    {
        $type = Format::with('content')->where('id', $id)->first();
        return view('admin.formats.edit', compact('type'));
    }

    public function update(Request $request, $id)
    {
        $format = Format::find($id);

        $format->meta_title = $request->meta_title;
        $format->meta_desc = $request->meta_desc;
        $format->name = $request->name;
        $format->from = $request->from;
        $format->to = $request->to;
        $format->badge = $request->badge;
        $format->heading = $request->heading;
        $format->banner_text = $request->banner_text;
        $format->section_heading = $request->section_heading;

         if ($request->has('content') && is_array($request->input('content'))) {
        $contentData = $request->content;
        $format->content()->delete();
        foreach ($contentData as $contentItem) {
            if(isset($contentItem['image']) && !empty($contentItem['image']))
            {
                $image = $this->uploadSingleFile($contentItem['image']);
            }else{
                $image = $contentItem['old_image'];
            }
            $format->content()->create([
                'heading' => $contentItem['heading'],
                'content' => $contentItem['content'],
                'image' => $image,
            ]);
        }
    }
        $format->save();

        return redirect()->route('formats.index')->with('success', 'Format updated successfully.');
    }
}
