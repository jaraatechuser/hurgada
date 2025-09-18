<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $records = Gallery::query()
            ->where('collection', 'hurghada')
            ->orderByDesc('created_at')
            ->get();

        $images = $records->map(function (Gallery $g) {
            $src = $g->file_path ? Storage::url($g->file_path) : null;
            $thumb = $g->thumbnail_path ? Storage::url($g->thumbnail_path) : $src;
            return [
                'src' => $src,
                'thumb' => $thumb,
                'width' => $g->width ?? 1600,
                'height' => $g->height ?? 1066,
                'alt' => $g->title ?: 'Hurghada',
            ];
        })->filter(fn ($img) => $img['src'])->values()->all();

        if (empty($images)) {
            // Fallback: Pixabay CDN images (Hurghada / Red Sea / Egypt beaches). Hotlink-friendly.
            $images = [
                [
                    'src' => 'https://cdn.pixabay.com/photo/2016/11/29/12/54/beach-1867285_1280.jpg',
                    'thumb' => 'https://cdn.pixabay.com/photo/2016/11/29/12/54/beach-1867285_640.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Red Sea beach near Hurghada',
                ],
                [
                    'src' => 'https://cdn.pixabay.com/photo/2018/01/15/07/51/egypt-3088015_1280.jpg',
                    'thumb' => 'https://cdn.pixabay.com/photo/2018/01/15/07/51/egypt-3088015_640.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Egypt Red Sea coast',
                ],
                [
                    'src' => 'https://cdn.pixabay.com/photo/2020/01/06/12/47/sea-4744360_1280.jpg',
                    'thumb' => 'https://cdn.pixabay.com/photo/2020/01/06/12/47/sea-4744360_640.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Turquoise water and sandy beach',
                ],
                [
                    'src' => 'https://cdn.pixabay.com/photo/2016/07/28/10/32/boat-1549549_1280.jpg',
                    'thumb' => 'https://cdn.pixabay.com/photo/2016/07/28/10/32/boat-1549549_640.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Boat trip in the Red Sea',
                ],
                [
                    'src' => 'https://cdn.pixabay.com/photo/2016/11/29/03/53/sea-1864247_1280.jpg',
                    'thumb' => 'https://cdn.pixabay.com/photo/2016/11/29/03/53/sea-1864247_640.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Coral reef snorkeling waters',
                ],
                [
                    'src' => 'https://cdn.pixabay.com/photo/2016/06/24/10/47/egypt-1474662_1280.jpg',
                    'thumb' => 'https://cdn.pixabay.com/photo/2016/06/24/10/47/egypt-1474662_640.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Egypt seaside resort vibes',
                ],
            ];
        }

        return view('pages.gallery', compact('images'));
    }
}
