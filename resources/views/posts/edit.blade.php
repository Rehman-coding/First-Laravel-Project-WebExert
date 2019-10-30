@extends('theme.layout.master')
@section('content')


    <!------ Include the above in your HEAD tag ---------->
    <style>
        .require {
            color: #666;
        }
        label small {
            color: #999;
            font-weight: normal;
        }
    </style>

    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">


        <h1>Create post</h1>

        <form action="{{route('posts.update',$users->id)}}" type="multi" enctype="multipart/form-data" method="POST">

            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title <span class="require">*</span></label>
                <input type="text" class="form-control" name="title" value="{{$users->title }}" />
            </div>

            <div class="form-group">
                <label class="form-label w-100">Upload Image</label>

                <input type="file" name="image" value="">
                <div>
                    @if(isset($users->image))
                        <img src="{{ asset('uploads/profile_pic/'.$users->image) }}" alt="Profile Pic1 " style="width: 100px">
                    @else
                        <img src="{{ asset('uploads/profile_pic/') }}" alt="Profile Pic" style="width: 100px">
                    @endif
                </div>
                <small class="form-text text-muted">Image must be in jpeg,jpg,png format</small>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" value="{{$users->description }}" />

                {{--                <textarea rows="5" class="form-control" name="description" value="{{$users->title}}" ></textarea>--}}
            </div>

            <div class="form-group">
                <p><span class="require">*</span> </p>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>

            </div>

        </form>

    </div>
@endsection