<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response as FacadeResponse;
use Illuminate\Http\File;
use NahidulHasan\Html2pdf\Pdf;

class controllerBase extends Controller
{
    public function getBase(){
        if(Session::get('session_guideline_fix_login')){
            return redirect()->intended('admin');
        }else{
            return redirect()->intended('login');
        }
    }

    public function getclear(){
        DB::table('sk_project')->delete();
        DB::table('sk_menu_child')->delete();
        DB::table('sk_menu')->delete();
        DB::table('sk_invite')->delete();
        DB::table('sk_info')->delete();
        DB::table('sk_image')->delete();
        DB::table('sk_font')->delete();
        DB::table('sk_color')->delete();
        return 'clear';
    }

    public function getpdf(){
        echo 'convert';
        $obj = new Pdf();

        $html = '<html><body>'
            . '<p>Put your html here, or generate it with your favourite '
            . 'templating system.</p>'
            . '</body></html>';

        $invoice = $obj->generatePdf($html);

        define('INVOICE_DIR', public_path('uploads/invoices'));

        if (!is_dir(INVOICE_DIR)) {
            mkdir(INVOICE_DIR, 0755, true);
        }

        $outputName = str_random(10);
        $pdfPath = INVOICE_DIR.'/'.$outputName.'.pdf';


        File::put($pdfPath, $invoice);

        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' =>  'attachment; filename="'.'filename.pdf'.'"',
        ];

        return response()->download($pdfPath, 'filename.pdf', $headers);
    }
}
