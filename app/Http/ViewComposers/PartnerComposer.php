<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Partner;
use App;
class PartnerComposer
{

    protected $partners;
    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {

        $locale = App::getLocale();
        $fallback_locale = config('app.fallback_locale', 'en');
        // Query featured partners
        $this->partners = Partner::where([
            'is_featured' => 1,
        ])->with(['translations' => function ($query) use ($locale, $fallback_locale) {
            $query->where('locale', $locale)
                  ->orWhere('locale', $fallback_locale);
        }])->get();

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
            'partners' => $this->partners,
        ]);
    }
}
