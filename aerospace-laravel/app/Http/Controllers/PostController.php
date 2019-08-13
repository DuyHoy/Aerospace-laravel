<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    //
    public function index(){
    $posts=Post::all();
    // return view('news.news-body',compact('posts'));
    return view('frontEnd.news',compact('posts'));

    }
    public function detialpost($id){
        $post=Post::findOrFail($id);
        // $imagesGalleries=ImageGallery_model::where('products_id',$id)->get();
        // $totalStock=ProductAtrr_model::where('products_id',$id)->sum('stock');
        // $relateProducts=Products_model::where([['id','!=',$id],['categories_id',$detail_product->categories_id]])->get();
        // return view('frontEnd.post_details',compact('detail_product','imagesGalleries','totalStock','relateProducts'));
        return view('frontEnd.post_details',compact('post'));
    }
}
