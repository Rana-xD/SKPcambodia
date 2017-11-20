<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use TCG\Voyager\Models\Post;
use App;
use App\UsefulLink;
class PartnerComposer
{

    protected $footer_blogs;
    protected $locale;
    protected $fallback_locale;
    protected $useful_links;
    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {

        $this->locale = App::getLocale();
        $this->fallback_locale = config('app.fallback_locale', 'en');
        $locale = $this->locale;
        $fallback_locale = $this->fallback_locale;
        // Query footer blog
        $this->footer_blogs = Post::where([
            'status' => Post::PUBLISHED
        ])->with(['translations' => function ($query) use ($locale, $fallback_locale) {
            $query->where('locale', $locale)
                  ->orWhere('locale', $fallback_locale);
        }])->take(3)->get();

        $this->useful_links = UsefulLink::orderBy('created_at')->with(['translations' => function ($query) use ($locale, $fallback_locale) {
            $query->where('locale', $locale)
                  ->orWhere('locale', $fallback_locale);
        }])->take(5)->get();

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $view->with([
            'footer_blogs' => $this->footer_blogs,
            'locale' => $this->locale,
            'fallback_locale' => $this->fallback_locale,
            'links' => $this->useful_links
        ]);
    }
}
