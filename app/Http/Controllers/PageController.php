<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //
    public function create_category (Request $request) {
        DB::table('categories')->insert([
            "name" => $request->name,
        ]);
        return redirect('/')->withErrors(["message" => 'Категория создана']);
    }

}
