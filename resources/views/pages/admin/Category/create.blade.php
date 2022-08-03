@extends('layouts.admin.master')

@include('layouts.admin.head-css')
@section('title')
    Category
@endsection

@section('content')
    @component('includes.breadcrumb')
        @slot('li_1')
            Category
        @endslot
        @slot('title')
            Create Category
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create New Category</h4>
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="name" class="col-form-label col-lg-2">Nama Kategori</label>
                            <div class="col-lg-10">
                                <input id="name" name="name" type="text" class="form-control"
                                       placeholder="Enter Kategori Name..." required>
                            </div>
                        </div>


                        <div class="row mb-4">
                            <label for="photo" class="col-form-label col-lg-2">Photo</label>
                            <div class="col-lg-10">
                                <input id="photo" name="photo" type="file"
                                       placeholder="Enter Kategori Photo..." class="form-control" required>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-primary">Save Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
