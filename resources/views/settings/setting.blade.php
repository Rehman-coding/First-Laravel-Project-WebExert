
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
                <li class="breadcrumb-item active">Settings</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="card mb-4">
                        <h6 class="card-header">Settings</h6>
                        <div class="card-body">
                            @if(Session::has('success_message'))
                                <div class="alert alert-success">
                                    {{ Session::get('success_message') }}
                                </div>
                            @endif
                            {{ Form::open([ 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'role'=>'form']) }}

                            @foreach($all_columns as $column)

                                @if($column['type']=="file")
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">{{$column['label']}}</label>
                                        <div class="col-lg-8">
                                            <input type="file" name="{{$column['name']}}"
                                                   class="{{$column['class']}}" id="{{$column['id']}}">
                                            @isset($settings[$column['name']])
                                                @if(File::exists('uploads/'.$settings[$column['name']]))
                                                    <img src="{{asset('uploads/'.$settings[$column['name']])}}"
                                                         style="{{$column['style']}}"
                                                         alt="{{$column['name']}} is not found"/>
                                                @else
                                                    <img src="{{asset('uploads/placeholder.jpg')}}"
                                                          style="{{$column['style']}}"
                                                         alt="{{$column['name']}} is not found"/>
                                                @endif
                                            @endisset
                                        </div>
                                    </div>
                                @endif

                                @if($column['type']=="textfield")
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">{{$column['label']}}</label>
                                        <div class="col-lg-8">
                                            <input type="text" name="{{$column['name']}}"
                                                   placeholder="{{$column['place_holder']}}"
                                                   value="{{ isset($settings[$column['name']]) ? $settings[$column['name']] : ''}}"
                                                   class="{{$column['class']}}" id="{{$column['id']}}">
                                        </div>
                                    </div>
                                @endif
                                @if($column['type']=="textarea")
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">{{$column['label']}}</label>
                                        <div class="col-lg-8">
                                                <textarea name="{{$column['name']}}" class="{{$column['class']}}"
                                                          placeholder="{{$column['place_holder']}}"
                                                          id="{{$column['id']}}">{{ isset($settings[$column['name']]) ? $settings[$column['name']] : ''}}
                                                </textarea>
                                        </div>

                                    </div>
                                @endif
                                @if($column['type']=="checkbox")
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">{{$column['label']}}</label>

                                        <div class="span3">
                                            <label>
                                                <input type="checkbox" name="{{$column['name']}}"
                                                       class="{{$column['class']}}"
                                                       @php if (isset($settings[$column['name']]) and $settings[$column['name']] == "1")
                                                       {
                                                           echo "checked";
                                                       } @endphp id="{{$column['id']}}" data-color="#13dafe"
                                                       data-size="small"/>

                                                <span class="lbl"></span>
                                            </label>
                                        </div>

                                    </div>
                                @endif
                            @endforeach
                            <a class="btn btn-danger" {{--href="{{ route('dashboard') }}"--}}>
                                <i class="ace-icon fa fa-reply icon-only"></i> Back
                            </a>
                            <button type="submit" class="btn btn-info">Submit</button>
                            {{Form::close()}}
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

