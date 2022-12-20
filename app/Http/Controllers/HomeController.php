<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
class HomeController extends Controller
{
    //
    public function index(){
        $tiket= Tiket::all();
        
        return view('frontpage',compact('tiket'));
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }

    public function show($id){
       $tiket = Tiket::find($id);
       return view('tiket-detail',compact('tiket'));
    }

}
