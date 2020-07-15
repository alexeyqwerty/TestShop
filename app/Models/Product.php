<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public static function GetAllProducts()
    {
        $result = DB::table('products')->paginate(5);
        return $result;
    }

    public static function GetProducts(
        $name = null, $category = null, $group = null,
        $prop_1 = null, $prop_2 = null, $price = null)
    {
        $where = array();
        if($name !== null) array_push($where, ['name', 'like' , '%'.$name.'%']);
        if($category !== null) array_push($where, ['category', '=', $category]);
        if($group !== null) array_push($where, ['group', '=', $group]);
        if($prop_1 !== null) array_push($where, ['prop_1', '=', $prop_1]);
        if($prop_2 !== null) array_push($where, ['prop_2', '=', $prop_2]);
        if($price !== null) array_push($where, ['price', '=', $price]);

        $result = DB::table('products')->
        where($where)->paginate(5);

        return $result;
    }

}
