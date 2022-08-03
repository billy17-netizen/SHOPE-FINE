@extends('layouts.dashboard')

@section('title', 'Store Dashboard Product Detail Page')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Create New Product</h2>
                <p class="dashboard-subtitle">Create your own product</p>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('dashboard.products.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="users_id" value="{{Auth::user()->id}}">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" type="number" name="price">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" id="" name="categories_id">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea cols="100" id="editor" name="description" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Thumbnails</label>
                                            <input class="form-control" type="file" name="photo">
                                            <p class="text-muted">
                                                Kamu dapat memilih lebih dari satu
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <button class="btn btn-success px-5" type="submit">Save Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $(document).ready(function () {
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        });
    </script>
    <script>
        function thisFileUpload() {
            $("#file").click();
        }
    </script>
    <script>
        ClassicEditor.create(document.querySelector('#editor'))
            .then(editor => {
                editor.editing.view.change(writer => {
                    writer.setStyle('height', '400px', editor.editing.view.document.getRoot());
                });
            })
    </script>
@endpush
