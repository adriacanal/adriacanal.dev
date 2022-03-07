<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieConsentController extends Controller
{
    public function accept(Request $request)
    {
        if ($request->hasCookie(config('cookie-consent.cookie_name'))) {
            return redirect()->back();
        }

        return redirect()->back()->cookie(config('cookie-consent.cookie_name'), 1, config('cookie-consent.cookie_lifetime'));
    }
}
