<?php

namespace App\Shortcodes;

use App\Models\Product;
use DB;

class ProductsShortcode {

    public static function register() {
        $products = Product::all();
        return view("site.partials.product_shortcode",compact('products'));
    }

}
