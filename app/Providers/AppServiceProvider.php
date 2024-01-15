<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Menu\Laravel\Menu;
use Spatie\Menu\Laravel\Link;
use Spatie\Menu\Laravel\Html;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        //main menu
        Menu::macro('main', function () {
            return Menu::new()
                ->route('index', __('localize.home'))
                // ->route('about', __('localize.about'))
                // ->route('contact-us', __('localize.contact_us'))
                ->link('#', Html::raw('<li class="dropdown"><a href="#"><span>Language</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="'.route('language.change', 'en').'">'.__('localize.english').'</a></li>
                        <li><a href="'.route('language.change', 'fr').'">'.__('localize.francais').'</a></li>
                        <li><a href="'.route('language.change', 'ar').'">'.__('localize.arabic').'</a></li>
                    </ul>
                </li>')->render())
                ->setActiveClass('active')
                ->setActiveClassOnLink()
                ->setActiveFromRequest();
        });


        Menu::macro('usefulLinks', function () {
            return Menu::new()
                ->link('#', __('localize.home'))
                ->link('#', __('localize.about'));
        });

        Menu::macro('ourServices', function () {
            return Menu::new()
                // ->link('#', 'Web Design')
                // ->link('#', 'Web Development')
                // ->link('#', 'Product Management')
                // ->link('#', 'Marketing')
                ->link('#', 'Graphic Design');
        });
    }
}
