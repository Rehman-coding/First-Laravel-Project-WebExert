<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use File;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $setting = Settings::pluck('value', 'name')->all();

        $all_columns = array(
            array(
                'name' => 'site_title',
                'id' => 'site_title',
                'type' => 'textfield',
                'label' => 'Site Title',
                'place_holder' => 'Enter Site Title',
                'class' => 'form-control',
                'style' => 'width:30px;max-width:100%;margin-top:12px'
            ),

            array(
                'name' => 'logo',
                'id' => 'logo',
                'type' => 'file',
                'label' => 'Site Logo',
                'class' => 'form-control',
                'style' => 'width:120px;max-width:100%;margin-top:12px'
            ),


            array(
                'name' => 'facebook',
                'id' => 'facebook',
                'type' => 'textfield',
                'label' => 'Facebook Link',
                'place_holder' => 'Enter Your Link',
                'class' => 'form-control',
                'style' => 'width:30px;max-width:100%;margin-top:12px'
            ),
            array(
                'name' => 'github',
                'id' => 'facebook',
                'type' => 'textfield',
                'label' => 'Github Link',
                'place_holder' => 'Enter Your Link',
                'class' => 'form-control',
                'style' => 'width:30px;max-width:100%;margin-top:12px'
                ),
            array(
                    'name' => 'linkdin',
                    'id' => 'facebook',
                    'type' => 'textfield',
                    'label' => 'Linkdin Link',
                    'place_holder' => 'Enter Your Link',
                    'class' => 'form-control',
                    'style' => 'width:30px;max-width:100%;margin-top:12px'
                ),

        );

        return view('settings.setting', ['title' => 'Site Setting', 'settings' => $setting, 'all_columns' => $all_columns]);

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//       dd('Working');
        $input = $request->all();
        $settings = settings::pluck('value', 'name')->all();
        $logo = "";
        if ($request->hasFile('logo')) {
            if($request->file('logo')->isValid()) {
                $this->validate($request, [
                    'logo' => 'required|image|mimes:jpeg,png,jpg'
                ]);

                $file = $request->file('logo');
                $destinationPath = public_path('/uploads/');
                //$extension = $file->getClientOriginalExtension('logo');
                $logo = $file->getClientOriginalName('logo');
                $logo = rand() . $logo;
                //renameing image
                $request->file('logo')->move($destinationPath, $logo);
                if (isset($settings['logo'])) {
                    if (file_exists(public_path('/uploads/'.$settings['logo']))) {
                        $delete_old_file = public_path('uploads/'.$settings['logo']);
                        File::delete($delete_old_file);
                    }
                }

            }
        }
        unset($input['_token']);
        unset($input['_method']);
        if (isset($logo) && !empty($logo)) {
            $input['logo'] = $logo;
        } else {
            $input['logo'] = isset($settings['logo']) ? $settings['logo'] : '';
        }
//        dd("not working");
        DB::table('settings')->truncate();
        // DB::table('settings')->delete();
        foreach ($input as $key => $value) {
//            dd("not working");
            $setting = new settings();
            $setting->name = $key;
            $setting->value = $value;
            $setting->save();
        }
        Session::flash('success_message', 'Settings has been saved successfully!');


        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Setting $setting
     * @return \Illuminate\Http\Response
     */


    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Setting $setting
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}