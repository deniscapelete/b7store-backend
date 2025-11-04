<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function getAllBanners()
    {
        $banners = Banner::all();

        $return = [];
        foreach ($banners as $banner) {
            $return[] = [
                'img' => asset('storage/' . $banner->file_path),
                'link' => $banner->link,
            ];
        }

        return $return;
    }
}
