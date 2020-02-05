<?php

namespace App\Http\Controllers;

use App\Category;
use App\Region;

class WebappController extends Controller
{
    public function index(Category $category, Region $region){
        $data = $category->orderBy('created_at','desc')->get();
        $data1 = $region->orderBy('name','asc')->whereBetween('id', [1, 5])->get();
        $data2 = $region->orderBy('name','asc')->whereBetween('id', [6, 11])->get();
        $data3 = $region->orderBy('name','asc')->whereBetween('id', [12, 17])->get();
        return view('webapp', compact('data','data1','data2','data3'));
    }

}
