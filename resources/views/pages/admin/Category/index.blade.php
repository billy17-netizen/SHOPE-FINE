@extends('layouts.admin.master')

@section('title')
    Category
@endsection
@section('content')

    @component('includes.breadcrumb')
        @slot('li_1')
            Category
        @endslot
        @slot('title')
            Category
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="text-sm-end">
                                <a href="{{route('category.create')}}"
                                   class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i
                                        class="mdi mdi-plus me-1"></i> Tambah Kategori
                                </a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle table-nowrap" id="datatable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <div>
                                            <img class="rounded-circle avatar-xs"
                                                 src="{{Storage::url($category->photo)}}"
                                                 alt="">
                                        </div>
                                    </td>
                                    <td>{{$category->slug}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-primary mr-1 mb-1dropdown-toggle"
                                               data-bs-toggle="dropdown"
                                               aria-expanded="false">Aksi
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('category.edit',$category->id)}}"
                                                       class="dropdown-item"><i
                                                            class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                        Edit</a>
                                                </li>
                                                <li>
                                                    <form action="{{route('category.destroy',$category->id)}}"
                                                          method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="dropdown-item"><i
                                                                class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                            Delete
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- Sweet Alerts js -->
    <script src="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    {{--Datatable--}}
    <script src="{{asset('admin/assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/pages/datatables.init.js')}}"></script>
@endsection
