<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    // use HasFactory;

    static $blog_posts = [
        [
            "title"  => "Judul Post Pertama",
            "slug"   => "judul-posts-pertama",
            "author" => "Fathur Rahman",
            "body"   => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo quam, accusantium laboriosam autem pariatur illum, praesentium in id, corrupti iure explicabo. Exercitationem dolorum obcaecati eveniet adipisci consequuntur quae illo delectus, pariatur aperiam, omnis nobis atque! Dolore exercitationem error at reiciendis, libero odio molestias illo officiis quasi velit eos quae perferendis numquam praesentium iusto iure esse similique recusandae. Asperiores laudantium repellendus eligendi, laboriosam officiis aspernatur, suscipit odio praesentium omnis quaerat deleniti similique, est sed totam nulla obcaecati. Dignissimos maiores laborum saepe."
        ],
        [
            "title"  => "Judul Post Kedua",
            "slug"   => "judul-posts-kedua",
            "author" => "Andito",
            "body"   => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo quam, accusantium laboriosam autem pariatur illum, praesentium in id, corrupti iure explicabo. Exercitationem dolorum obcaecati eveniet adipisci consequuntur quae illo delectus, pariatur aperiam, omnis nobis atque! Dolore exercitationem error at reiciendis, libero odio molestias illo officiis quasi velit eos quae perferendis numquam praesentium iusto iure esse similique recusandae. Asperiores laudantium repellendus eligendi, laboriosam officiis aspernatur, suscipit odio praesentium omnis quaerat deleniti similique, est sed totam nulla obcaecati. Dignissimos maiores laborum saepe."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts      = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
