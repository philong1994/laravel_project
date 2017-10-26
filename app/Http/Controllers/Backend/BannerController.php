<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\AddRequest;
use App\Http\Requests\Banner\EditRequest;
use App\Models\Banner;
use App\Models\Position;
use DateTime,Auth;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::select('id','name','link','updated_at','status','user_id','position_id')->with(
            [
                'user' => function ($query) {
                    $query->select('id','lastname','firstname');
                },
                'position' => function ($query) {
                    $query->select('id','name');
                }
            ]
        )->orderBy('id','desc')->get()->toArray();

        return view('backend.module.banner.list',['banner' => $banner]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $position = Position::select('id','name')->get()->toArray();
        return view('backend.module.banner.add',['position' => $position]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        $banner              = new Banner;
        $banner->name        = $request->txtName;
        $banner->script_code = $request->txtScript;
        $banner->link        = $request->txtLink;
        $banner->image       = $request->txtImage;
        $banner->alt         = $request->txtAlt;
        $banner->description = $request->txtDescription;
        $banner->position_id = $request->sltPosition;
        $banner->access      = $request->sltAccess;
        $banner->target_open = $request->sltTarget;
        $banner->status      = ($request->chkStatus == "on") ? "on" : "off";
        $banner->user_id     = Auth::user()->id;
        $banner->created_at  = new DateTime();
        $banner->save();
        
        if ($request->btnSave) {
            return redirect()->route('admin.banner.add')->with('success','Add A Successful Banner');
        } else {
            return redirect()->route('admin.banner')->with('success','Add A Successful Banner');
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
        $banner   = Banner::findOrFail($id);
        $position = Position::select('id','name')->get()->toArray();
        return view('backend.module.banner.edit',['banner' => $banner,'position' => $position]);
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
        $banner              = Banner::findOrFail($id);
        $banner->name        = $request->txtName;
        $banner->script_code = $request->txtScript;
        $banner->link        = $request->txtLink;
        $banner->image       = $request->txtImage;
        $banner->alt         = $request->txtAlt;
        $banner->description = $request->txtDescription;
        $banner->position_id = $request->sltPosition;
        $banner->access      = $request->sltAccess;
        $banner->target_open = $request->sltTarget;
        $banner->status      = ($request->chkStatus == "on") ? "on" : "off";
        $banner->user_id     = Auth::user()->id;
        $banner->updated_at  = new DateTime();
        $banner->save();
        
        if ($request->btnSave) {
            return redirect()->route('admin.banner.edit',['id' => $id])->with('success','Update A Successful Banner');
        } else {
            return redirect()->route('admin.banner')->with('success','Update A Successful Banner');
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
        Banner::findOrFail($id)->delete();
        return redirect()->route('admin.banner')->with('success','Delete A Successful Banner');
    }
}
