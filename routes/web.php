<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "name" => "Hapid Fadli",
        "email" => "hapidzfadli@gmail.com",
        "image" => "hapidzfadli.jpg",
        'title' => 'About'
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        'title' => 'Blog',
        'posts' => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});
