<?php

namespace App\Http\Controllers;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Illuminate\Http\Request;
use PDF;

class InvoiceController extends Controller
{

    public function index(){
        return view('add_data');
    }
    public function invoice(Request $request){

        $data = $this->validate(request(),[
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'sub_total' => 'required',
            'total_vat' => 'required',
            'final_total' => 'required',
            'paid_in_cash' => 'required',
            'change_due' => 'required',
            'date' => 'required',
            'invoice_type' => 'required',
            'tax_number' => 'required',
            'cus_tax_number' => 'required'

        ],[],[]);

        $news = Invoice::create( [

            'name' => request('name'),
            'phone' => request('phone'),
            'address' => request('address'),
            'sub_total' => request('sub_total'),
            'total_vat' => request('total_vat'),
            'final_total' => request('final_total'),
            'paid_in_cash' => request('paid_in_cash'),
            'change_due' => request('change_due'),
            'date' => request('date'),
            'invoice_type' => request('invoice_type'),
            'tax_number' => request('tax_number'),
            'cus_tax_number' => request('cus_tax_number'),

        ]);
        return back();

    }
    public function product(Request $request){
        $id = Invoice::get()->last()->id;

        $data = $this->validate(request(),[

            'product_name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'total_price' => 'required',


        ],[],[]);



        $news = InvoiceDetail::create( [


            'product_name' => request('product_name'),
            'quantity' => request('quantity'),
            'price' => request('price'),
            'total_price' => request('total_price'),
            'invoice_id' => $id,
        ]);
        return back();
    }

    public function get_data(){
        $data = Invoice::get()->last();
        $products = InvoiceDetail::where('invoice_id', $data->id)->get();
        return view('invoice', compact('products', 'data'));
    }
    public function downloadPDF(){
        $data = Invoice::get()->last();



        $products = InvoiceDetail::where('invoice_id', $data->id)->get();

        $pdf = PDF::loadView('invoice', compact('data', 'products'));

        $pdf->stream();

        return $pdf->download('invoice.pdf');
    }
}
