<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\News\AddRequest;
use App\Http\Requests\News\EditRequest;
use App\Models\News;
use App\Models\Category;
use App\Models\Category_News;
use DateTime,Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::select('id','title','author','status','featured','updated_at')->with(
            [
                'category' => function ($query) {
                    $query->select('category_id','name');
                }
            ]
        )->orderBy('id','desc')->get()->toArray();
        return view('backend.module.news.list',['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::select('id','name','parent_id','position','status')->orderBy('position')->get()->toArray();
        return view('backend.module.news.add',['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
		$news                       = new News;
		$news->title                = $request->txtTitle;
		$news->author               = (empty($request->txtNickname)) ? $request->txtLoginName : $request->txtNickname;
		$news->origin               = $request->txtOrigin;
		$news->intro                = $request->txtIntro;
		$news->content              = $request->txtContent;
		$news->foot                 = $request->txtFoot;
		$news->viewed               = $request->txtViewed;
		$news->youtube              = $request->txtVideo;
		$news->access               = $request->sltAccess;
		$news->target_open          = $request->sltTarget;
		$news->meta_robot           = $request->sltMetaRobot;
		$news->image                = $request->txtImage;
		$news->alt                  = $request->txtAlt;
		$news->status               = ($request->chkStatus == "on") ? "on" : "off";
		$news->featured             = ($request->chkFeatured == "on") ? "on" : "off";
		$news->slug                 = $request->txtSlug;
		$news->title_tag            = $request->txtMetaTitle;
		$news->meta_keywords_tag    = $request->txtMetaKeywords;
		$news->meta_description_tag = $request->txtMetaDescription;
		$news->user_id              = Auth::user()->id;
		$news->created_at           = new DateTime();
		$news->save();

        foreach ($request->chkCategory as $category) {
            $category_news              = new Category_News;
            $category_news->category_id = $category;
            $category_news->news_id     = $news->id;
            $category_news->save();
        }
        
        if ($request->btnSave) {
            return redirect()->route('admin.news.create')->with('success','Add A Successful News');
        } else {
            return redirect()->route('admin.news')->with('success','Add A Successful News');
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
        $news   = News::findOrFail($id);
        $title  = $news["title"];
        $image  = ($news["image"] == null) ? asset('backend/assets/images/upload.png') : $news["image"];
        $author = $news["author"];
        if ($news["access"] == 0) {
            $access = "Public";
        } elseif ($news["access"] == 1) {
            $access = "Admin";
        } elseif ($news["access"] == 2) {
            $access = "Member";
        } else {
            $access = "Guest";
        }
        
        $open        = $news["target_open"];
        $viewed      = $news["viewed"];
        $video       = '<a href="'.$news["video"].'">'.$news["video"].'</a>';
        $status      = $news["status"];
        $featured    = $news["featured"];
        $intro       = $news["intro"];
        $content     = $news["content"];
        $foot        = $news["foot"];
        $robot       = $news["meta_robot"];
        $title       = $news["title_tag"];
        $slug        = $news["slug"];
        $keywords    = $news["meta_keywords_tag"];
        $description = $news["meta_description_tag"];

        $html = '<div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">'.$title.'</h5>
            </div>

            <div class="modal-body">
                <div class="col-md-4">
                    <img class="img-responsive" id="main-image" src="'.$image.'" />
                </div>
                <div class="col-md-8">
                    <p><strong>Author : </strong>'.$author.'</p>
                    <p><strong>Access : </strong>'.$access.'</p>
                    <p><strong>Target Open : </strong>'.$open.'</p>
                    <p><strong>Viewed : </strong>'.$viewed.'</p>
                    <p><strong>Link Youtube : </strong>'.$video.' </p>
                    <p><strong>Status : </strong>'.$status.'</p>
                    <p><strong>Featured : </strong>'.$featured.'</p>
                </div>
                <div class="col-md-12">
                    <p>'.$intro.'</p>
                    <p>'.$content.'</p>
                    <p>'.$foot.'</p>
                    <hr />
                </div>
                
                <div class="col-md-12">
                    <p><strong>Meta Robot : </strong>'.$robot.'</p>
                    <p><strong>URL Friendly : </strong>'.$slug.'</p>
                    <p><strong>Meta Title : </strong>'.$title.'</p>
                    <p><strong>Meta Tags : </strong>'.$keywords.'</p>
                    <p><strong>Meta Description : </strong>'.$description.'</p>
                </div>
                <div style="clear:both"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>';
        return $html;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news     = News::where('id',$id)->with(['category' => function ($query) {
            $query->select('category_id');
        }])->first()->toArray();

        $category = Category::select('id','name','parent_id','position','status')->orderBy('position','ASC')->get()->toArray();

        $category_check = array();
        foreach ($news["category"] as $item) {
            $category_check[] = $item["category_id"];
        }

        return view('backend.module.news.edit',['news' => $news,'category' => $category,'category_check' => $category_check]);
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
        $news                       = News::findOrFail($id);
        $news->title                = $request->txtTitle;
        $news->author               = (empty($request->txtNickname)) ? $request->txtLoginName : $request->txtNickname;
        $news->origin               = $request->txtOrigin;
        $news->intro                = $request->txtIntro;
        $news->content              = $request->txtContent;
        $news->foot                 = $request->txtFoot;
        $news->viewed               = $request->txtViewed;
        $news->youtube              = $request->txtVideo;
        $news->access               = $request->sltAccess;
        $news->target_open          = $request->sltTarget;
        $news->meta_robot           = $request->sltMetaRobot;
        $news->image                = $request->txtImage;
        $news->alt                  = $request->txtAlt;
        $news->status               = ($request->chkStatus == "on") ? "on" : "off";
        $news->featured             = ($request->chkFeatured == "on") ? "on" : "off";
        $news->slug                 = $request->txtSlug;
        $news->title_tag            = $request->txtMetaTitle;
        $news->meta_keywords_tag    = $request->txtMetaKeywords;
        $news->meta_description_tag = $request->txtMetaDescription;
        $news->user_id              = Auth::user()->id;
        $news->updated_at           = new DateTime();
        $done = $news->save();

        if ($done) {
            Category_News::where('news_id', $id)->delete();
            foreach ($request->chkCategory as $category) {
                $category_news              = new Category_News;
                $category_news->category_id = $category;
                $category_news->news_id     = $news->id;
                $category_news->save();
            }
        }
        
        
        if ($request->btnSave) {
            return redirect()->route('admin.news.edit',['id' => $id])->with('success','Update A Successful News');
        } else {
            return redirect()->route('admin.news')->with('success','Update A Successful News');
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
        News::findOrFail($id)->delete();
        return redirect()->route('admin.news')->with('success','Delete A Successful News');
    }
}