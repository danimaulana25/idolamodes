<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function userTables()
    {
        return view('users-tables', [
            'users' => User::all(),
        ]);
    }
    public function productTables()
    {
        return view('products-table', [
            'products' => Product::all(),
        ]);
    }
}
