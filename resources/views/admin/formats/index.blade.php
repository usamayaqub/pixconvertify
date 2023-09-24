@extends('admin.layouts.app')
@section('title')
    {{ 'Formats' }}
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Formats</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Formats</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="w-100">
    <a href="{{route('add.format')}}" class="btn btn-primary">Add Format</a>
    <div class="row justify-content-center">
        <div class="col-md-12 mt-4">
            <div class="card p-4 rounded cShadow">
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                        <th>Meta Title</th>
                        <th>Meta Description</th>
                        <th>Name</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Badge</th>
                        <th>Heading(H1)</th>
                        <th>Banner Text</th>
                        <th>Section Heading</th>
                        <th>Status</th>
                        <th>Slug</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $('#datatable').DataTable({
            responsive: true,
            scrollX: true,   
            processing: true,
            serverSide: true,
            ordering: false,
            ajax: '/formats',
            columns: [
                {data: 'meta_title', name: 'meta_title'},
                {data: 'meta_desc', name: 'meta_desc'},
                {data: 'name', name: 'name'},
                {data: 'from', name: 'from'},
                {data: 'to', name: 'to'},
                {data: 'badge', name: 'badge'},
                {data: 'heading', name: 'heading'},
                {data: 'banner_text', name: 'banner_text'},
                {data: 'section_heading', name: 'section_heading'},
                {data: 'status', name: 'status'},
                {data: 'slug', name: 'slug'},
                {data: 'actions', name: 'actions'},
            ]
        });
</script>
@endsection