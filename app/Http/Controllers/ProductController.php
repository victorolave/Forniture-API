<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all ()
    {
        return Product::with('commodity')->get();
    }

    public function getById ($id)
    {
        return Product::find($id);
    }


    public function create (Request $request)
    {
        return Product::create($request->all());
    }

    public function update (Request $request, $id)
    {
        return Product::find($id)->update($request->all());
    }

    public function delete ($id)
    {
        return Product::find($id)->delete();
    }
}
