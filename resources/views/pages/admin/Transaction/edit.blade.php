@extends('layouts.admin.master')

@include('layouts.admin.head-css')
@section('title')
    Transaction
@endsection

@section('content')
    @component('includes.breadcrumb')
        @slot('li_1')
            Transaction
        @endslot
        @slot('title')
            Edit Transaction
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
                    <h4 class="card-title mb-4">Edit Transaction</h4>
                    <form action="{{route('transaction.update',$item->id)}}" method="post"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="transaction_status" class="col-form-label col-lg-2">Transaction Status</label>
                            <div class="col-lg-10">
                                <select name="transaction_status" class="form-control">
                                    <option value="{{$item->transaction_status}}"
                                            selected>{{$item->transaction_status}}</option>
                                    <option value="" disabled>------------------</option>
                                    <option value="PENDING">PENDING</option>
                                    <option value="SHIPPING">SHIPPING</option>
                                    <option value="SUCCESS">SUCCESS</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="total_price" class="col-form-label col-lg-2">Total Price</label>
                            <div class="col-lg-10">
                                <input id="total_price" name="total_price" type="text" class="form-control"
                                       value="{{$item->total_price}}"
                                       required>
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
