<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use Validator;
class COntentEditController extends Controller
{
    public function execute(Content $content,Request $request){

        if($request->isMethod('delete')){
            $content->delete();
            return redirect('admin')->with('status','Контент удален'); 
        }

        if($request->isMethod('post')){
            $input = $request->except('_token');
            $validator = Validator::make($input,[
                'name'=>'required|max:255|unique:product,name,'.$input['id'],
    			'product_code' => 'required|max:255',
    			'composition' => 'required|max:255',
    			'price' => 'required|max:255',
    			

            ]);
           
            if($validator->fails()){
                return redirect()
                        ->route('main',['content'=>$input['id']])
                        ->withErrors($validator);
            }

            if($request->hasFile('img')){
                $file = $request->file('img');
                $file->move(public_path().'/assets/img',$file->getClientOriginalName());
                $input['img'] = $file->getClientOriginalName();
            }

            else{
                $input['img'] = $input['old_img'];    
            }

                unset($input['old_img']);


                $content->fill($input);
                if($content->update()){
                    return redirect('admin')->with('status','Контент обновлен');
                }
        }


    	$old = $content->toArray();
    	if(view()->exists('admin.content_edit')){
    		$data = [
    					'title' =>'Редактирование контента - '.$old['name'],
    					'data' =>$old
    				];
    		return view('admin.content_edit',$data);
    	}
    }
}
