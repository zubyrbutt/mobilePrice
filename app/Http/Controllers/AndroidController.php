<?php

namespace App\Http\Controllers;

use App\Android;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AndroidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $android_lists = DB::table('android_os')

            ->orderBy('id', 'asc')
            ->get();

        return view('admin.pages.android', compact('android_lists'));
    }


    public  function fetch(Request $request){
        //dd($request);
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('android_os')
            ->where($select,$value)
            ->groupBy($dependent)
            ->get();

        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        foreach ($data as $row){
            $output .='<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
            echo $output;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Android  $android
     * @return \Illuminate\Http\Response
     */
    public function show(Android $android)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Android  $android
     * @return \Illuminate\Http\Response
     */
    public function edit(Android $android)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Android  $android
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Android $android)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Android  $android
     * @return \Illuminate\Http\Response
     */
    public function destroy(Android $android)
    {
        //
    }
}
