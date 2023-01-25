<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Post::factory()->create([
//            "title" => "haiahaiahai",
//            "description" => "haiahaiahaihaiahaiahaihaiahaiahaihaiahaiahaihaiahaiahai"
//        ]);
        Post::factory()->count(50)->create();
    }
}
