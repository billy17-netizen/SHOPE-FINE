@extends('layouts.admin.master')

@include('layouts.admin.head-css')
@section('title')
    Product Gallery
@endsection

@section('content')
    @component('includes.breadcrumb')
        @slot('li_1')
            Product Gallery
        @endslot
        @slot('title')
            Create  Product Gallery
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
                    <h4 class="card-title mb-4">Create New Product Gallery</h4>
                    <form action="{{route('product-gallery.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="products_id" class="col-form-label col-lg-2">Product</label>
                            <div class="col-lg-10">
                                <select name="products_id" class="form-control">
                                    @foreach($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="photos" class="col-form-label col-lg-2">Foto Product</label>
                            <div class="col-lg-10">
                                <input id="photos" name="photos" type="file" class="form-control" required>
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
    <!-- select 2 plugin -->
    <script src="{{asset('admin/assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/pages/ecommerce-select2.init.js')}}"></script>
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
