<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceProduct;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function all ()
    {
        return Invoice::with('products')->get();
    }

    public function getById ($id)
    {
        return Invoice::find($id);
    }

    public function create (Request $request)
    {
        $invoice = Invoice::create([
            'date' => $request['date'],
            'total' => $request['total'],
            'customer' => $request['customer'],
            'estimated_delivery_date' => $request['estimated_delivery_date'],
        ]);

        $products = $request['products'];

        foreach ($products as $product) {
            InvoiceProduct::create([
                'product_id' => $product,
                'invoice_id' => $invoice->id
            ]);
        }

        return "Invoice created with succes";
    }

    public function update (Request $request, $id)
    {
        return Invoice::find($id)->update($request->all());
    }

    public function delete ($id)
    {
        return Invoice::find($id)->delete();
    }
}
