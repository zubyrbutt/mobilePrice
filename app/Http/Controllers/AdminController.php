<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Category;
use App\Company;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $brands = Category::all();
        return view('admin.pages.home', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $brands = Company::all();
        return  view('admin.pages.android',compact('brands'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->toArray());


        $this->validate(request(), [
            'mobileName' => 'required',

        ]);

        $image = $request->file('image');
        $name = rand().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/media/mobile');
        $imagePath =  "/media/mobile/".  $name;
        $image->move($destinationPath, $name);

        $product = new Product;


        $product->company_id = $request->get('company_id');
        $product->mobileName = $request->get('mobileName');
        $product->mobilePrice = $request->get('mobilePrice');
        $product->display = $request->get('display');
        $product->processor = $request->get('processor');
        $product->frontCamera = $request->get('frontCamera');
        $product->rearCamera = $request->get('rearCamera');
        $product->ram = $request->get('ram');
        $product->storage = $request->get('storage');
        $product->batteryCapacity = $request->get('batteryCapacity');
        $product->os = $request->get('os');
        $product->marketStatus = $request->get('marketStatus');
        $product->images = $request->get('images');
        $product->summary = $request->get('summary');
        $product->images = $imagePath;
        $product->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
