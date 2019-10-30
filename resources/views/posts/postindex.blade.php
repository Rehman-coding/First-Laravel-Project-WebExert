@extends('theme.layout.master')
@section('content')
    <!------ Include the above in your HEAD tag ---------->
    <div class="container">
        <div class="container-fluid flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-0">Posts</h4>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Posts</li>
                </ol>
                <a href="{{route('posts.create')}}" class="btn btn-glow-dark btn-primary text-light"><b>+</b> Add Post</a>
            </div>
            <div class="card">
{{--                <div class="card-header">Table within card</div>--}}
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table card-table">
                    <thead class="thead-dark  text-big text-light ">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Featured Image</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $row)
                        <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->title }}</td>
                        <td>


                                @if(isset($row->image))
                                    <img src="{{ asset('uploads/profile_pic/'.$row->image) }}" alt="Profile Pic 1 " style="width: 50px">
                                @else
                                    <img src="{{ asset('uploads/profile_pic/download.jpg') }}" alt="Profile Pic" style="width: 50px">
                                @endif


                        <td style="max-width: 220px; overflow: hidden;">{{ $row->description }}</td>



                        <td class="">
                            <a class='btn btn-info btn-large' href="{{route('posts.edit', $row->id)}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                            <a class='btn btn-dark btn-large' href="{{route('post_blog', $row->id)}}"><span class="glyphicon glyphicon-edit"></span> Blog</a>
                            <a class='btn btn-danger btn-large' href="{{route('posts.destroy', $row->id)}}"
                               onclick="event.preventDefault();
                                       document.getElementById('delete-user-{{$row->id}}').submit();"><strong>Delete</strong>
                            </a>
                            <form id="delete-user-{{$row->id}}" action="{{route('posts.destroy', $row->id) }}"
                                  method="post" style="display: none;">

                                @csrf
                                @method('DELETE')
                            </form>
                            <a class='btn btn-success btn-large' onclick="viewPost({{$row->id}})" ><span class="glyphicon glyphicon-edit"></span>Show</a>
{{--                            <a class='btn btn-success btn-large' href="{{route('post_detail', $row->id)}}">Show</a>--}}
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card mb-4">
                <div class="card-body">
{{--                    <label class="form-label">Enter a country name:</label>--}}
                    <input id="typeahead-input" class="form-control" type="text" autocomplete="off">
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>
    <!-- Button trigger modal -->
{{--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
{{--        Launch demo modal--}}
{{--    </button>--}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        function viewPost(id) {

            var CSRF_TOKEN = '{{ csrf_token() }}';
            $.post("{{ route('post_detail') }}", {_token: CSRF_TOKEN, id: id}).done(function (response) {
                // Add response in Modal body
                $('.modal-body').html(response);
                // Display Modal
                $('#exampleModal').modal('show');

            });

        }
    </script>
@endsection