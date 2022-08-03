@extends('layouts.dashboard')

@section('title', 'Store Dashboard Setting Page')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Store Setting</h2>
                <p class="dashboard-subtitle">Make store profitable</p>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-12">
                    <form action="{{route('dashboard.settings.redirect','dashboard.settings.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Toko</label>
                                            <input class="form-control" name="store_name" value="{{$user->store_name}}"
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="category" class="col-form-label col-lg-2">Category</label>
                                        <div class="col-lg-10">
                                            <select name="categories_id" class="form-control">
                                                <option value="{{$user->categories_id}}">Tidak di Ganti</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Store Status</label>
                                            <p class="text-muted">
                                                Apakah saat ini toko anda buka?
                                            </p>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input class="custom-control-input"
                                                       id="openStoreTrue"
                                                       name="store_status"
                                                       type="radio"
                                                       value="1" {{$user->store_status == 1 ? 'checked' : ''}} >

                                                <label class="custom-control-label"
                                                       for="openStoreTrue">Buka</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input class="custom-control-input"
                                                       id="openStoreFalse"
                                                       name="store_status"
                                                       type="radio"
                                                       value="0"{{$user->store_status === 0 || $user->store_status === null ? 'checked' : ''}}>
                                                <label class="custom-control-label" for="openStoreFalse">Sementara
                                                    tutup</label>
                                            </div>
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

