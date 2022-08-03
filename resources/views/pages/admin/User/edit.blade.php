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
            Edit User
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
                    <h4 class="card-title mb-4">Edit User</h4>
                    <form action="{{route('user.update',$item->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-form-label col-lg-2">Nama User</label>
                            <div class="col-lg-10">
                                <input id="name" name="name" type="text" value="{{$item->name}}" class="form-control"
                                       required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-form-label col-lg-2">Email User</label>
                            <div class="col-lg-10">
                                <input id="email" name="email" type="email" value="{{$item->email}}"
                                       class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-form-label col-lg-2">Password User</label>
                            <div class="col-lg-10">
                                <input id="password" name="password" type="password"
                                       class="form-control">
                                <smal>Kosongkan jika tidak ingin ganti password</smal>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-form-label col-lg-2">Roles</label>
                            <div class="col-lg-10">
                                <select name="roles" id="" class="form-control">
                                    <option value="ADMIN" {{$item->roles === 'ADMIN' ? 'selected' : ''}}>Admin</option>
                                    <option value="USER" {{$item->roles === 'USER' ? 'selected' : ''}}>User</option>
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
