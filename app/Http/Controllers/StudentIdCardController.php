<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use BaconQrCode\Renderer\Image\GdImageBackEnd;

class StudentIdCardController extends Controller
{

    public function generate(Student $student)
    {

  $qrCode = base64_encode(
    QrCode::format('svg')
        ->size(150)
        ->margin(1)
        ->generate(
            "Admission No: ".$student->admission_number
        )
);
        $pdf = Pdf::loadView(
            'students.idcard',
            compact('student','qrCode')
        );


        return $pdf->download(
            $student->admission_number.'.pdf'
        );

    }

}