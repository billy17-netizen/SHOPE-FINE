@extends('layouts.admin.master')

@section('title')
    Product Gallery
@endsection
@section('content')

    @component('includes.breadcrumb')
        @slot('li_1')
            Product
        @endslot
        @slot('title')
            Product Gallery
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="text-sm-end">
                                <a href="{{route('product-gallery.create')}}"
                                   class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i
                                        class="mdi mdi-plus me-1"></i> Tambah Gallery Product
                                </a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle table-nowrap" id="datatable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Produk</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->product->name}}</td>
                                    <td>
                                        <div>
                                            <img class="avatar-md"
                                                 src="{{Storage::url($product->photos)}}"
                                                 alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-primary mr-1 mb-1dropdown-toggle"
                                               data-bs-toggle="dropdown"
                                               aria-expanded="false">Aksi
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <form action="{{route('product-gallery.destroy',$product->id)}}"
                                                          method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">
                                                            <i
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
        const type = "{{ Session::get('alert-type','info') }}";
        switch (type) {
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
        @endif
    </script>
@endsection
