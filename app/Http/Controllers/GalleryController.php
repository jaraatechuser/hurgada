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
                [
                    'src' => 'https://www.sharm-club.com/assets/images/cities/hurghada/marriott-beach-hurghada.jpg',
                    'thumb' => 'https://www.sharm-club.com/assets/images/cities/hurghada/marriott-beach-hurghada.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Marriott beach resort view in Hurghada',
                ],
                [
                    'src' => 'https://www.egypttoursportal.com/images/2018/12/Hurghada-Marriott-Beach-Beaches-in-Hurghada-Egypt-Tours-Portal.jpg',
                    'thumb' => 'https://www.egypttoursportal.com/images/2018/12/Hurghada-Marriott-Beach-Beaches-in-Hurghada-Egypt-Tours-Portal.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Hurghada Marriott beach with golden sands',
                ],
                [
                    'src' => 'https://assets.hrewards.com/assets/560_SHR_Hurghada_Al_Dau_Beach_exterior_day_0_D8_A5277new_ec8bddc20b.png',
                    'thumb' => 'https://assets.hrewards.com/assets/560_SHR_Hurghada_Al_Dau_Beach_exterior_day_0_D8_A5277new_ec8bddc20b.png',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Steigenberger Aldau Beach Hotel — exterior view by Red Sea in Hurghada',
                ],
                [
                    'src' => 'https://media-cdn.tripadvisor.com/media/photo-s/0f/d7/06/57/hurghada-marriott-beach.jpg',
                    'thumb' => 'https://media-cdn.tripadvisor.com/media/photo-s/0f/d7/06/57/hurghada-marriott-beach.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Marriott Beach Resort shore and palm trees in Hurghada',
                ],
                [
                    'src' => 'https://cache.marriott.com/content/dam/marriott-renditions/HRGEG/hrgeg-view-7581-hor-wide.jpg?downsize=1336px%3A%2A&interpolation=progressive-bilinear&output-quality=70',
                    'thumb' => 'https://cache.marriott.com/content/dam/marriott-renditions/HRGEG/hrgeg-view-7581-hor-wide.jpg?downsize=1336px%3A%2A&interpolation=progressive-bilinear&output-quality=70',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Marriott Beach Resort shore and palm trees in Hurghada',
                ],
                [
                    'src' => 'https://www.egypttoursportal.com/images/2018/12/Hurghada-Marriott-Beach-Beaches-in-Hurghada-Egypt-Tours-Portal.jpg',
                    'thumb' => 'https://www.egypttoursportal.com/images/2018/12/Hurghada-Marriott-Beach-Beaches-in-Hurghada-Egypt-Tours-Portal.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Marriott Beach Resort shore and palm trees in Hurghada',
                ],
                [
                    'src' => 'https://media-cdn.tripadvisor.com/media/photo-s/2e/3f/df/80/hotel-over-view.jpg',
                    'thumb' => 'https://media-cdn.tripadvisor.com/media/photo-s/2e/3f/df/80/hotel-over-view.jpg',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Marriott Beach Resort shore and palm trees in Hurghada',
                ],
                [
                    'src' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/642137049.jpg?hp=1&k=abadfd205baebb8f31e9f2def76dc02c159af20de256dad896a01f2ad0e02143&o=',
                    'thumb' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/642137049.jpg?hp=1&k=abadfd205baebb8f31e9f2def76dc02c159af20de256dad896a01f2ad0e02143&o=',
                    'width' => 1280,
                    'height' => 853,
                    'alt' => 'Marriott Beach Resort shore and palm trees in Hurghada',
                ],

            ];


        }

        return view('pages.gallery', compact('images'));
    }
}
