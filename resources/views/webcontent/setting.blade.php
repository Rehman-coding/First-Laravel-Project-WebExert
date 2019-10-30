
@extends('theme.layout.master')


@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>
                    {{ $error }}
                </p>
            @endforeach
        </div>
    @endif
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Settings</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                {{--                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>--}}
                <li class="breadcrumb-item active">Website Content Settings</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="card mb-4">
                        <h6 class="card-header">Website Banner</h6>
                        <div class="card-body">
                            @if(Session::has('success_message'))
                                <div class="alert alert-success">
                                    {{ Session::get('success_message') }}
                                </div>
                            @endif
{{--                                {{ Form::open([ 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'role'=>'form']) }}--}}
                                <form action="{{route('web.store')}}"  method="post">
                                <div class="form-group">
                                    {{csrf_field()}}
                                    <label for="email">Button Text</label>
                                    <input type="text" class="form-control" name="btntext" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="email">Button Link</label>
                                    <input type="text" class="form-control" name="btnlink" >
                                </div>

                                <div class="form-group">
                                    <label for="email">Banner Image</label>
                                    <input type="file" class="form-control" name="image" >
                                </div>


                            <a class="btn btn-danger" {{--href="{{ route('dashboard') }}"--}}>
                                <i class="ace-icon fa fa-reply icon-only"></i> Back
                            </a>
                            <button type="submit" class="btn btn-info">Submit</button>
{{--                            {{Form::close()}}--}}
                                </form>
                            <div class="form-group"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->

    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->

@stop

