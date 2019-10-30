@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{route('users.store')}}" method="post">
                            <div class="form-group">
                                {{csrf_field()}}
                                <label for="exampleInputEmail1">Your Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Your Email Address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Enter Email">
                            </div>

                            <button type="submit" name="save" class="btn btn-primary">Submit</button>
                        </form>




                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col" class="ml-5">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $row)


                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>

                                <td class="">
                                    <a class='btn btn-info btn-xs'

                                       href="{{route('users.edit', $row->id)}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>





                                        <a class='btn btn-danger btn-xs' href="{{route('users.destroy', $row->id)}}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('delete-user-{{$row->id}}').submit();"><strong>Delete</strong>

                                        </a>
                                        <form id="delete-user-{{$row->id}}" action="{{ route('users.destroy', $row->id) }}"
                                              method="post" style="display: none;">

                                            @csrf
                                            @method('DELETE')
                                        </form>


                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
