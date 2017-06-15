<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class system extends Controller
{
    public function downloadpdf($path,$filename)
    {
        $pathToFile = 'PDF/'.$path.'/'.$filename.'.pdf';
        return response()->download($pathToFile);
    }
}
