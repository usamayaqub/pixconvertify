@extends('admin.layouts.app')
@isset($type)
    @section('title', 'Edit Format')
@else
    @section('title', 'Add Format')
@endisset
@section('content')
<style>
.image-container {
    position: relative;
    display: inline-block;
}

.delete-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity 0.3s;
}

.image-container:hover .delete-icon {
    opacity: 1;
    cursor: pointer;
}
.abc .block-item-content:first-child .delete-block {
    display: none;    
}
.delete-block{
    position: absolute;
    right: 14px;
    top: -6px;
}
.bg-g4{
    background-color: #f4f4f4;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                @isset($type)
                <h4 class="mb-sm-0 font-size-18">Edit Format</h4>
                @else
                <h4 class="mb-sm-0 font-size-18">Add New Format</h4>
                @endisset
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Formats</li>
                        @isset($type)
                        <li class="breadcrumb-item active">Edit Format</li>
                        @else
                        <li class="breadcrumb-item active">Add New Format</li>
                        @endisset
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="card p-4 rounded cShadow container-fluid">
    @isset($type)
    <form action="{{ route('update.format', $type->id) }}" method="post" enctype="multipart/form-data">
        @else
        <form action="{{route('insert.format')}}" method="post" enctype="multipart/form-data">
            @endisset
            @csrf
            <div class="row">
                <div class="form-group col-sm-6 mb-2">
                    <label for="">Meta Title<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" required class="form-control" name="meta_title" @isset($type)value="{{$type->meta_title}}" @endisset placeholder="Enter Meta Title">
                    </div>
                    @error('meta_title')
                    <span class="invalid-feedback mt-0" @error('meta_title')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>  

                <div class="form-group col-sm-6 mb-2">
                    <label for="">Meta Description<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="meta_desc" @isset($type)value="{{$type->meta_desc}}" @endisset placeholder="Enter Meta Desc">
                    </div>
                    @error('meta_desc')
                    <span class="invalid-feedback mt-0" @error('meta_desc')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>  
                <div class="form-group col-sm-6 mb-2">
                    <label for="">Banner Heading<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="heading" @isset($type)value="{{$type->heading}}" @endisset placeholder="Enter heading">
                    </div>
                    @error('heading')
                    <span class="invalid-feedback mt-0" @error('heading')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group col-sm-6 mb-2">
                    <label for="">Footer Format Name<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" @isset($type)value="{{$type->name}}" @endisset placeholder="Enter Name">
                    </div>
                    @error('name')
                    <span class="invalid-feedback mt-0" @error('name')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group col-sm-6 mb-2">
                    <label for="">From<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="from" @isset($type)value="{{$type->from}}" @endisset placeholder="Enter From">
                    </div>
                    @error('from')
                    <span class="invalid-feedback mt-0" @error('from')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group col-sm-6 mb-2">
                    <label for="">To<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="to" @isset($type)value="{{$type->to}}" @endisset placeholder="Enter to">
                    </div>
                    @error('to')
                    <span class="invalid-feedback mt-0" @error('to')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group col-sm-6 mb-2">
                    <label for="">Badge<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="badge" @isset($type)value="{{$type->badge}}" @endisset placeholder="Enter badge">
                    </div>
                    @error('badge')
                    <span class="invalid-feedback mt-0" @error('badge')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group col-sm-6 mb-2">
                    <label for="">Banner Text<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="banner_text" @isset($type)value="{{$type->banner_text}}" @endisset placeholder="Enter banner_text">
                    </div>
                    @error('banner_text')
                    <span class="invalid-feedback mt-0" @error('banner_text')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                
                <div class="form-group col-sm-6 mb-2">
                    <label for="">Section Heading<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="section_heading" @isset($type)value="{{$type->section_heading}}" @endisset placeholder="Enter section_heading">
                    </div>
                    @error('section_heading')
                    <span class="invalid-feedback mt-0" @error('section_heading')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="col-lg-12 my-3">
                    <div class="row abc">
                        @if(isset($type) && !empty($type->content))
                        @foreach ($type->content as $index => $contentItem)
                        <div class="col-lg-6 block-item-content mb-2">
                            <div class="bg-g4 p-3 pt-5 pb-4">
                                <div class="title mb-2">
                                    <label for="">Section Heading<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="content[{{$index}}][heading]" value="{{ $contentItem->heading }}">
                                    </div>
                                </div>
                                <div class="section-Content">
                                    <label for="">Content<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="content[{{$index}}][content]" value="{{ $contentItem->content }}">
                                    </div>
                                    <button class="btn btn-danger delete-block mt-2">x</button>
                                </div>
                                <div class="file mb-2">
                                    <label for="">Content Image<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="content[{{$index}}][image]" value="">
                                        <input type="hidden" name="content[{{$index}}][old_image]" value="{{$contentItem->image}}">
                                        <a href="{{$contentItem->image}}" target="_blank">View File</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        @endforeach
                        @endif
                        @if(!isset($type) || empty($type->content))
                        <div class="col-lg-6 block-item-content mb-2">
                            <div class="bg-g4 p-3 pt-5 pb-4">
                                <div class="title mb-2">
                                    <label for="">Section Heading<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="content[0][heading]" @isset($type)value="{{$type->section_heading}}" @endisset placeholder="Enter section_heading">
                                    </div>
                                </div>
                                <div class="section-Content">
                                    <label for="">Content<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="content[0][content]" @isset($type)value="{{$type->section_content}}" @endisset placeholder="Enter section_content">
                                    </div>
                                    <button class="btn btn-danger delete-block mt-2">x</button>
                                </div>
                                <div class="file mt-2">
                                    <label for="">Content Image<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="content[0][image]" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="add-more-wrap mt-2 text-end">
                   <div class="btn btn-primary" id="add-more">Add One More</div>
                </div>




                <div class="form-group col-sm-6 mb-2 d-flex align-items-end">
                    <label for="switch4" data-on-label="Yes" data-off-label="No">
                        <label for="">Status: </label>
                        <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                            <input class="form-check-input" name="status" type="checkbox" id="SwitchCheckSizelg" @if(isset($type) && $type->status == 1) checked="" @endif>
                        </div>
                    </label>
                </div>

                <div class="form-group col-sm-12 mb-2">
                    <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
            </div>
        </form>
</div>

<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script>
    $(document).ready(function() {
        var contentCounter = $(".block-item-content").length - 1; // Initialize a counter for content items

        // Function to reindex input field names
        function reindexInputs() {
            $(".abc .block-item-content").each(function(index) {
                $(this)
                    .find('input[name^="content"]')
                    .each(function() {
                        var newName = $(this)
                            .attr('name')
                            .replace(/\[\d+\]/g, '[' + index + ']');
                        $(this).attr('name', newName);
                    });
            });
        }

        // Add click event handler to the "Add One More" button
        $("#add-more").click(function() {
            // Increment the counter to maintain unique IDs
            contentCounter++;

            // Create a new instance of the content structure
            var newContent = `
                <div class="col-lg-6 block-item-content mb-2">
                    <div class="bg-g4 p-3 pt-5 pb-4">
                        <div class="title mb-2">
                            <label for="">Section Heading<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="content[${contentCounter}][heading]" placeholder="Enter section_heading">
                            </div>
                        </div>
                        <div class="section-Content">
                            <label for="">Content<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="content[${contentCounter}][content]" placeholder="Enter section_content">
                            </div>
                            <button class="btn btn-danger delete-block mt-2">x</button>
                        </div>
                        <div class="file mt-2">
                            <label for="">Content Image<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="content[${contentCounter}][image]" value="">
                            </div>
                        </div>
                    </div>
                </div>
            `;

            // Append the new content to the container
            $(".abc").append(newContent);

            // Add click event handler to the "Delete Block" button in the new content
            $(`.abc .block-item-content:last .delete-block`).click(function() {
                $(this).closest('.block-item-content').remove();
                reindexInputs();
            });
        });

        // Add click event handler to the "Delete Block" button in the initial element
        $('.delete-block').click(function() {
            $(this).closest('.block-item-content').remove();
            reindexInputs();
        });
    });
</script>

@endsection


