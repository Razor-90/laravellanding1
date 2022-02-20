<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Page;

class PagesController extends Controller
{
    //
    public function execute(){

    	if(view()->exists('admin.pages')){
			
			$pages = Page::all();

			$data = [

				'title'=>'Pages',
				'pages'=>$pages

			];

			return view ('admin.pages', $data);

    	}

    	abort(404);

    }
}
