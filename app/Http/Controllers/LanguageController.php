<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage($language)
    {
        App::setLocale($language);
        Session::put('locale', $language);
        
        return redirect()->back();
    }
}