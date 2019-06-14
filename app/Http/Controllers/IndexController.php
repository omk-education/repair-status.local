<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
        //441134
        $number = $request->number;
        $item = Order::where('number', $number)->first();
        if (isset($item)) {
            $master = User::where('id', $item->master)->first();
        }

        return view('result', compact('item', 'master'));
    }
}
