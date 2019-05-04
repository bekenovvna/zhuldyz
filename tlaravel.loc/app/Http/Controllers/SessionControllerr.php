<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use DB;
//<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

class SessionControllerr extends Controller {

   public function accessSessionData(Request $request) {
        // dd($request->session()->all());
        
        $items = $request->session()->all();
        
        $items = array_slice($items,3);
        $data = [
            'items' =>$items,
        ];
        
         return view('basket',$data);

         //если пусто  то ошибка нужна проверка
   }


   public function storeSessionData(Request $request,$id) {
      //print_r($id);         print_r($product->name);
 

    $product = DB::table('product')->where('id', $id)->first();
    //if ($request->session()->exists('$id')) {dd("qw")}

       $items =['id'=>$id,
           'name'=>$product->name,
           'product_code'=>$product->product_code,
           'composition'=>$product->composition,
           'price'=>$product->price,
           'img'=>$product->img,
           'qty'=>$request->quantity,


         ];

         
                $request->session()->put($items['name'],$items);
                return redirect('/about');
            }



    public function deleteSessionData(Request $request,$code) {
      
      $request->session()->forget($code);
      //$request->session()->flush();
     // $request->session()->pull('$id', 'default');
     $items = $request->session()->all();
        
        $items = array_slice($items,3);
        $data = [
            'items' =>$items,
        ];

        return redirect()->route('basket');

      echo "Data has been removed from session.";
   }

   public function deleteSession(Request $request) {
      $request->session()->flush();
     // $request->session()->pull('$id', 'default');
     return redirect()->route('about');

      echo "Data has been removed from session.";
   }
}