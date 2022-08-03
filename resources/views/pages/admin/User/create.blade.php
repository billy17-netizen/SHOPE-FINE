@extends('layouts.admin.master')

@include('layouts.admin.head-css')
@section('title')
    User
@endsection

@section('content')
    @component('includes.breadcrumb')
        @slot('li_1')
            User
        @endslot
        @slot('title')
            Create User
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
                    <h4 class="card-title mb-4">Create New User</h4>
                    <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-form-label col-lg-2">Nama User</label>
                            <div class="col-lg-10">
                                <input id="name" name="name" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-form-label col-lg-2">Email User</label>
                            <div class="col-lg-10">
                                <input id="email" name="email" type="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-form-label col-lg-2">Password User</label>
                            <div class="col-lg-10">
                                <input id="password" name="password" type="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-form-label col-lg-2">Roles</label>
                            <div class="col-lg-10">
                                <select name="roles" required class="form-control"
                                        id="">
                                    <option value="ADMIN">Admin</option>
                                    <option value="USER">User</option>
                                </select>
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
@endsection
