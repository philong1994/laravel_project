<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Attribute\AddRequest;
use App\Http\Requests\Attribute\EditRequest;
use App\Models\Attribute;
use DateTime;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attribute = Attribute::select('id','name','parent_id','status','updated_at')->orderBy('parent_id','asc')->get()->toArray();
        return view('backend.module.attribute.list',['attribute' => $attribute]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = Attribute::select('id','name','parent_id')->get()->toArray();
        return view('backend.module.attribute.add',['parent' => $parent]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        $attribute              = new Attribute;
        $attribute->name        = $request->txtName;
        $attribute->description = $request->txtDescription;
        $attribute->parent_id   = $request->sltParent;
        $attribute->status      = ($request->chkStatus == "on") ? "on" : "off";
        $attribute->created_at  = new DateTime();
        $attribute->save();

        if ($request->btnSave) {
            return redirect()->route('admin.attribute.create')->with('success','Add A Successful Attribute');
        } else {
            return redirect()->route('admin.attribute')->with('success','Add A Successful Attribute');
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
        $attribute = Attribute::findOrFail($id);
        $parent    = Attribute::select('id','name','parent_id')->get()->toArray();
        return view('backend.module.attribute.edit',['attribute' => $attribute,'parent' => $parent]);
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
        $attribute              = Attribute::findOrFail($id);
        $attribute->name        = $request->txtName;
        $attribute->description = $request->txtDescription;
        $attribute->parent_id   = $request->sltParent;
        $attribute->status      = ($request->chkStatus == "on") ? "on" : "off";
        $attribute->updated_at  = new DateTime();
        $attribute->save();

        if ($request->btnSave) {
            return redirect()->route('admin.attribute.edit',['id' => $id])->with('success','Update A Successful Attribute');
        } else {
            return redirect()->route('admin.attribute')->with('success','Update A Successful Attribute');
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
        $parent        = Attribute::where('parent_id',$id)->count();
        if ($parent == 0) {
            Attribute::findOrFail($id)->delete();
            return redirect()->route('admin.attribute')->with('success','Delete A Successful Attribute');
        } else {
            return redirect()->route('admin.attribute')->with('warning', 'You Can\'t Delete Attribute.Attribute Exist Child Attribute');
        }
    }
}
