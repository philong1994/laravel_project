<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manufacturer\AddRequest;
use App\Http\Requests\Manufacturer\EditRequest;
use App\Models\Manufacturer;
use DateTime;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$manufacturer = Manufacturer::select('id','name','email','phone','website','updated_at')->orderBy('id','desc')->get()->toArray();
        return view('backend.module.manufacturer.list',['manufacturer' => $manufacturer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.module.manufacturer.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        $manufacturer              = new Manufacturer;
        $manufacturer->name        = $request->txtName;
        $manufacturer->website     = $request->txtWesbite;
        $manufacturer->address     = $request->txtAddress;
        $manufacturer->email       = $request->txtEmail;
        $manufacturer->phone       = $request->txtPhone;
        $manufacturer->description = $request->txtDescription;
        $manufacturer->logo        = $request->txtImage;
        $manufacturer->created_at  = new DateTime();
        $manufacturer->save();

        if ($request->btnSave) {
            return redirect()->route('admin.manufacturer.create')->with('success','Add A Successful Manufacturer');
        } else {
            return redirect()->route('admin.manufacturer')->with('success','Add A Successful Manufacturer');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$manufacturer = Manufacturer::findOrFail($id);
        return view('backend.module.manufacturer.edit',['manufacturer' => $manufacturer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        $manufacturer              = Manufacturer::findOrFail($id);
        $manufacturer->name        = $request->txtName;
        $manufacturer->website     = $request->txtWesbite;
        $manufacturer->address     = $request->txtAddress;
        $manufacturer->email       = $request->txtEmail;
        $manufacturer->phone       = $request->txtPhone;
        $manufacturer->description = $request->txtDescription;
        $manufacturer->logo        = $request->txtImage;
        $manufacturer->created_at  = new DateTime();
        $manufacturer->save();

        if ($request->btnSave) {
            return redirect()->route('admin.manufacturer.edit',['id' => $id])->with('success','Update A Successful Manufacturer');
        } else {
            return redirect()->route('admin.manufacturer')->with('success','Update A Successful Manufacturer');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Manufacturer::findOrFail($id)->delete();
        return redirect()->route('admin.manufacturer')->with('success','Delete A Successful Manufacturer');
    }
}
