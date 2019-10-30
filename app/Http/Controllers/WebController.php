<?php

namespace App\Http\Controllers;

use App\web;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        dd("Rehman");
            return view('webcontent.setting');
    }

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

//        dd("working");
        $user = new web();

        $user->btntext = $request->input('btntext');
        $user->btnlink = $request->input('btnlink');
//        $user->image = $request->input('image');

        if ($request->hasFile('image')) {
            dd("working");
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
        return redirect()->route('web.index')->with('success','Post created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\web  $web
     * @return \Illuminate\Http\Response
     */
    public function show(web $web)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\web  $web
     * @return \Illuminate\Http\Response
     */
    public function edit(web $web)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\web  $web
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, web $web)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\web  $web
     * @return \Illuminate\Http\Response
     */
    public function destroy(web $web)
    {
        //
    }
}
