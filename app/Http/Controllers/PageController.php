<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Slider;
use App\Partner;
use App\Service;
use App\Law;
use App\publication;
use TCG\Voyager\Models\Post;
use App;
use Auth;
use Session;
use DB;

class PageController extends Controller
{
    // Return view home page
    public function home(Request $request)
    {
        // Catch up current locale code
        $locale = App::getLocale();
        $fallback_locale = config('app.fallback_locale', 'en');

        // Query featured slider
        $sliders = Slider::where([
            'is_featured' => 1,
            'status' => 1
        ])->with(['translations' => function ($query) use ($locale, $fallback_locale) {
            $query->where('locale', $locale)
                  ->orWhere('locale', $fallback_locale);
        }])->get();

        // // Query featured partners
        // $partners = Partner::where([
        //     'is_featured' => 1,
        // ])->with(['translations' => function ($query) use ($locale, $fallback_locale) {
        //     $query->where('locale', $locale)
        //           ->orWhere('locale', $fallback_locale);
        // }])->get();

        // Query Services
        $services = Service::where([
            'is_featured' => 1,
            'status' => 1
        ])->with(['translations' => function ($query) use ($locale, $fallback_locale) {
            $query->where('locale', $locale)
                  ->orWhere('locale', $fallback_locale);
        }])->get();

        // Query latest blog posts
        $latest_blogs = Post::where([
            'featured' => 1,
            'status' => Post::PUBLISHED
        ])->with(['translations' => function ($query) use ($locale, $fallback_locale) {
            $query->where('locale', $locale)
                  ->orWhere('locale', $fallback_locale);
        }])->get();

        return view('visitor.index')->with([
            'sliders' => $sliders,
            // 'partners' => $partners,
            'services' => $services,
            'latest_blogs' => $latest_blogs
        ]);
    }

    // Return contact us page
    public function contact()
    {

      return view('visitor.pages.contact.contacts')->with(['send' => 0]);
    }

    // Return about us page
    public function about()
    {
      return view('visitor.pages.about.about');
    }

    // Return our team page
    public function team()
    {
      return view('visitor.pages.team.team_1');
    }

    // Return Services page
    public function service()
    {
      return view('visitor.pages.service.services');
    }

    // Return Report page
    public function report()
    {
      return view('visitor.pages.gallery.gallery_2');
    }

    // Return blog page
    public function blog()
    {
      return view('visitor.pages.blog.blog');
    }

    // Blog detail
    public function blogDetail(Request $request, $slug){
        return view('visitor.pages.blog.blog_post');
    }

    // Return Publication page
    public function publication()
    {
      $result = DB::table('publications')->select('title','featured_image','file_url')->get();
      return view('visitor.pages.publication.publication',compact('result'));
    }

    // Return Law page
    public function law()
    {
        $result = Law::orderBy('name','asc')->get();
        $half = ceil($result->count() / 2);
        $chunks = $result->chunk($half);
        $lefts = $chunks[0];
        $rights = $chunks[1];
      return view('visitor.pages.law.law',compact('lefts','rights'));
    }

    // Return Announcement page
    public function announcement()
    {
      return view('visitor.pages.announcement.announcement');
    }

    // Return Training page
    public function training()
    {
      return view('visitor.pages.training.training');
    }

    // Return Employment page
    public function employment()
    {
      return view('visitor.pages.employment.employment');
    }

    // Return Mission page
    public function mission()
    {
      return view('visitor.pages.mission.mission');
    }

    // Return individaul team member
    public function teamsingle()
    {
      return view('visitor.pages.team.team_single');
    }
}
