@extends('theme.layout.master')
@section('content')
    <!------ Include the above in your HEAD tag ---------->
    <div class="container">
        <div class="container-fluid flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-0">Enter Your Category Name</h4>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb">

            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card  container">


                <form action="{{route('category.store')}}" type="multi" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group mt-5">
                        <label for="title">Category Name <span class="require">*</span></label>
{{--                        @foreach ($users as $row)--}}
                        <input type="text" class="form-control" name="name" value="{{$users->name}}" />
{{--                        @endforeach--}}
                    </div>



                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                         Update
                        </button>

                    </div>

                </form>



                <div class="clearfix">

                </div>
            </div>
        </div>

    </div>
    </div>
@endsection