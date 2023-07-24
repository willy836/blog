<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postSeedData = [
            [
                'title' => 'Post One',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestias architecto iusto sed corrupti quisquam reiciendis, nobis earum nam quam illo veritatis consequatur eum eius assumenda dolore harum corporis? Commodi.'
            ],
            [
                'title' => 'Post Two',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestias architecto iusto sed corrupti quisquam reiciendis, nobis earum nam quam illo veritatis consequatur eum eius assumenda dolore harum corporis? Commodi.'
            ],
            [
                'title' => 'Post Three',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestias architecto iusto sed corrupti quisquam reiciendis, nobis earum nam quam illo veritatis consequatur eum eius assumenda dolore harum corporis? Commodi.'
            ],
            [
                'title' => 'Post Four',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestias architecto iusto sed corrupti quisquam reiciendis, nobis earum nam quam illo veritatis consequatur eum eius assumenda dolore harum corporis? Commodi.'
            ],
            [
                'title' => 'Post Five',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestias architecto iusto sed corrupti quisquam reiciendis, nobis earum nam quam illo veritatis consequatur eum eius assumenda dolore harum corporis? Commodi.'
            ],
            [
                'title' => 'Post Six',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestias architecto iusto sed corrupti quisquam reiciendis, nobis earum nam quam illo veritatis consequatur eum eius assumenda dolore harum corporis? Commodi.'
            ],
        ];

        foreach($postSeedData as $post){
            Post::create($post);
        };
    }
}
