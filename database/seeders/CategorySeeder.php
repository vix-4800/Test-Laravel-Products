<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->createMany([
            ['name' => 'Легкий'],
            ['name' => 'Хрупкий'],
            ['name' => 'Тяжелый'],
        ]);
    }
}
