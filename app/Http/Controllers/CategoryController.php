<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {

        /**
         *      SELECT * FROM categories 
         */

        return response()->json(Category::all());
    }
    public function store(Request $request)
    {

        /**
         *       INSERT INTO (cname) VALUES (cname)
         */

        return Category::updateOrCreate(['id' => $request->id], $request->validate([
            "cname" => "required"
        ]));
    }
    public function edit(Category $category)
    {

        /**
         *      SELECT * FROM categories 
         */

        return response()->json($category);
    }
    public function destroy($id)
    {
        /*
         *  DELETE FROM categories WHERE id=?
         */

        return Category::destroy($id);
    }
}
