<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Hapid Fadli',
            'email' => 'hapidzfadli@gmail.com',
            'password' => bcrypt('12344')
        ]);
        User::create([
            'name' => 'Hedi Harisma',
            'email' => 'hedi@gmail.com',
            'password' => bcrypt('12344')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, placeat?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum optio necessitatibus sapiente? Esse error quia optio ratione beatae deleniti dolor. Officiis quam, asperiores nesciunt tempora iure enim dicta quibusdam sunt aliquam temporibus quia omnis. Provident vitae blanditiis nam sequi esse, natus fugiat distinctio ratione fuga harum expedita voluptas unde?',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, placeat?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum optio necessitatibus sapiente? Esse error quia optio ratione beatae deleniti dolor. Officiis quam, asperiores nesciunt tempora iure enim dicta quibusdam sunt aliquam temporibus quia omnis. Provident vitae blanditiis nam sequi esse, natus fugiat distinctio ratione fuga harum expedita voluptas unde?',
            'category_id' => 1,
            'user_id' => 1,
        ]);
        Post::create([
            'title' => 'Judul ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, placeat?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum optio necessitatibus sapiente? Esse error quia optio ratione beatae deleniti dolor. Officiis quam, asperiores nesciunt tempora iure enim dicta quibusdam sunt aliquam temporibus quia omnis. Provident vitae blanditiis nam sequi esse, natus fugiat distinctio ratione fuga harum expedita voluptas unde?',
            'category_id' => 2,
            'user_id' => 1,
        ]);
        Post::create([
            'title' => 'Judul empat',
            'slug' => 'judul-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, placeat?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum optio necessitatibus sapiente? Esse error quia optio ratione beatae deleniti dolor. Officiis quam, asperiores nesciunt tempora iure enim dicta quibusdam sunt aliquam temporibus quia omnis. Provident vitae blanditiis nam sequi esse, natus fugiat distinctio ratione fuga harum expedita voluptas unde?',
            'category_id' => 2,
            'user_id' => 2,
        ]);
    }
}
