@extends('layouts.dashboard')

@section('title', 'Store Dashboard Page')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">Look what you have made today</p>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Customer
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{number_format($customer)}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Revenue
                            </div>
                            <div class="dashboard-card-subtitle">
                                $ {{number_format($revenue)}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Transaction
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{number_format($transaction_count)}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 mt-2">
                    <div class="mb-3">Recent Transaction</div>
                    @foreach($transactions as $transaction)
                        <a class="card card-list d-block"
                           href="{{route('dashboard.transactions.detail',$transaction->id)}}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img alt=""
                                             src="{{Storage::url($transaction->product->galleries->first()->photos ?? '')}}"
                                             class="w-50">
                                    </div>
                                    <div class="col-md-4">
                                        {{$transaction->product->name ?? ''}}
                                    </div>
                                    <div class="col-md-3">
                                        {{$transaction->transaction->user->name ?? ''}}
                                    </div>
                                    <div class="col-md-3">
                                        {{$transaction->create_at ?? ''}}
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img alt="" src="/images/dashboard-arrow-right.svg">
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

