<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class apicontraller extends Controller
{
    public function product(){

        $cat = DB::table('mshop_coupon')->get();
        return json_encode($cat);

    }

    public function catalog(){

        $cat1 = DB::table('mshop_catalog')->get();
        return json_encode($cat1);

    }
}
