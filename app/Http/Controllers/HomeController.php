<?php
namespace App\Http\Controllers;
use App\Models\About;

class HomeController extends Controller{
    public function index(){
        $rows=About::get();
        return view("welcome",[
            "rows" => $rows
        ]);
    }
}