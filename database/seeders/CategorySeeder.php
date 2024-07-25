<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>'web design',
            'slug'=>'web-design',
            'color'=>'orange'
        ]);
        Category::create([
            'name'=>'design',
            'slug'=>'design',
            'color'=>'purple'
        ]);
        Category::create([
            'name'=>'programmer',
            'slug'=>'programmer',
            'color'=>'pink'
        ]);
        Category::create([
            'name'=>'UI UX',
            'slug'=>'ui-ux',
            'color'=>'yellow'
        ]);

    }
}
