<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\People;

class PeopleController extends Controller
{
    //
    public function execute(){

        if(view()->exists('admin.people')){
            
            $people = People::all();

            $data = [

                'title'=>'people',
                'people'=>$people


            ];

            return view ('admin.people', $data);

        }

        abort(404);
        
    }
}
