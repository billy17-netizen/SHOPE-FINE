@extends('layouts.dashboard')

@section('title', 'Store Dashboard Transaction Page')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Transactions</h2>
                <p class="dashboard-subtitle">Big result start from the small one</p>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-12 mt-2">
                    <nav>
                        <div class="nav nav-tabs mb-2" id="nav-tab" role="tablist">
                            <button aria-controls="nav-home" aria-selected="true" class="nav-link active"
                                    data-target="#nav-home" data-toggle="tab" id="nav-home-tab" role="tab"
                                    type="button">Sell Product
                            </button>
                            <button aria-controls="nav-profile" aria-selected="false" class="nav-link"
                                    data-target="#nav-profile" data-toggle="tab" id="nav-profile-tab"
                                    role="tab" type="button">Buy Product
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div aria-labelledby="nav-home-tab" class="tab-pane fade show active" id="nav-home"
                             role="tabpanel" tabindex="0">
                            @foreach($sellTransactions as $sellTransaction)
                                <a class="card card-list d-block"
                                   href="{{route('dashboard.transactions.detail',$sellTransaction->id)}}">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img alt=""
                                                     src="{{Storage::url($sellTransaction->product->galleries->first()->photos ?? '')}}"
                                                     class="w-50">
                                            </div>
                                            <div class="col-md-4">
                                                {{$sellTransaction->product->name}}
                                            </div>
                                            <div class="col-md-3">
                                                {{$sellTransaction->product->user->name}}
                                            </div>
                                            <div class="col-md-3">
                                                {{$sellTransaction->created_at}}
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img alt="" src="{{asset('/images/dashboard-arrow-right.svg')}}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        <div aria-labelledby="nav-profile-tab" class="tab-pane fade" id="nav-profile"
                             role="tabpanel" tabindex="0">
                            @foreach($buyTransactions as $buyTransaction)
                                <a class="card card-list d-block"
                                   href="{{route('dashboard.transactions.detail',$buyTransaction->id)}}">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img alt=""
                                                     src="{{Storage::url($buyTransaction->product->galleries->first()->photos ?? '')}}"
                                                     class="w-50">
                                            </div>
                                            <div class="col-md-4">
                                                {{$buyTransaction->product->name}}
                                            </div>
                                            <div class="col-md-3">
                                                {{$buyTransaction->product->user->name}}
                                            </div>
                                            <div class="col-md-3">
                                                {{$buyTransaction->created_at}}
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img alt="" src="{{asset('/images/dashboard-arrow-right.svg')}}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

