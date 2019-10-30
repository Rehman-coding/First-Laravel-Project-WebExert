<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    @include('theme.partial.head')
    <link rel="stylesheet" href="{{asset('assets/css/pages/authentication.css')}}">
</head>

<body>
<!-- [ Preloader ] Start -->
<div class="page-loader">
    <div class="bg-primary"></div>
</div>
<!-- [ Preloader ] End -->

<!-- [ Content ] Start -->
<div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4" style="background-image: url('assets/img/bg/21.jpg');">
    <div class="ui-bg-overlay bg-dark opacity-25"></div>

    <div class="authentication-inner py-5">

        <div class="card">
            <div class="p-4 p-sm-5">
                <!-- [ Logo ] Start -->
                <div class="d-flex justify-content-center align-items-center pb-2 mb-4">
                    <div class="ui-w-60">
                        <div class="w-100 position-relative">
                            <img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- [ Logo ] End -->

                <h5 class="text-center text-muted font-weight-normal mb-4">Login to Your Account</h5>


                <form method="POST" action="{{ route('update',$user->id)}}">
{{--                    {{route('posts.update',$users->id)}}--}}
                    @csrf



                    <div class="form-group ">
                        <label class="form-label">Name</label>
                        <input  style="padding-left: 11px;" type="name" id="name" class="form-control @error('email') is-invalid @enderror" name="name" value="{{$user->name }}" required autocomplete="email" autofocus>


                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="clearfix"></div>
                    </div>



                    <div class="form-group ">
                        <label class="form-label">E-Mial Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email }}" required autocomplete="email">


                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="clearfix"></div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="card-footer py-3 px-4 px-sm-5">
                <div class="text-center text-muted">
                    Don't have an account yet?
                    <a href="pages_authentication_register-v2.html">Sign Up</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- / Content -->

<!-- Core scripts -->
<script src="assets/js/pace.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/libs/popper/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/sidenav.js"></script>
<script src="assets/js/layout-helpers.js"></script>
<script src="assets/js/material-ripple.js"></script>

<!-- Libs -->
<script src="assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<!-- Demo -->
<script src="assets/js/demo.js"></script><script src="assets/js/analytics.js"></script>

</body>

</html>

