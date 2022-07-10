<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       

        // User::create([
        //     'name'=>'endang salma devi',
        //     'email'=>'endnagsalma@gmail.com',
        //     'password'=>bcrypt('123456')
        // ]);


         User::factory(3)->create();

        Category::create([
            'name' =>'Web programing',
            'slug' => 'web-programing',
        ]);
        Category::create([
            'name' =>'Web design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' =>'Personal',
            'slug' => 'personal',
        ]);

        // Post::factory(5)->create();






        Post::create([
            'title'=>'Judul Pertama',
            'slug'=>'judul-pertama',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>1,
            'user_id'=>1
        ]);
        Post::create([
            'title'=>'Judul Kedua',
            'slug'=>'judul-kedua',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>2
        ]);
        Post::create([
            'title'=>'Judul Ketiga',
            'slug'=>'judul-ketiga',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>3
        ]);
        Post::create([
            'title'=>'Judul Empat',
            'slug'=>'judul-empat',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>3
        ]);
        Post::create([
            'title'=>'Judul Lima',
            'slug'=>'judul-lima',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>3
        ]);
        Post::create([
            'title'=>'Judul Enam',
            'slug'=>'judul-enam',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>3
        ]);
        Post::create([
            'title'=>'Judul Tuju',
            'slug'=>'judul-tuju',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>3
        ]);
        Post::create([
            'title'=>'Judul Delapan',
            'slug'=>'judul-delapan',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>3
        ]);
        Post::create([
            'title'=>'Judul Sembilan',
            'slug'=>'judul-sembilan',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>3
        ]);
        Post::create([
            'title'=>'Judul Sepuluh',
            'slug'=>'judul-sepuluh',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>3
        ]);
        Post::create([
            'title'=>'Judul Sebelas',
            'slug'=>'judul-sebelas',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>3
        ]);
        Post::create([
            'title'=>'Judul Duabelas',
            'slug'=>'judul-duabelas',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>3
        ]);
        Post::create([
            'title'=>'Judul Ketigabelas',
            'slug'=>'judul-ketigabelas',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>3
        ]);
        Post::create([
            'title'=>'Judul Keempatbelas',
            'slug'=>'judul-keempatbelas',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>3
        ]);
        Post::create([
            'title'=>'Judul Kelimabelas',
            'slug'=>'judul-kelimabelas',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>3
        ]);
        Post::create([
            'title'=>'Judul Keenambelas',
            'slug'=>'judul-keenambelas',
            'excerpt'=>'dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus,',
            'body'=>'<p> dolor sit amet consectetur adipisicing elit. Veniam mollitia possimus quos inventore velit sit beatae ut minus, dignissimos debitis rerum cumque doloribus corrupti laborum ipsam aliquid sapiente doloremque. Sint eaque animi atque numquam obcaecati repudiandae quibusdam aperiam perspiciatis tempore odio! Nostrum, similique quidem error eligendi illo quam labore omnis autem laboriosam voluptatum doloremque sapiente, officia ipsa quos accusantium maxime saepe quis, repudiandae earum hic. Iusto aspernatur, distinctio placeat similique</p> <p> ullam possimus accusantium incidunt quibusdam consectetur natus delectus nesciunt eius illum vel molestias facilis reprehenderit inventore, accusamus, ducimus nostrum! Officiis, eum enim aliquam sapiente voluptas eveniet exercitationem perspiciatis voluptate asperiores ipsam assumenda fugit sequi atque quidem possimus quisquam doloremque quos</p><p> vero dolore culpa veritatis, itaque quia neque! Id nihil optio minima unde, ad quasi beatae. Nisi hic sint ea dolor dolorum, deleniti fuga, vel velit, vitae alias repellendus corporis necessitatibus! Fuga cupiditate asperiores magnam ut mollitia! Recusandae, aspernatur saepe.</p>',
            'category_id'=>2,
            'user_id'=>3
        ]);



        }
}
