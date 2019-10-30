@extends('theme.layout.master')
@section('content')
    <!------ Include the above in your HEAD tag ---------->
    <div class="container">
        <div class="container-fluid flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-0">Categories</h4>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb">

            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <a href="{{route('category.create')}}" class="btn btn-glow-dark btn-primary text-light mb-5 mt-5"><b>+</b> Add Category</a>

            {{--            <a href=""></a>--}}
{{--            <a href="{{route('category.insert')}}" class="btn btn-glow-dark btn-primary text-light"><b>+</b> Add Post</a>--}}

{{--            <button>--}}
{{--                <a href="{{ route('category.insert') }}">Insert Category</a>--}}
{{--            </button>--}}
            <div class="card  ">


                <table class="table card-table">
                    <thead class="thead-dark  text-big text-light ">
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>slug</th>

                        <th class="">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->slug}}</td>

                            <td class="">
                                <a class='btn btn-info btn-large' href="{{route('category.edit', $row->id)}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
{{--                              <a href="#" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></span> Del</a>--}}


                                <a class='btn btn-danger btn-large' href="{{route('category.destroy', $row->id)}}"
                                   onclick="event.preventDefault();
                                           document.getElementById('delete-user-{{$row->id}}').submit();"><strong>Delete</strong>

                                </a>
                                <form id="delete-user-{{$row->id}}" action="{{route('category.destroy', $row->id) }}"
                                      method="post" style="display: none;">

                                    @csrf
                                    @method('DELETE')
                                </form>



                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>



                <div class="clearfix">

                </div>
            </div>
        </div>

    </div>
    </div>
@endsection