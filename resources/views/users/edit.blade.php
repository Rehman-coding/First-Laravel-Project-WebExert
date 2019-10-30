@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('success_message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success_message') }}
                            </div>
                        @endif
                        <form action="{{route('users.update')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">

                                <label for="exampleInputEmail1">Your Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"  value="{{$users->name}}" aria-describedby="emailHelp" placeholder="">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Your Email Address</label>
                                <input type="email" class="form-control" name="email" value="{{$users->email}}" id="exampleInputPassword1" placeholder="Enter Email">
                            </div>

                            <button type="submit" name="save" class="btn btn-primary">Submit</button>
                        </form>




                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
