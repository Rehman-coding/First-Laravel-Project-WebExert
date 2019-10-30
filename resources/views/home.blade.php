@extends('theme.layout.master')
@section('content')

    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </div>
{{--        <div class="row">--}}
{{--            <!-- 1st row Start -->--}}
{{--            <div class="col-lg-7">--}}
{{--                <div class="card mb-4">--}}
{{--                    <div class="card-header with-elements">--}}
{{--                        <h6 class="card-header-title mb-0">Statistics</h6>--}}
{{--                        <div class="card-header-elements ml-auto">--}}
{{--                            <label class="text m-0">--}}
{{--                                <span class="text-light text-tiny font-weight-semibold align-middle">SHOW STATS</span>--}}
{{--                                <span class="switcher switcher-sm d-inline-block align-middle mr-0 ml-2"><input type="checkbox" class="switcher-input" checked><span class="switcher-indicator"><span class="switcher-yes"></span><span--}}
{{--                                                class="switcher-no"></span></span></span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div id="statistics-chart-1" style="height:270px"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-5">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="card mb-4 bg-pattern-2-dark">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="lnr lnr-gift display-4 text-primary"></div>--}}
{{--                                    <div class="ml-3">--}}
{{--                                        <div class="text-muted small">Products</div>--}}
{{--                                        <div class="text-large">985</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div id="ecom-chart-3" class="mt-3 chart-shadow-primary" style="height:40px"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="card mb-4 bg-pattern-2 bg-primary text-white">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="lnr lnr-cart display-4"></div>--}}
{{--                                    <div class="ml-3">--}}
{{--                                        <div class="small">Monthly sales</div>--}}
{{--                                        <div class="text-large">2362</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div id="order-chart-1" class="mt-3 chart-shadow" style="height:40px"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-12">--}}
{{--                        <div class="card d-flex w-100 mb-4">--}}
{{--                            <div class="row no-gutters row-bordered row-border-light h-100">--}}
{{--                                <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">--}}
{{--                                    <div class="card-body media align-items-center text-dark">--}}
{{--                                        <i class="lnr lnr-diamond display-4 d-block text-primary"></i>--}}
{{--                                        <span class="media-body d-block ml-3"><span class="text-big mr-1 text-primary">$1584.78</span>--}}
{{--                                                            <br>--}}
{{--                                                            <small class="text-muted">Earned this month</small>--}}
{{--                                                        </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">--}}
{{--                                    <div class="card-body media align-items-center text-dark">--}}
{{--                                        <i class="lnr lnr-clock display-4 d-block text-primary"></i>--}}
{{--                                        <span class="media-body d-block ml-3"><span class="text-big"><span class="mr-1 text-primary">152</span>Working Hours</span>--}}
{{--                                                            <br>--}}
{{--                                                            <small class="text-muted">Spent this month</small>--}}
{{--                                                        </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">--}}
{{--                                    <div class="card-body media align-items-center text-dark">--}}
{{--                                        <i class="lnr lnr-hourglass display-4 d-block text-primary"></i>--}}
{{--                                        <span class="media-body d-block ml-3"><span class="text-big"><span class="mr-1 text-primary">54</span> Tasks</span>--}}
{{--                                                            <br>--}}
{{--                                                            <small class="text-muted">Completed this month</small>--}}
{{--                                                        </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">--}}
{{--                                    <div class="card-body media align-items-center text-dark">--}}
{{--                                        <i class="lnr lnr-license display-4 d-block text-primary"></i>--}}
{{--                                        <span class="media-body d-block ml-3"><span class="text-big"><span class="mr-1 text-primary">6</span> Projects</span>--}}
{{--                                                            <br>--}}
{{--                                                            <small class="text-muted">Done this month</small>--}}
{{--                                                        </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- 1st row Start -->--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <!-- 2nd row Start -->--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="card d-flex w-100 mb-4">--}}
{{--                    <div class="row no-gutters row-bordered row-border-light h-100">--}}
{{--                        <div class="d-flex col-md-6 col-lg-3 align-items-center">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row align-items-center mb-3">--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <i class="lnr lnr-earth text-primary display-4"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <h6 class="mb-0 text-muted">Total <span class="text-primary">Subscription</span></h6>--}}
{{--                                        <h4 class="mt-3 mb-0">7652<i class="ion ion-md-arrow-round-down ml-3 text-danger"></i></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <p class="mb-0 text-muted">48% From Last 24 Hours</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex col-md-6 col-lg-3 align-items-center">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row align-items-center mb-3">--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <i class="lnr lnr-cart text-primary display-4"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <h6 class="mb-0 text-muted"><span class="text-primary">Order</span> Status</h6>--}}
{{--                                        <h4 class="mt-3 mb-0">6325<i class="ion ion-md-arrow-round-up ml-3 text-success"></i></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <p class="mb-0 text-muted">36% From Last 6 Months</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex col-md-6 col-lg-3 align-items-center">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row align-items-center mb-3">--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <i class="lnr lnr-users text-primary display-4"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <h6 class="mb-0 text-muted">Unique <span class="text-primary">Visitors</span></h6>--}}
{{--                                        <h4 class="mt-3 mb-0">652<i class="ion ion-md-arrow-round-down ml-3 text-danger"></i></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <p class="mb-0 text-muted">36% From Last 6 Months</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex col-md-6 col-lg-3 align-items-center">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row align-items-center mb-3">--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <i class="lnr lnr-magic-wand text-primary display-4"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <h6 class="mb-0 text-muted">Monthly <span class="text-primary">Earnings</span></h6>--}}
{{--                                        <h4 class="mt-3 mb-0">5963<i class="ion ion-md-arrow-round-up ml-3 text-success"></i></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <p class="mb-0 text-muted">36% From Last 6 Months</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Staustic card 3 Start -->--}}
{{--            </div>--}}
{{--            <!-- 2nd row Start -->--}}
{{--        </div>--}}

    </div>


@endsection
