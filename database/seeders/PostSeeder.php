<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Disable the event dispatcher before creation as Auth:: calls will be empty.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        // Generate three or so random words with a dot
        $title1 = substr($faker->sentence(4), 0, -1);
        $title2 = substr($faker->sentence(4), 0, -1);
        $title3 = substr($faker->sentence(4), 0, -1);

        Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => $title1,
            'excerpt' => $title1,
            'slug' => Str::slug($title1),
            'body' => $faker->paragraph(5),
            'description' => $faker->paragraph(1),
            'status' => Status::PUBLISHED,
            'featured_image' => 'zu1kH6yXZNo1hcMqSKnt4NDNwenW1H-metaYWZyaWNhbi1kYWlzeS10eXBlcy0xNTg2OTgwOTI4LmpwZw==-.jpg',
        ]);

        Post::create([
            'user_id' => 2,
            'category_id' => 2,
            'title' => $title2,
            'excerpt' => $title2,
            'slug' => Str::slug($title2),
            'body' => $faker->paragraph(5),
            'description' => $faker->paragraph(1),
            'status' => Status::PUBLISHED,
            'featured_image' => 'Kl77IFAZREBJozuNhHXJA3h4SzgCkJ-metaZGFpc2llcy53ZWJw-.jpg',
        ]);

        Post::create([
            'user_id' => 3,
            'category_id' => 3,
            'title' => $title3,
            'excerpt' => $title3,
            'slug' => Str::slug($title3),
            'body' => $faker->paragraph(5),
            'description' => $faker->paragraph(1),
            'status' => Status::PUBLISHED,
            'featured_image' => 'pMkAXx5xK2gPEkrFtgDqBX63hHpq7D-metaZmVsaWNpYS1kYWlzeS5qcGc=-.jpg',
        ]);

        Post::create([
            'user_id' => 2,
            'category_id' => 2,
            'title' => $title2,
            'excerpt' => $title2,
            'slug' => Str::slug($title2),
            'body' => $faker->paragraph(5),
            'description' => $faker->paragraph(1),
            'status' => Status::UNPUBLISED,
            'featured_image' => 'Kl77IFAZREBJozuNhHXJA3h4SzgCkJ-metaZGFpc2llcy53ZWJw-.jpg',
        ]);

        Post::create([
            'user_id' => 3,
            'category_id' => 3,
            'title' => $title3,
            'excerpt' => $title3,
            'slug' => Str::slug($title3),
            'body' => $faker->paragraph(5),
            'description' => $faker->paragraph(1),
            'status' => Status::DRAFT,
            'featured_image' => 'pMkAXx5xK2gPEkrFtgDqBX63hHpq7D-metaZmVsaWNpYS1kYWlzeS5qcGc=-.jpg',
        ]);
    }
}
