<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\AddRequest;
use App\Http\Requests\Category\EditRequest;
use App\Models\Category;
use App\Models\Category_News;
use App\Models\Category_Product;
use DateTime,DB,Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::select('id','name','parent_id','position','status','user_id','updated_at')->with(
            [
                'user' => function ($query) {
                    $query->select('id','lastname','firstname');
                }
            ]
        )->orderBy('position','asc')->get()->toArray();
        return view('backend.module.category.list',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $position = DB::table("category")->where("parent_id",0)->max('position') + 1;
        $parent   = Category::select('id','name','parent_id')->orderBy('position')->get()->toArray();
        return view('backend.module.category.add',['position' => $position,'parent' => $parent]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        $category                       = new Category;
        $category->name                 = $request->txtName;
        $category->parent_id            = $request->sltParent;
        $category->position             = $request->txtPosition;
        $category->description          = $request->txtDescription;
        $category->access               = $request->sltAccess;
        $category->target_open          = $request->sltTarget;
        $category->meta_robot           = $request->sltMetaRobot;
        $category->image                = $request->txtImage;
        $category->alt                  = $request->txtAlt;
        $category->status               = ($request->chkStatus == "on") ? "on" : "off";
        $category->slug                 = $request->txtSlug;
        $category->title_tag            = $request->txtMetaTitle;
        $category->meta_keywords_tag    = $request->txtMetaKeywords;
        $category->meta_description_tag = $request->txtMetaDescription;
        $category->user_id              = Auth::user()->id;
        $category->created_at           = new DateTime();
        $category->save();

        if ($request->btnSave) {
            return redirect()->route('admin.category.create')->with('success','Add A Successful Category');
        } else {
            return redirect()->route('admin.category')->with('success','Add A Successful Category');
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
		$category = Category::findOrFail($id);
		$parent   = Category::select('id','name','parent_id')->orderBy('position')->get()->toArray();
        return view('backend.module.category.edit',['category' => $category,'parent' => $parent]);
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
        $category                       = Category::findOrFail($id);
        $category->name                 = $request->txtName;
        $category->parent_id            = $request->sltParent;
        $category->position             = $request->txtPosition;
        $category->description          = $request->txtDescription;
        $category->access               = $request->sltAccess;
        $category->target_open          = $request->sltTarget;
        $category->meta_robot           = $request->sltMetaRobot;
        $category->image                = $request->txtImage;
        $category->alt                  = $request->txtAlt;
        $category->status               = ($request->chkStatus == "on") ? "on" : "off";
        $category->slug                 = $request->txtSlug;
        $category->title_tag            = $request->txtMetaTitle;
        $category->meta_keywords_tag    = $request->txtMetaKeywords;
        $category->meta_description_tag = $request->txtMetaDescription;
        $category->user_id              = Auth::user()->id;
        $category->updated_at           = new DateTime();
        $category->save();

        if ($request->btnSave) {
            return redirect()->route('admin.category.update',['id' => $id])->with('success','Update A Successful Category');
        } else {
            return redirect()->route('admin.category')->with('success','Update A Successful Category');
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
        $category_parent  = Category::where('parent_id',$id)->count();
        $category_news    = Category_News::where('category_id',$id)->count();
        $category_product = Category_Product::where('category_id',$id)->count();
        if ($category_parent == 0 && $category_news == 0 && $category_product == 0) {
            Category::findOrFail($id)->delete();
            return redirect()->route('admin.category')->with('success','Delete A Successful Category');
        } else {
            return redirect()->route('admin.category')->with('warning', 'You Can\'t Delete Category.Category Exist Child Category,News Or Product');
        }
    }
}
