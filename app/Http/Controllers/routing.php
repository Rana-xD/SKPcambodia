<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use DB;
class routing extends Controller
{
    public function home()
    {
       $Menu = menu::find(1);
       return view('index',compact('Menu'));
    }

    public function contact()
    {
      $Menu = menu::find(1);
      return view('contacts',compact('Menu'));
    }

    public function about()
    {
      $Menu = menu::find(1);
      return view('about',compact('Menu'));
    }

    public function team()
    {
      $Menu = menu::find(1);
      return view('team_1',compact('Menu'));
    }

    public function service()
    {
      $Menu = menu::find(1);
      return view('services',compact('Menu'));
    }

    public function report()
    {
      $Menu = menu::find(1);
      return view('gallery_2',compact('Menu'));
    }

    public function blog()
    {
      $Menu = menu::find(1);
      return view('blog',compact('Menu'));
    }

    public function publication()
    {
      $Menu = menu::find(1);
      return view('publication',compact('Menu'));
    }

    public function law()
    {
      $Menu = menu::find(1);
      return view('law',compact('Menu'));
    }

    public function announcement()
    {
      $Menu = menu::find(1);
      return view('announcement',compact('Menu'));
    }

    public function training()
    {
      $Menu = menu::find(1);
      return view('training',compact('Menu'));
    }

    public function employment()
    {
      $Menu = menu::find(1);
      return view('employment',compact('Menu'));
    }
    public function mission()
    {
      $Menu = menu::find(1);
      return view('mission',compact('Menu'));
    }
    public function teamsingle()
    {
      $Menu = menu::find(1);
      return view('team_single',compact('Menu'));
    }

}
