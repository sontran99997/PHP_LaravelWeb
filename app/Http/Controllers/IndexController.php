<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //action cho trang index
    public function home(){
        $query = DB::table("product")
            ->join('category','product.CateID','=','category.cateid')
            
            ->select('category.catename','product.ProductID','product.ProductName','product.Price','product.Quantity','product.Picture')
            //->where('product.hot','=','1')
            //->take(2)
            ->get();
        return view("homepage")->with(['ds'=>$query]);
    }
    public function detail($pro, $id){
        $query = DB::table("product")
            ->join('category','product.CateID','=','category.cateid')
            
            ->select('category.catename','product.ProductID','product.ProductName','product.Price','product.Quantity','product.Picture')
            ->where('product.ProductID','=',$id)
            //->take(2)
            ->first();
        return view("detail")->with(['ds'=>$query]);
    }
}
