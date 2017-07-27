<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\content;
use Cookie;
use URL;
class LocaleController extends Controller
{
  public function locales($localeId='en')
  {
      if (! in_array($localeId,['kh','en','ch']))
      {
          $localeId = 'en';
      }
      Cookie::queue('locale', $localeId);
      return redirect(url(URL::previous()));
  }
}
