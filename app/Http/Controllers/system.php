<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use Mail;
use App\menu;
class System extends Controller
{
    public function downloadpdf($path,$filename)
    {
        $pathToFile = 'PDF/'.$path.'/'.$filename.'.pdf';
        return response()->download($pathToFile);
    }
    public function sendmail(Request $request)
    {
      $Menu = menu::find(1);
      $send = 1;
      $user = 'ranapann1@gmail.com';
      Mail::to($user)->send(new Contact($request));
      return view('contacts',compact('Menu','send'));
    }
}
