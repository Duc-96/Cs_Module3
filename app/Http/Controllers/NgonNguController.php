<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class NgonNguController extends Controller
{
    public function ngonNgu(Request $request, $ngonngu)
    {
        if ($ngonngu) {
            session()->put('ngonngu', $ngonngu);
        }
        return redirect()->back();
    }
}
