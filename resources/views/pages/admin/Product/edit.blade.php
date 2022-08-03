@extends('layouts.admin.master')

@include('layouts.admin.head-css')
@section('title')
    Product
@endsection

@section('content')
    @component('includes.breadcrumb')
        @slot('li_1')
            Product
        @endslot
        @slot('title')
            Edit Product
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
                    <h4 class="card-title mb-4">Edit Product</h4>
                    <form action="{{route('product.update',$item->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-form-label col-lg-2">Nama Product</label>
                            <div class="col-lg-10">
                                <input id="name" name="name" type="text" class="form-control" value="{{$item->name}}"
                                       required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="user" class="col-form-label col-lg-2">Pemilik Product</label>
                            <div class="col-lg-10">
                                <select name="users_id" class="form-control">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}"
                                                @if($item->users_id == $user->id)
                                                    selected
                                            @endif
                                        >{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="category" class="col-form-label col-lg-2">Category</label>
                            <div class="col-lg-10">
                                <select name="categories_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                                @if($item->categories_id == $category->id)
                                                    selected
                                            @endif
                                        >{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-form-label col-lg-2">Harga Product</label>
                            <div class="col-lg-10">
                                <input id="price" name="price" type="text" class="form-control" value="{{$item->price}}"
                                       required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-form-label col-lg-2">Description Product</label>
                            <div class="col-lg-10">
                                <textarea id="description" class="form-control description"
                                          name="description">{!!  $item->description !!}</textarea>
                                {{--                                <input id="description" name="description" type="text" class="form-control" required>--}}
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
@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#description'))
            .then(editor => {
                editor.editing.view.change(writer => {
                    writer.setStyle('min-height', '300px', editor.editing.view.document.getRoot());
                });
            });

    </script>
@endsection
