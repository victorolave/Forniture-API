<?php

namespace App\Http\Controllers;

use App\Models\Commodity;
use Illuminate\Http\Request;

class CommodityController extends Controller
{
    public function all ()
    {
        return Commodity::all();
    }

    public function getById ($id)
    {
        return Commodity::find($id);
    }

    public function create (Request $request)
    {
        return Commodity::create($request->all());
    }

    public function update (Request $request, $id)
    {
        return Commodity::find($id)->update($request->all());
    }

    public function delete ($id)
    {
        return Commodity::find($id)->delete();
    }
}
