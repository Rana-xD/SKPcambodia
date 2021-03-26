<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use Mail;
use URL;
use Session;
use Redirect;

class System extends Controller
{
    public function downloadpdf($date,$path)
    {
        $pathToFile = 'storage/uploads/files/'.$date.'/'.$path;
        return response()->download($pathToFile);
    }
    public function sendmail(Request $request)
    {

      $user = 'areumdarosemary@gmail.com';
      Mail::to($user)->send(new Contact($request));
      Session::flash('send_status', 1);
      return redirect()->back();

    }
}
