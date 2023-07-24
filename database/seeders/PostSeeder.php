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
                'cat' => 'Category Two',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestias architecto iusto sed corrupti quisquam reiciendis, nobis earum nam quam illo veritatis consequatur eum eius assumenda dolore harum corporis? Commodi.'
            ],
            [
                'title' => 'Post Two',
                'cat' => 'Category One',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestias architecto iusto sed corrupti quisquam reiciendis, nobis earum nam quam illo veritatis consequatur eum eius assumenda dolore harum corporis? Commodi.'
            ],
            [
                'title' => 'Post Three',
                'cat' => 'Category Two',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestias architecto iusto sed corrupti quisquam reiciendis, nobis earum nam quam illo veritatis consequatur eum eius assumenda dolore harum corporis? Commodi.'
            ],
            [
                'title' => 'Post Four',
                'cat' => 'Category One',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestias architecto iusto sed corrupti quisquam reiciendis, nobis earum nam quam illo veritatis consequatur eum eius assumenda dolore harum corporis? Commodi.'
            ],
            [
                'title' => 'Post Five',
                'cat' => 'Category Two',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestias architecto iusto sed corrupti quisquam reiciendis, nobis earum nam quam illo veritatis consequatur eum eius assumenda dolore harum corporis? Commodi.'
            ],
            [
                'title' => 'Post Six',
                'cat' => 'Category One',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestias architecto iusto sed corrupti quisquam reiciendis, nobis earum nam quam illo veritatis consequatur eum eius assumenda dolore harum corporis? Commodi.'
            ],
        ];

        foreach($postSeedData as $post){
            Post::create($post);
        };
    }
}
