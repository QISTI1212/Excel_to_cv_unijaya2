<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use Dompdf\Options;


use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
   // Create a new Dompdf instance
   $dompdf = new Dompdf();

   // Load the view file 'pdf.cv' into Dompdf
   $html = view('pdf.cv');
   $dompdf->loadHtml($html);

   // Set paper size to A4 in landscape orientation
   $dompdf->setPaper('A4', 'landscape');

   // Render the PDF
   $dompdf->render();

   // Output the PDF to the browser
   $dompdf->stream("cv.pdf", array("Attachment" => false));
    }
}
