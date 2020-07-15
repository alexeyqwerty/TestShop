<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function MainShop(Request $request)
    {
        $user = $request->session()->get('user');
        if($user !== null)
        {
            $products = Product::GetAllProducts();

            return view('shop', [
                'name' => $user->name,
                'products' => $products
            ]);
        }
        else return redirect()->route('welcome');
    }

    public function SearchShop(Request $request)
    {
        $user = $request->session()->get('user');
        if($user !== null)
        {
            $name = $request->name;
            $category = $request->category;
            $group = $request->group;
            $prop_1 = $request->prop_1;
            $prop_2 = $request->prop_2;
            $price = $request->price;

            $products = Product::GetProducts($name, $category, $group, $prop_1, $prop_2, $price);

            return view('shop', [
                'name' => $user->name,
                'products' => $products,
                'name' => $name,
                'category' => $category,
                'group' => $group,
                'prop_1' => $prop_1,
                'prop_2' => $prop_2,
                'price' => $price
            ]);
        }
        else return redirect()->route('welcome');
    }
}
