@extends('layouts.dashboard')

@section('title', 'Store Dashboard Account Setting Page')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">My Account</h2>
                <p class="dashboard-subtitle">Update your current profile</p>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-12">
                    <form action="{{route('dashboard.settings.redirect','dashboard.settings.account')}}" method="post"
                          enctype="multipart/form-data" id="locations">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Your Name</label>
                                            <input class="form-control" id="name" name="name"
                                                   type="text" value="{{$user->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">YOur Email</label>
                                            <input class="form-control" id="email" name="email"
                                                   type="email" value="{{$user->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address_one">Address 1</label>
                                            <input class="form-control" id="address_one" name="address_one"
                                                   type="text" value="{{$user->address_one}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address_two">Address 2</label>
                                            <input class="form-control" id="address_two" name="address_two"
                                                   type="text" value="{{$user->address_two}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="provinces_id">Province</label>
                                            <select name="provinces_id" id="provinces_id" class="form-control"
                                                    v-model="provinces_id" v-if="provinces">
                                                <option v-for="province in provinces" :value="province.id">@{{
                                                    province.name }}
                                                </option>
                                            </select>
                                            <select v-else class="form-control"></select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="regencies_id">City</label>
                                            <select name="regencies_id" id="regencies_id" class="form-control"
                                                    v-model="regencies_id" v-if="regencies">
                                                <option v-for="regency in regencies" :value="regency.id">@{{regency.name
                                                    }}
                                                </option>
                                            </select>
                                            <select v-else class="form-control"></select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="zip_code">Postal Code</label>
                                            <input class="form-control" id="zip_code" name="zip_code"
                                                   type="text" value="{{$user->zip_code}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Countries</label>
                                            <input class="form-control" id="country" name="country" type="text"
                                                   value="{{$user->country}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone_number">Mobile</label>
                                            <input class="form-control" id="phone_number" name="phone_number"
                                                   type="text"
                                                   value="{{$user->phone_number}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button class="btn btn-success px-5" type="submit">Save Now</button>
                                    </div>
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
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        var locations = new Vue({
            el: "#locations",
            mounted() {
                this.getProvinces();
                AOS.init();
            },
            data: {
                provinces_id: null,
                regencies_id: null,
                provinces: null,
                regencies: null,
            },
            methods: {
                getProvinces() {
                    axios.get("{{route('api.provinces')}}").then(response => {
                        this.provinces = response.data;
                    });
                },
                getRegencies() {
                    axios.get("{{url('api/regencies')}}/" + this.provinces_id, {}).then(response => {
                        this.regencies = response.data;
                    });
                }
            },
            watch: {
                provinces_id: function (val, oldVal) {
                    this.regencies_id = null;
                    this.getRegencies();
                }
            }
        });
    </script>
@endpush
