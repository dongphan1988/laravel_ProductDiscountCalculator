<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function viewForm()
    {
        return view('product_count');
    }

    function getForm(Request $request)
    {
        $description = $request->description;
        $price = $request->price;
        $discount_Percent = $request->discount_percent;
        $discount_amount = $price * $discount_Percent / 100;
        $discount_price = $price - $discount_amount;
        return view('display_discount', compact('description', 'price', 'discount_Percent', 'discount_amount', 'discount_price'));
    }
}
