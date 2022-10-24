<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "author" => "Hapid Fadli",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt laborum voluptatibus eius repudiandae, nostrum nulla magnam culpa dignissimos ex itaque corrupti provident rem odio id vitae consectetur officiis porro sint magni? Dolore similique soluta cupiditate ut sint maiores consectetur minus maxime tempore perferendis ea ex aspernatur eos excepturi illum id tenetur, corrupti laborum ratione quibusdam. Optio illo labore atque est voluptatibus expedita minus cum distinctio molestiae, at, ipsum consequatur quasi ea repudiandae facere possimus dolorem eaque ipsa fugit fugiat nulla. Eaque aperiam maxime, cum rem culpa itaque similique magnam quod, magni sit possimus provident quas amet, eum eveniet suscipit omnis."
        ],

        [
            "title" => "Judul Post Kedua",
            "author" => "Hapid Fadli",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt laborum voluptatibus eius repudiandae, nostrum nulla magnam culpa dignissimos ex itaque corrupti provident rem odio id vitae consectetur officiis porro sint magni? Dolore similique soluta cupiditate ut sint maiores consectetur minus maxime tempore perferendis ea ex aspernatur."
        ],
    ];
    public static function allData()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::allData();
        return $posts->firstWhere('slug', $slug);
    }
}
