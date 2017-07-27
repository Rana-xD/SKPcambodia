<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Return view home page
    public function home()
    {
       return view('visitor.index');
    }

    // Return contact us page
    public function contact()
    {

      return view('visitor.contacts')->with(['send' => 0]);
    }

    // Return about us page
    public function about()
    {
      return view('visitor.about');
    }

    // Return our team page
    public function team()
    {
      return view('visitor.team_1');
    }

    // Return Services page
    public function service()
    {
      return view('visitor.services');
    }

    // Return Report page
    public function report()
    {
      return view('visitor.gallery_2');
    }

    // Return blog page
    public function blog()
    {
      return view('visitor.blog');
    }

    // Return Publication page
    public function publication()
    {
      return view('visitor.publication');
    }

    // Return Law page
    public function law()
    {
      return view('visitor.law');
    }

    // Return Announcement page
    public function announcement()
    {
      return view('visitor.announcement');
    }

    // Return Training page
    public function training()
    {
      return view('visitor.training');
    }

    // Return Employment page
    public function employment()
    {
      return view('visitor.employment');
    }

    // Return Mission page
    public function mission()
    {
      return view('visitor.mission');
    }

    // Return individaul team member
    public function teamsingle()
    {
      return view('visitor.team_single');
    }
}
