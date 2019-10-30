<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd('working');
        $users = category::get();

        return view('dashboard.categories',['users'=>$users]);
//        return view('dashboard.categories');


    }


    public function insert()
    {


    }
    public function tags()
    {

dd("working");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new category();
        $category->name = $request->input('name');
        $category->slug = $this->createSlug($request->input('name'));
        $category->save();
//        dd("working");
        return redirect()->route('category.index')->with('success','Category created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = category::findOrFail($id);
        return view('dashboard.edit',['users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd("working");
        $user = category::findOrFail($id);
//        dd($user);
        $user->delete();
//        Session::flash('success_message', 'Great! user has been deleted successfully!');
//        return redirect()->back()->with('success_message','Great! user has been deleted successfully!');
        return redirect()->route('category.index')->with('success','category Delete successfully.');

    }
    public function createSlug($title, $id = 0)
    {
// Normalize the title
        $slug = Str::slug($title);

// Get any that could possibly be related.
// This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);

// If we haven't used it before then we are all good.
        if (!$allSlugs->contains('slug', $slug)) {
            return $slug;
        }

// Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug . '-' . $i;
            if (!$allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }

        throw new \Exception('Can not create a unique slug');
    }

    protected function getRelatedSlugs($slug, $id = 0)
    {
        return category::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }


}
