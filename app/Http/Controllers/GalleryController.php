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
                    'src' => 'https://www.egypttoursportal.com/images/2018/12/Hurghada-Red-Sea-Cairo-And-Hurghada-Holiday-Egypt-Tours-Portal.jpg',
                    'thumb' => 'https://www.egypttoursportal.com/images/2018/12/Hurghada-Red-Sea-Cairo-And-Hurghada-Holiday-Egypt-Tours-Portal.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Golden sandy beach with parasols in Hurghada',
                ],
                [
                    'src' => 'https://www.egyptsunmarine.com/storage/hurghada-islands.jpg',
                    'thumb' => 'https://www.egyptsunmarine.com/storage/hurghada-islands.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Crystal-clear turquoise waters of Hurghada beach',
                ],
                [
                    'src' => 'https://www.sharm-club.com/assets/images/cities/hurghada/hurghada-beaches.jpg',
                    'thumb' => 'https://www.sharm-club.com/assets/images/cities/hurghada/hurghada-beaches.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Pristine white sandy beach in Hurghada',
                ],
                [
                    'src' => 'https://jakadatoursegypt.com/wp-content/uploads/2020/12/a-wonderful-view-of-one-of-the-beaches-of-hurghada.jpg',
                    'thumb' => 'https://jakadatoursegypt.com/wp-content/uploads/2020/12/a-wonderful-view-of-one-of-the-beaches-of-hurghada.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Luxurious beach resort in Hurghada',
                ],
                [
                    'src' => 'https://www.egypttoursportal.com/images/2018/12/Siva-Grand-Beach-Beaches-in-Hurghada-Egypt-Tours-Portal.jpg',
                    'thumb' => 'https://www.egypttoursportal.com/images/2018/12/Siva-Grand-Beach-Beaches-in-Hurghada-Egypt-Tours-Portal.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Vibrant coral reef in Hurghada waters',
                ],
                [
                    'src' => 'https://www.sharm-club.com/assets/images/cities/hurghada/mahmya-beach-hurghada.jpg',
                    'thumb' => 'https://www.sharm-club.com/assets/images/cities/hurghada/mahmya-beach-hurghada.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Relaxing resort vibes in Hurghada',
                ],
            ];


        }

        return view('pages.gallery', compact('images'));
    }
}
