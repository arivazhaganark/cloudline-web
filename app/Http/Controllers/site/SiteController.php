<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use function abort;
use function view;

class SiteController extends Controller {

    public function homepage() {
        return view('site.welcome');
    }

    public function page($Page) {
        if (View::exists("site.$Page")) {
            return view("site.$Page");
        } else {
            abort(404);
        }
    }

}
