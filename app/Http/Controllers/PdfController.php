<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function index(){
        return view('form');
    }

    public function download_pdf(Request $request){
        $name = $request->name;
        $last_name = $request->last_name;
        $data = ['name'=>$name, 'last_name'=>$last_name];
        view()->share('data',$data);
        $pdf = PDF::loadView('invoice');
        return $pdf->download('invoice.pdf');
    }
}
