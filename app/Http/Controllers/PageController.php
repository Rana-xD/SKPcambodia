<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Slider;
use App\Partner;
use App\Service;
use App\Law;
use App\Publication;
use App\Activity;
use App\Experience;
use App\TrainingProgram;
use App\Team;
use App\Content;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
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
        $experiences = Experience::all();
        $top_left_content = Content::where('position', 1)->first();
        $welcome_content = Content::where('position', 2)->first();
        $quote_content = Content::where('position', 3)->first();
        $quotes = Team::where('quote','<>','')->take(4)->with(['translations' => function ($query) use ($locale, $fallback_locale) {
          $query->where('locale', $locale)
                ->orWhere('locale', $fallback_locale);
      }])->get();
        // return $quotes;
        return view('visitor.index')->with([
          'sliders' => $sliders,
          // 'partners' => $partners,
          'services' => $services,
          'latest_blogs' => $latest_blogs,
          'experiences' => $experiences,
          'quote_content' => $quote_content,
          'welcome_content' => $welcome_content,
          'top_left_content' => $top_left_content,
          'quotes' => $quotes
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
      $about_content = Content::where('position', 4)->first();
      $about_sidebar = Content::where('position', 3)->first();
      $quote_content = Content::where('position', 6)->first();
      $quotes = Team::take(7)->get();
      return view('visitor.pages.about.about')->with([
        'about_content' => $about_content,
        'about_sidebar' => $about_sidebar,
        'quote_content' => $quote_content,
        'quotes' => $quotes
      ]);
    }

    // Return our team page
    public function team()
    {
      $locale = App::getLocale();
      $fallback_locale = config('app.fallback_locale', 'en');
      $teams = Team::with(['translations' => function ($query) use ($locale, $fallback_locale) {
        $query->where('locale', $locale)
              ->orWhere('locale', $fallback_locale);
    }])->get();
      return view('visitor.pages.team.team',compact('teams'));
    }
    // Return individaul team member
    public function teamsingle($name)
    {
      $locale = App::getLocale();
      $fallback_locale = config('app.fallback_locale', 'en');
      $teamsingle = Team::where('fullname', $name)->with(['translations' => function ($query) use ($locale, $fallback_locale) {
        $query->where('locale', $locale)
              ->orWhere('locale', $fallback_locale);
    }])->first();
      $i = 0;
      return view('visitor.pages.team.team_single',compact('teamsingle','i'));
    }
    // Return Services page
    public function service()
    {
      $locale = App::getLocale();
      $fallback_locale = config('app.fallback_locale', 'en');
      $services = Service::where([
          'is_featured' => 1,
          'status' => 1
      ])->with(['translations' => function ($query) use ($locale, $fallback_locale) {
          $query->where('locale', $locale)
                ->orWhere('locale', $fallback_locale);
      }])->get();
      $top_content = Content::where('position', 8)->first();
      $translation_service = Content::where('position', 9)->first();
      $translation_cost = Content::where('position', 10)->first();

      return view('visitor.pages.service.services',
        compact(
          'services',
          'locale',
          'fallback_locale',
          'top_content',
          'translation_service',
          'translation_cost'
        )
      );
    }

    // Return Report page
    public function report()
    {
      $locale = App::getLocale();
      $fallback_locale = config('app.fallback_locale', 'en');
      $results = Activity::orderBy('created_at','desc')->get();
      $top_content = Content::where('position', 11)->first();
      return view('visitor.pages.gallery.report',
        compact(
          'results',
          'locale',
          'fallback_locale',
          'top_content'
        )
      );
    }

    // Return blog page
    public function blog()
    {

      // Catch up current locale code
      $locale = App::getLocale();
      $fallback_locale = config('app.fallback_locale', 'en');

      // Query latest blog posts
      $latest_blogs = Post::where([
        'featured' => 1,
        'status' => Post::PUBLISHED
      ])->with(['translations' => function ($query) use ($locale, $fallback_locale) {
          $query->where('locale', $locale)
                ->orWhere('locale', $fallback_locale);
      }])->get();
      return view('visitor.pages.blog.blog')->with([
        'latest_blogs' => $latest_blogs,
        'locale' => $locale,
        'fallback_locale' => $fallback_locale
      ]);
    }

    // Blog detail
    public function blogDetail(Request $request, $slug){

      // Catch up current locale code
      $locale = App::getLocale();
      $fallback_locale = config('app.fallback_locale', 'en');

      // Find post by slug
      $post = Post::where([
        'slug' => $slug,
        'featured' => 1,
        'status' => Post::PUBLISHED
      ])->with(['translations' => function ($query) use ($locale, $fallback_locale) {
          $query->where('locale', $locale)
                ->orWhere('locale', $fallback_locale);
      }])->firstOrFail();

      // Find related posts
      $related_posts = Post::where('slug', '!=', $slug)
      ->where([
        'featured' => 1,
        'status' => Post::PUBLISHED
      ])
      ->with(['translations' => function ($query) use ($locale, $fallback_locale) {
          $query->where('locale', $locale)
                ->orWhere('locale', $fallback_locale);
      }])
      ->latest()
      ->take(5)
      ->get();

      // Query all categories
      $categories = Category::orderBy('order', 'desc')->get();

      return view('visitor.pages.blog.blog_post')->with([
        'post' => $post,
        'related_posts' => $related_posts,
        'categories' => $categories,
        'locale' => $locale,
        'fallback_locale' => $fallback_locale
      ]);
    }

    // Return Publication page
    public function publication()
    {
      $locale = App::getLocale();
      $fallback_locale = config('app.fallback_locale', 'en');
      $result = Publication::with(['translations' => function ($query) use ($locale, $fallback_locale) {
          $query->where('locale', $locale)
                ->orWhere('locale', $fallback_locale);
      }])->get();
      // $result = DB::table('publications')->select('title','featured_image','file_url')->get();
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
      $locale = App::getLocale();
      $fallback_locale = config('app.fallback_locale', 'en');
      $results = TrainingProgram::orderBy('created_at','desc')->get();
      return view('visitor.pages.training.training',compact('results','locale','fallback_locale'));
    }

    // Return Employment page
    public function employment()
    {
      return view('visitor.pages.employment.employment');
    }

    // Return Mission page
    public function mission()
    {
      $mission_content = Content::where('position', 6)->first();
      $mission_sidebar = Content::where('position', 3)->first();
      $quote_content = Content::where('position', 8)->first();
      $quotes = Team::take(9)->get();
      return view('visitor.pages.mission.mission')->with([
        'mission_content' => $mission_content,
        'mission_sidebar' => $mission_sidebar,
        'quote_content' => $quote_content,
        'quotes' => $quotes
      ]);
    }


}
