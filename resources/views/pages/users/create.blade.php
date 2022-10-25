@extends('layout.default')

@section('title', 'Dashboard')

@push('css')
    <link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
@endpush

@push('js')
<script src="/assets/plugins/masonry-layout/dist/masonry.pkgd.min.js"></script>
	<script src="/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="/assets/plugins/jvectormap-content/world-mill.js"></script>
	<script src="/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
	<script src="/assets/js/demo/dashboard.demo.js"></script>
    <script src="/assets/js/demo/analytics.demo.js"></script>
@endpush

@section('content')
<style>
    #image_preview{
        height:25vh;
    }
</style>
    <div class="row" data-masonry='{"percentPosition": true }'>
        <div class="col-9">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div id="image_preview">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <h3>Register New Account</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label for="">First Name :</label>
                                    <input type="text" name="firstname" class="form-control">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="">Last Name :</label>
                                    <input type="text" name="lastname" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="">Email Address :</label>
                                    <input type="email" class="form-control" required/>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 text-left">
                            <button type="submit" class="btn btn-outline-theme">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
