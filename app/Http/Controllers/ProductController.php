<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function print()
    {
        return view("layouts.print", ["products" => Product::all()]); //   SELECT * FROM products
    }
    public function print1()
    {
        return view("layouts.print1", ["products" => Product::where(["pstatus" => "2"])->get()]); //  SELECT * FROM products WHERE pstatus=2  
    }
    public function index()
    {
        return response()->json(["data" => Product::all()]); // SELECT * FROM products
    }
    public function getoption()
    {
        return response()->json(["data" => Product::where(["pstatus" => "1"])->get()]); //  SELECT * FROM products WHERE pstatus=1
    }
    public function store()
    {
        $data  = request()->validate([
            "category_id" => "required",
            "pname" => "required",
            "pquantity" => "required",
            "pprice" => "required",
            "pdescription" => "required",
            "pstatus" => "required",
        ]);
        $data["pcode"] = $this->pcode();
        /**
         *  INSERT INTO products VALUES(?,?,?,?,?,?)
         */
        return Product::updateOrCreate(['id' => request()->id], $data);
    }

    public function show(Product $product)
    {
        return response()->json($product); // SELECT * FROM products
    }

    public function destroy($id)
    {
        return Product::destroy($id); // DELETE FROM products WHERE id=?
    }

    protected function pcode()
    {
        $str1 = "ABCDEFGHJKLMNOPQRSTUVWXYZ";
        $str2 = "123456789";
        $shuffled1 = substr(str_shuffle($str1), 0, 4);
        $shuffled2 = substr(str_shuffle($str2), 0, 4);
        return $shuffled1 . "-" . $shuffled2;
    }
}
