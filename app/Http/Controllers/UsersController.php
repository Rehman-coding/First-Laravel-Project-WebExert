<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('theme.partial.navbar',['users'=>$users]);

//        $users = User::get();
//        return view('users.index',['users'=>$users]);
    }
    public function dash()
    {
//        dd("working");
        return view('dashboard.dashboardcontent');
    }
    public function profile()
    {
        $user = Auth::user();
        //
//         dd($id);
//        $users = User::get();
        return view('auth.edit',['user'=>$user]);
    }


//    public function profile($id)
//    {
//        dd("its working");
////        $users = User::get($id);
////        return view('users.index',['users'=>$users]);
//    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        dd("rehman");
//        $user = new User();
//        $user->name = $request->input('name');
//        $user->email = $request->input('email');
//        $user->password = bcrypt($request->input('password'));
////        Session:flash('success','User added successfully');
//        $user->save();
//        return back()->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

dd(edits);
//        $users = User::findOrFail($id);
//        return view('users.edit',['users'=>$users]);
//        $user = new User($id);
//        $user->name = $request->input('name');
//        $user->email = $request->input('email');



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
        $user = User::findOrFail($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->save();
        return redirect()->back()->with("success_message","You have update the record.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('success_message', 'Great! user has been deleted successfully!');
        return redirect()->back()->with('success_message','Great! user has been deleted successfully!');
    }

    public function updateuser(Request $request)
    {
//        dd("working");
//        $user = User::get();
        $user = Auth::user();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->save();
        return redirect('home')->with("success_message","User Update Successfully.");

    }


}
