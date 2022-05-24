<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App;

class PdfController extends Controller
{
    public function index(){
        return view('form');
    }

    public function download_pdf(Request $request){
        
        /*$content = $request->content;
        $data = ['content'=>$content];
        view()->share('data',$data);
        $pdf = PDF::loadView('invoice');
        return $pdf->download('invoice.pdf');*/

        $path = base_path('public/upload/files/');
        $file_name = time().'.pdf';
        $content = str_replace('company', 'My cool company',$request->content);
        $data = ['content'=>$content];
        view()->share('data',$data);
        PDF::loadView('invoice')->save($path.$file_name);
        print asset('upload/files/'.$file_name);
    }
}
