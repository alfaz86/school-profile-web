<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $gallery = [
            [
                'title' => 'Guru',
                'headline' => 'Komunitas Belajar',
                'description' => 'Beberapa Foto Guru - Guru SDN Bojongloa 1',
            ],
            [
                'title' => 'Shalat Dhuha',
                'headline' => 'Shalat Dhuha',
                'description' => 'Beberapa foto sedang melaksanakan kegiatan shalat dhuha',
            ],
            [
                'title' => 'Upacara',
                'headline' => 'Upacara',
                'description' => 'Beberapa foto sedang melaksanakan kegiatan upacara bendera',
            ],
            [
                'title' => 'Pramuka',
                'headline' => 'Pramuka',
                'description' => 'Beberapa foto sedang melaksanakan upacara pramuka',
            ],
            [
                'title' => 'ANBK',
                'headline' => 'Assesment Nasional Berbasis Komputer',
                'description' => 'Beberapa foto sedang melaksanakan ANBK',
            ],
            [
                'title' => 'Pembelajaran',
                'headline' => 'Pembelajaran',
                'description' => 'Beberapa foto sedang melaksanakan kegiatan pembelajaran',
            ],
            [
                'title' => 'Program',
                'headline' => 'Program Bantuan ATK',
                'description' => 'Beberapa foto program bantuan',
            ],
            [
                'title' => 'Senam',
                'headline' => 'Senam',
                'description' => 'Beberapa foto sedang melaksanakan senam',
            ],
        ];

        foreach ($gallery as $i => $g) {
            $slug = strtolower(str_replace(' ', '-', $g['title']));
            $galleryModel = Gallery::create([
                'title' => $g['title'],
                'headline' => $g['headline'],
                'slug' => $slug,
                'description' => $g['description'],
            ]);

            $imageUrl = 'https://picsum.photos/seed/' . $slug . $i . '/300/200';
            $context = stream_context_create([
                'http' => [
                    'header' => "User-Agent: LaravelSeeder\r\n"
                ]
            ]);
            Image::create([
                'imageable_id' => $galleryModel->id,
                'imageable_type' => Gallery::class,
                'file_data' => file_get_contents($imageUrl, false, $context),
                'file_path' => $imageUrl,
                'file_name' => $imageUrl,
            ]);
        }
    }
}
