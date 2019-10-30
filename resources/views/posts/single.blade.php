



<table class="table table-striped">
{{--    <h1>Rehman</h1>--}}
    <thead class="bg-dark text-big text-light">
    <tr>
{{--        <th scope="col">#</th>--}}
{{--        <th scope="col">Title</th>--}}
{{--        <th scope="col">Description</th>--}}
{{--        <th scope="col">Feature image</th>--}}
    </tr>
    </thead>
    <tbody>

    <tr>

{{--        <th>{{$posts->id}}</th>--}}
{{--        <th >{{$posts->title}}</th>--}}
{{--        <th>{{$posts->description}}</th>--}}
{{--        <th>--}}
{{--            @if(isset($posts->image))--}}
{{--                <img src="{{ asset('uploads/profile_pic/'.$posts->image) }}" alt="Profile Pic 1 " style="width: 50px">--}}
{{--            @else--}}
{{--                <img src="{{ asset('uploads/profile_pic/download.jpg') }}" alt="Profile Pic" style="width: 50px">--}}
{{--            @endif--}}
{{--        </th>--}}

        <div style="border: 2px solid #dcdcdc;border-radius: 8px;padding: 20px; margin: auto;">
            <p><strong>Comment Id:</strong> <?php echo $posts->id ?></p>
            <p><strong>Post Title: </strong><?php echo $posts->title?> </p>
            <p><strong>Description:</strong><?php echo $posts->description ?></p>

                            @if(isset($posts->image))
                                <img src="{{ asset('uploads/profile_pic/'.$posts->image) }}" alt="Profile Pic 1 " style="width: 150px">
                            @else
                                <img src="{{ asset('uploads/profile_pic/download.jpg') }}" alt="Profile Pic" style="width: 50px">
                            @endif


        </div>

    </tr>

    </tbody>
</table>
