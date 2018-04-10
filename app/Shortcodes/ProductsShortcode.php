<?php

namespace App\Shortcodes;

use App\Models\Product;
use DB;

class ProductsShortcode {

    public static function register() {
        return Product::all();
    }

}
