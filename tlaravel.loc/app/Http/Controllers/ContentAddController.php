<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Content;
class ContentAddController extends Controller
{
    public function execute(Request $request){

    	if($request->isMethod('post')){
    		//dd($request);

    		$input = $request->except('_token');

            $messages = [
                'required'=>"Поле :attribute обязательна для заполнения",
                'unique'=>"Такое название уже существует"
            ];

    		$validator = Validator::make($input,[

    			'name' => 'required|max:255|unique:product',
    			'product_code' => 'required|max:255',
    			'composition' => 'required|max:255',
    			'price' => 'required|max:255',

    		],$messages);
    		if($validator->fails()){
    			return redirect()->route('contentAdd')->withErrors($validator)->withInput();
    		}
    		
    		if($request->hasFile('img'))
    		{
	    		$file = $request->file('img');
	    		$input['img'] = $file->getClientOriginalName();

	    		$file->move(public_path().'/assets/img',$input['img']);
	  			
	  			
    		}
            $input['votes'] = 0;
    		$content = new Content($input);
            
    		if($content->save()){
    			return redirect('admin')->with('status','Контент добавлен');
    		}


    	}


    	if(view()->exists('admin.content_add')){
    		$data = [
    				'title'=>"New Genre"
    		];
    		return view('admin.content_add',$data);
    	}
    	abort(404);
    }
}
