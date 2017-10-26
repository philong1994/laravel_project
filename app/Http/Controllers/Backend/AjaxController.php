<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attribute;
use DB;

class AjaxController extends Controller
{
    public function switch_change (Request $request) {
		$state  = $request["state"];
		$table  = $request["table"];
		$column = $request["column"];
		$id     = $request["id"];
		if ($state == "true") {
			DB::table($table)->where('id', $id)->update([$column => "on"]);
		} else {
			DB::table($table)->where('id', $id)->update([$column => "off"]);
		}
    }

    public function position (Request $request) {
		$id       = $request["id"];
		$position = DB::table("category")->where("parent_id",$id)->max('position');
    	return $position + 1;
    }

    public function attribute () {
    	$attribute = Attribute::select('id','name','parent_id')->get()->toArray();
    	recursionSelect ($attribute);
    }

    public function change_position (Request $request) {
		$id       = $request["id"];
		$position = ($request["position"] <= 0) ? 1 : $request["position"];
    	DB::table("category")->where('id', $id)->update(["position" => $position]);
    }
}
