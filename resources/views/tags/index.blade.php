

@extends('theme.layout.master')
@section('content')
    <!------ Include the above in your HEAD tag ---------->
    <div class="container">
        <div class="container-fluid flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-0">Tags</h4>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb">

            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <a href="{{route('tag.create')}}" class="btn btn-glow-dark btn-primary text-light mb-5 mt-5"><b>+</b> Add Tags</a>

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
                        <th>Tag Name</th>


                        <th class="">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->tag_name }}</td>


                            <td class="">
                                <a class='btn btn-info btn-large' href="{{route('tag.edit', $row->id)}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>


                                <a class='btn btn-danger btn-large' href="{{route('tag.destroy', $row->id)}}"
                                   onclick="event.preventDefault();
                                           document.getElementById('delete-user-{{$row->id}}').submit();"><strong>Delete</strong>

                                </a>
                                <form id="delete-user-{{$row->id}}" action="{{route('tag.destroy', $row->id) }}"
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