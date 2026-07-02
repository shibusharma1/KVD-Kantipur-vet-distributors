<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\view;
use App\Models\Posts\PostTypeModel;
use App\Models\Posts\PostModel;
use App\Models\ProductCategory;
use App\Models\Settings\SettingModel;

class HeaderComposer{

	 public function __construct()
    {
        // Dependencies automatically resolved by service container...
    }

	public function compose(View $view){
		$view->with('navigations', PostTypeModel::where(['is_menu'=>'1'])->orderBy('ordering','asc')->get());
		$view->with('productcategories', ProductCategory::where('show_in_home', 1)->where('is_active', 1)->latest()->take(4)->get());
		$view->with('setting', SettingModel::where('id',1)->first());
		$view->with('services', PostModel::where(['post_type'=>'2','post_parent'=>'0'])->orderBy('id','asc')->get());
			
	}
}