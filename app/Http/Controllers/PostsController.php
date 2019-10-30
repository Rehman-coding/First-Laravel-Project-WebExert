<?php

namespace App\Http\Controllers;
use File;
use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
//        dd($id);
        $users = Post::get();
        return view('posts.postindex',['users'=>$users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
//        dd("working");
        $user = new Post();
        $user->title = $request->input('title');
        $user->description = $request->input('description');
        if ($request->hasFile('image')) {
//               dd("working");
            if ($request->file('image')->isValid()) {

                $this->validate($request, [
                    'image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('image');
                $destinationPath = public_path('uploads/profile_pic"');
                $extension = $file->getClientOriginalExtension('image');
                $fileName = $file->getClientOriginalName('image');
                $fileName = time().$fileName;
                $delete_old_file = public_path('uploads/profile_pic/'.$user->image);
                File::delete($delete_old_file);
                $request->file('image')->move($destinationPath, $fileName);
                $user->image = $fileName;
            }
        }



        $user->save();
        return redirect()->route('posts.index')->with('success','Post created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);

//        return view('posts.show');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        dd('Rehman');
        $users = Post::findOrFail($id);
        return view('posts.edit',['users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Post::findOrFail($id);
        $user->title=$request->input('title');
        $user->description=$request->input('description');
        if ($request->hasFile('image')) {
//               dd("working");
            if ($request->file('image')->isValid()) {

                $this->validate($request, [
                    'image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('image');
                $destinationPath = public_path('uploads/profile_pic"');
                $extension = $file->getClientOriginalExtension('image');
                $fileName = $file->getClientOriginalName('image');
                $fileName = time().$fileName;
                $delete_old_file = public_path('uploads/profile_pic/'.$user->image);
                File::delete($delete_old_file);
                $request->file('image')->move($destinationPath, $fileName);
                $user->image = $fileName;
            }
        }
        $user->save();

        return redirect()->route('posts.index')->with('success','Post Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Post::findOrFail($id);
        $user->delete();
//        Session::flash('success_message', 'Great! user has been deleted successfully!');
//        return redirect()->back()->with('success_message','Great! user has been deleted successfully!');
        return redirect()->route('posts.index')->with('success','Post Delete successfully.');
    }
    public function getpost(Request $request){

        $posts = Post::findOrFail($request->input('id'));

      return view('posts.single', ['posts'=>$posts]);
//      return view('posts.blog', ['posts'=>$posts]);

    }
    public function postforblog(Request $request){
//        $posts = Post::findOrFail($request->input('id'));
//        dd($posts);
//        return view('posts.single'/*, ['posts'=>$posts]*/);
        return view('posts.bloglist');
    }
}
