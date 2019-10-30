
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
{{--    <form method="post" type="multi" action="{{route("employees.store")}}" enctype="multipart/form-data">--}}
    <form action="{{route('posts.store')}}" type="multi" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="title">Title <span class="require">*</span></label>
            <input type="text" class="form-control" name="title" />
        </div>

        <div class="form-group row">
            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Post Pic') }}</label>

            <div class="col-md-6">
                <input type="file" class="post_pic @error('post_pic') is-invalid @enderror" name="image">
                @error('post_pic')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea rows="5" class="form-control" name="description" ></textarea>
        </div>

        <div class="form-group">
            <p><span class="require">*</span> </p>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Create
            </button>

        </div>

    </form>

</div>
@endsection
