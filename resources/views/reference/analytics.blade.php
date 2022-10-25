@extends('layout.default')

@section('title', 'Analytics')

@push('css')
	<link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
@endpush

@push('js')
    <script src="/assets/plugins/masonry-layout/dist/masonry.pkgd.min.js"></script>
    <script src="/assets/plugins/chart.js/dist/chart.min.js"></script>
    <script src="/assets/plugins/moment/min/moment.min.js"></script>
    <script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/assets/js/demo/analytics.demo.js"></script>
@endpush

@section('content')
    <!-- BEGIN page-header -->
    <h1 class="page-header">
        Analytics <small>stats, overview & performance</small>
    </h1>
    <!-- END page-header -->

    <!-- BEGIN daterangepicker -->
    <div class="d-flex align-items-center mb-3">
        <a href="#" class="btn btn-sm btn-outline-theme rounded-0" id="daterangepicker">
            <i class="fa fa-fw fa-calendar"></i>
            <span data-id="daterangepicker-date">Today</span>
            <i class="fa fa-fw fa-caret-down me-n1"></i>
        </a>
        <span class="ms-3">compared to <span data-id="prev-date" id="daterangepicker-compare-date"></span></span>
    </div>
    <!-- END daterangepicker -->

    <!-- BEGIN row -->
    <div class="row" data-masonry='{"percentPosition": true }'>
        <!-- BEGIN col-4 -->
        <div class="col-lg-6 col-xl-4 mb-4">
            <!-- BEGIN card -->
            <div class="card">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- title -->
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-fill fw-bold fs-16px">Total sales</div>
                        <a href="#" class="text-decoration-none text-white text-opacity-50">View report</a>
                    </div>

                    <!-- stats -->
                    <div class="d-flex align-items-center h4 mb-3">
                        <div>$821.50</div>
                        <small class="fw-400 ms-auto text-theme">+5%</small>
                    </div>

                    <!-- chart -->
                    <div>
                        <div class="fs-12px fw-bold mb-2 text-white text-opacity-50">SALES OVER TIME</div>
                        <div class="chart mb-2" style="height: 190px">
                            <canvas id="chart1" class="w-100" height="190"></canvas>
                        </div>
                        <div class="d-flex align-items-center justify-content-center fw-bold text-white text-opacity-50">
                            <i class="fa fa-square text-gray-300 me-2"></i>
                            <span class="fs-12px me-4" data-id="prev-date">&nbsp;</span>
                            <i class="fa fa-square text-theme me-2"></i>
                            <span class="fs-12px" data-id="today-date">&nbsp;</span>
                        </div>
                    </div>
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-4 -->

        <!-- BEGIN col-4 -->
        <div class="col-lg-6 col-xl-4 mb-4">
            <!-- BEGIN card -->
            <div class="card">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- title -->
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-fill fw-bold fs-16px">Online store sessions</div>
                        <a href="#" class="text-decoration-none text-white text-opacity-50">View report</a>
                    </div>

                    <!-- stats -->
                    <div class="d-flex align-items-center h3 mb-3">
                        <div>39</div>
                        <small class="fw-400 ms-auto text-danger">-2.5%</small>
                    </div>

                    <hr class="opacity-3 my-2 mx-n3" />

                    <!-- stats small -->
                    <div class="row">
                        <div class="col-6">Visitors</div>
                        <div class="col-3 text-center">2</div>
                        <div class="col-3 text-end">
                            <span class="text-danger">-</span> 50%
                        </div>
                    </div>

                    <hr class="opacity-3 my-2 mx-n3" />

                    <!-- chart -->
                    <div class="mt-3">
                        <div class="fs-12px fw-bold mb-2 text-white text-opacity-50">SESSIONS OVER TIME</div>
                        <div class="chart mb-2" style="height: 190px">
                            <canvas id="chart2" class="w-100" height="190"></canvas>
                        </div>
                        <div class="d-flex align-items-center justify-content-center text-white text-opacity-50 fw-bold">
                            <i class="fa fa-square text-gray-300 me-2"></i>
                            <span class="fs-12px me-4" data-id="prev-date">&nbsp;</span>
                            <i class="fa fa-square text-theme me-2"></i>
                            <span class="fs-12px" data-id="today-date">&nbsp;</span>
                        </div>
                    </div>
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
            </div>
            <!-- END card -->
        </div>
        <!-- END col-4 -->

        <!-- BEGIN col-4 -->
        <div class="col-lg-6 col-xl-4 mb-4">
            <!-- BEGIN card -->
            <div class="card">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- title -->
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-fill fw-bold fs-16px">Top product by units sold</div>
                    </div>

                    <!-- list -->
                    <div>
                        <div class="row mb-2">
                            <div class="col-6">iPhone 11 Pro Max</div>
                            <div class="col-3 text-center">329</div>
                            <div class="col-3 text-center"><span class="text-theme">+</span> 25%</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">iPad Pro</div>
                            <div class="col-3 text-center">219</div>
                            <div class="col-3 text-center"><span class="text-danger">-</span> 5.2%</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">Macbook Pro</div>
                            <div class="col-3 text-center">125</div>
                            <div class="col-3 text-center"><span class="text-theme">+</span> 2.3%</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">iPhone SE 2</div>
                            <div class="col-3 text-center">92</div>
                            <div class="col-3 text-center"><span class="text-theme">+</span> 4.9%</div>
                        </div>
                        <div class="row">
                            <div class="col-6">Apple pencil</div>
                            <div class="col-3 text-center">52</div>
                            <div class="col-3 text-center"><span class="text-theme">+</span> 25%</div>
                        </div>
                    </div>
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-4 -->

        <!-- BEGIN col-4 -->
        <div class="col-lg-6 col-xl-4 mb-4">
            <!-- BEGIN card -->
            <div class="card">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- title -->
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-fill fs-16px fw-bold">Returning customer rate</div>
                    </div>

                    <!-- stats -->
                    <div class="d-flex align-items-center h3 mb-3">
                        <div>52.85%</div>
                        <small class="fw-400 ms-auto text-danger">-7%</small>
                    </div>

                    <!-- chart -->
                    <div>
                        <div class="fs-12px fw-bold mb-2 text-white text-opacity-50">CUSTOMERS</div>
                        <div class="chart mb-2" style="height: 190px">
                            <canvas id="chart3" class="w-100" height="190"></canvas>
                        </div>
                        <div class="d-flex align-items-center justify-content-center text-white text-opacity-50 fw-bold">
                            <i class="fa fa-square text-indigo me-2"></i>
                            <span class="fs-12px me-4">First-time</span>
                            <i class="fa fa-square text-theme me-2"></i>
                            <span class="fs-12px">Returning</span>
                        </div>
                    </div>
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-4 -->

        <!-- BEGIN col-4 -->
        <div class="col-lg-6 col-xl-4 mb-4">
            <!-- BEGIN card -->
            <div class="card">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- title -->
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-fill fw-bold fs-16px">Conversion rate</div>
                        <a href="#" class="text-decoration-none text-white text-opacity-50">View report</a>
                    </div>

                    <!-- stats -->
                    <div class="d-flex align-items-center h3 mb-3">
                        <div>5.29%</div>
                        <small class="fw-400 ms-auto text-theme">+83%</small>
                    </div>

                    <!-- list -->
                    <div>
                        <div class="fs-12px fw-bold mb-2 text-white text-opacity-50">CONVERSION FUNNEL</div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <div>Added to cart</div>
                                <div class="small text-white text-opacity-50">55 session</div>
                            </div>
                            <div class="col-3 text-center">25.28%</div>
                            <div class="col-3 text-center"><span class="text-danger">-</span> 5%</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <div>Reached checkout</div>
                                <div class="small text-white text-opacity-50">25 session</div>
                            </div>
                            <div class="col-3 text-center">15.28%</div>
                            <div class="col-3 text-center"><span class="text-theme">+</span> 82%</div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div>Sessions converted</div>
                                <div class="small text-white text-opacity-50">5 session</div>
                            </div>
                            <div class="col-3 text-center">5.28%</div>
                            <div class="col-3 text-center"><span class="text-theme">+</span> 82%</div>
                        </div>
                    </div>
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-4 -->

        <!-- BEGIN col-4 -->
        <div class="col-lg-6 col-xl-4 mb-4">
            <!-- BEGIN card -->
            <div class="card">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- title -->
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-fill fw-bold fs-16px">Average order value</div>
                    </div>

                    <!-- stats -->
                    <div class="d-flex align-items-center h3 mb-3">
                        <div>$35.12</div>
                        <small class="fw-400 ms-auto text-danger">-3.2%</small>
                    </div>

                    <!-- chart -->
                    <div>
                        <div class="fs-12px fw-bold mb-2 text-white text-opacity-50">ORDERS BY TIME</div>
                        <div class="chart mb-2" style="height: 190px">
                            <canvas id="chart4" class="w-100" height="190"></canvas>
                        </div>
                        <div class="d-flex align-items-center justify-content-center fw-bold text-white text-opacity-50">
                            <i class="fa fa-square text-gray-300 me-2"></i>
                            <span class="fs-12px me-4" data-id="prev-date">&nbsp;</span>
                            <i class="fa fa-square text-theme me-2"></i>
                            <span class="fs-12px" data-id="today-date">&nbsp;</span>
                        </div>
                    </div>
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-4 -->

        <!-- BEGIN col-4 -->
        <div class="col-lg-6 col-xl-4 mb-4">
            <!-- BEGIN card -->
            <div class="card">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- title -->
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-fill fw-bold fs-16px">Total orders</div>
                    </div>

                    <!-- stats -->
                    <div class="d-flex align-items-center h3 mb-3">
                        <div>12</div>
                        <small class="fw-400 ms-auto text-theme">+57%</small>
                    </div>

                    <!-- chart -->
                    <div>
                        <div class="fs-12px fw-bold mb-2 text-white text-opacity-50">ORDERS OVER TIME</div>
                        <div class="chart mb-2">
                            <canvas id="chart5" class="w-100" height="190"></canvas>
                        </div>
                        <div class="d-flex align-items-center justify-content-center fw-bold text-white text-opacity-50">
                            <i class="fa fa-square text-gray-300 me-2"></i>
                            <span class="fs-12px me-4" data-id="prev-date">&nbsp;</span>
                            <i class="fa fa-square text-theme me-2"></i>
                            <span class="fs-12px" data-id="today-date">&nbsp;</span>
                        </div>
                    </div>
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-4 -->

        <!-- BEGIN col-4 -->
        <div class="col-lg-6 col-xl-4 mb-4">
            <!-- BEGIN card -->
            <div class="card">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- title -->
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-fill fw-bold fs-16px">Top pages by sessions</div>
                    </div>

                    <!-- list -->
                    <div class="row mb-2">
                        <div class="col-6"><div><a href="#" class="text-decoration-none text-white text-opacity-50">/phone/apple-11-pro-max</a></div></div>
                        <div class="col-3 text-center">15</div>
                        <div class="col-3 text-center"><span class="text-theme">+</span> 15%</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6"><div><a href="#" class="text-decoration-none text-white text-opacity-50">/tablet/apple-ipad-pro-128gb</a></div></div>
                        <div class="col-3 text-center">12</div>
                        <div class="col-3 text-center"><span class="text-theme">+</span> 8%</div>
                    </div>
                    <div class="row">
                        <div class="col-6"><div><a href="#" class="text-decoration-none text-white text-opacity-50">/desktop/apple-mac-pro</a></div></div>
                        <div class="col-3 text-center">4</div>
                        <div class="col-3 text-center"><span class="text-danger">-</span> 3%</div>
                    </div>
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-4 -->

        <!-- BEGIN col-4 -->
        <div class="col-lg-6 col-xl-4 mb-4">
            <!-- BEGIN card -->
            <div class="card">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- title -->
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-fill fw-bold fs-16px">Sessions by device type</div>
                        <a href="#" class="text-decoration-none text-white text-opacity-50">View report</a>
                    </div>

                    <!-- list -->
                    <div class="row mb-2">
                        <div class="col-6">
                            <div>Desktop</div>
                        </div>
                        <div class="col-3 text-center">247</div>
                        <div class="col-3 text-center"><span class="text-theme">+</span> 4.2%</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6">
                            <div>Mobile</div>
                        </div>
                        <div class="col-3 text-center">198</div>
                        <div class="col-3 text-center"><span class="text-danger">-</span> 2.2%</div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div>Tablet</div>
                        </div>
                        <div class="col-3 text-center">35</div>
                        <div class="col-3 text-center"><span class="text-theme">+</span> 8.9%</div>
                    </div>
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-4 -->

        <!-- BEGIN col-4 -->
        <div class="col-lg-6 col-xl-4 mb-4">
            <!-- BEGIN card -->
            <div class="card">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- title -->
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-fill fw-600 fs-16px">Visits from social sources</div>
                        <a href="#" class="text-decoration-none text-white text-opacity-50">View report</a>
                    </div>

                    <!-- list -->
                    <div class="row mb-2">
                        <div class="col-6">
                            <div>Facebook</div>
                        </div>
                        <div class="col-3 text-center">247</div>
                        <div class="col-3 text-center"><span class="text-theme">+</span> 4.2%</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6">
                            <div>Twitter</div>
                        </div>
                        <div class="col-3 text-center">153</div>
                        <div class="col-3 text-center"><span class="text-theme">+</span> 8.2%</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6">
                            <div>Instagram</div>
                        </div>
                        <div class="col-3 text-center">98</div>
                        <div class="col-3 text-center"><span class="text-danger">-</span> 3.4%</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6">
                            <div>Pinterest</div>
                        </div>
                        <div class="col-3 text-center">75</div>
                        <div class="col-3 text-center"><span class="text-theme">+</span> 1.9%</div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div>Dribbble</div>
                        </div>
                        <div class="col-3 text-center">22</div>
                        <div class="col-3 text-center"><span class="text-theme">+</span> 2.1%</div>
                    </div>
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-4 -->
    </div>
    <!-- END row -->
@endsection
