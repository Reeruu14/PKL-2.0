<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = [
            [
                'name' => 'Kuliner',
                'icon' => 'icons/kuliner.png',
                'description' => 'Explore local cuisines'
            ],
            [
                'name' => 'Wisata',
                'icon' => 'icons/wisata.png',
                'description' => 'Discover tourist attractions'
            ],
            [
                'name' => 'Hotel',
                'icon' => 'icons/hotel.png',
                'description' => 'Find comfortable accommodations'
            ],
            [
                'name' => 'Transport',
                'icon' => 'icons/transport.png',
                'description' => 'Easy transportation options'
            ],
            [
                'name' => 'Culture',
                'icon' => 'icons/culture.png',
                'description' => 'Experience local culture'
            ],
            [
                'name' => 'Shopping',
                'icon' => 'icons/shopping.png',
                'description' => 'Shop at local markets'
            ],
        ];

        $popularPlaces = [
            [
                'name' => 'Lawang Sewu',
                'image' => 'images/lawang-sewu.jpg',
                'description' => 'Historic Dutch colonial era building'
            ],
            [
                'name' => 'Sam Poo Kong',
                'image' => 'images/sampookong.jpg',
                'description' => 'Chinese temple with cultural significance'
            ],
            [
                'name' => 'Kota Lama',
                'image' => 'images/kota-lama.jpg',
                'description' => 'Old City district with Dutch architecture'
            ],
        ];

        return view('home', compact('categories', 'popularPlaces'));
    }
}