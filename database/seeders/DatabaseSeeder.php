<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        /*
        User::create([
            'name'  => 'Fachrul Mustofa',
            'email' => 'fachrulmustofa100@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name'  => 'Dodo',
            'email' => 'dodo@gmail.com',
            'password' => bcrypt('12345')
        ]);
        */

        User::factory(3)->create();

        Category::create([
            'name'  => 'Web Programming',
            'slug'  => 'web-programming'
        ]);

        Category::create([
            'name'  => 'Personal',
            'slug'  => 'personal'
        ]);

        Category::create([
            'name'  => 'Web Design',
            'slug'  => 'web-design'
        ]);
        
        Post::factory(20)->create();
        /*
        Post::create([
            'title' => 'Judul Pertama',
            'slug'  => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, libero. Ab blanditiis nisi sit, optio tempore eos nobis assumenda id at animi beatae voluptatem tenetur ratione.',
            'body'  => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, libero. Ab blanditiis nisi sit, optio tempore eos nobis assumenda id at animi beatae voluptatem tenetur ratione. Quisquam dolore repudiandae vel error, amet adipisci cumque consectetur totam iusto assumenda recusandae. A unde at amet hic expedita officiis adipisci molestiae. Quam rerum et debitis atque eaque! Molestias repellat, amet magni exercitationem enim adipisci impedit ad dolor vitae quibusdam iste similique repellendus itaque voluptatum reiciendis alias sit vel ex, eos blanditiis delectus dolorem praesentium quam. Sint, voluptatum excepturi explicabo ipsam omnis necessitatibus, ipsum repellat consectetur aspernatur quod deleniti perspiciatis mollitia corrupti assumenda ad?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo, maxime expedita sit consequatur veritatis quos fuga, nam eum odit pariatur quas unde impedit asperiores officia incidunt officiis debitis molestiae cupiditate qui, rerum itaque repellendus quod architecto! Necessitatibus, at provident deserunt voluptates inventore voluptate explicabo quis soluta perferendis autem veritatis. Unde perspiciatis cum in nam facilis! Fuga deserunt exercitationem asperiores aperiam! Tempore sapiente fuga in a possimus, molestias dolores dolorem officiis fugiat adipisci porro natus. Quod iure eveniet libero consequuntur repellat exercitationem amet officia impedit, unde, saepe consectetur corporis! Pariatur quasi quo nostrum omnis, incidunt quam veritatis tenetur, animi consequuntur illum ipsum, laborum voluptatem facere est suscipit aperiam at iure ipsam aspernatur ullam id natus ut hic! Ea optio maxime eos?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, esse molestias. Aliquid, fugit doloribus. Minus quasi, ea cumque deserunt nemo perferendis nostrum reiciendis aut corrupti iure, quaerat molestiae porro distinctio vel, enim facilis! Provident voluptatem quas, modi corporis voluptate, similique repellat qui quod aperiam aut facilis expedita tempore pariatur in.</p>',
            'category_id'   => 1,
            'user_id'   => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug'  => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, libero. Ab blanditiis nisi sit, optio tempore eos nobis assumenda id at animi beatae voluptatem tenetur ratione.',
            'body'  => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, libero. Ab blanditiis nisi sit, optio tempore eos nobis assumenda id at animi beatae voluptatem tenetur ratione. Quisquam dolore repudiandae vel error, amet adipisci cumque consectetur totam iusto assumenda recusandae. A unde at amet hic expedita officiis adipisci molestiae. Quam rerum et debitis atque eaque! Molestias repellat, amet magni exercitationem enim adipisci impedit ad dolor vitae quibusdam iste similique repellendus itaque voluptatum reiciendis alias sit vel ex, eos blanditiis delectus dolorem praesentium quam. Sint, voluptatum excepturi explicabo ipsam omnis necessitatibus, ipsum repellat consectetur aspernatur quod deleniti perspiciatis mollitia corrupti assumenda ad?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo, maxime expedita sit consequatur veritatis quos fuga, nam eum odit pariatur quas unde impedit asperiores officia incidunt officiis debitis molestiae cupiditate qui, rerum itaque repellendus quod architecto! Necessitatibus, at provident deserunt voluptates inventore voluptate explicabo quis soluta perferendis autem veritatis. Unde perspiciatis cum in nam facilis! Fuga deserunt exercitationem asperiores aperiam! Tempore sapiente fuga in a possimus, molestias dolores dolorem officiis fugiat adipisci porro natus. Quod iure eveniet libero consequuntur repellat exercitationem amet officia impedit, unde, saepe consectetur corporis! Pariatur quasi quo nostrum omnis, incidunt quam veritatis tenetur, animi consequuntur illum ipsum, laborum voluptatem facere est suscipit aperiam at iure ipsam aspernatur ullam id natus ut hic! Ea optio maxime eos?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, esse molestias. Aliquid, fugit doloribus. Minus quasi, ea cumque deserunt nemo perferendis nostrum reiciendis aut corrupti iure, quaerat molestiae porro distinctio vel, enim facilis! Provident voluptatem quas, modi corporis voluptate, similique repellat qui quod aperiam aut facilis expedita tempore pariatur in.</p>',
            'category_id'   => 1,
            'user_id'   => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug'  => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, libero. Ab blanditiis nisi sit, optio tempore eos nobis assumenda id at animi beatae voluptatem tenetur ratione.',
            'body'  => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, libero. Ab blanditiis nisi sit, optio tempore eos nobis assumenda id at animi beatae voluptatem tenetur ratione. Quisquam dolore repudiandae vel error, amet adipisci cumque consectetur totam iusto assumenda recusandae. A unde at amet hic expedita officiis adipisci molestiae. Quam rerum et debitis atque eaque! Molestias repellat, amet magni exercitationem enim adipisci impedit ad dolor vitae quibusdam iste similique repellendus itaque voluptatum reiciendis alias sit vel ex, eos blanditiis delectus dolorem praesentium quam. Sint, voluptatum excepturi explicabo ipsam omnis necessitatibus, ipsum repellat consectetur aspernatur quod deleniti perspiciatis mollitia corrupti assumenda ad?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo, maxime expedita sit consequatur veritatis quos fuga, nam eum odit pariatur quas unde impedit asperiores officia incidunt officiis debitis molestiae cupiditate qui, rerum itaque repellendus quod architecto! Necessitatibus, at provident deserunt voluptates inventore voluptate explicabo quis soluta perferendis autem veritatis. Unde perspiciatis cum in nam facilis! Fuga deserunt exercitationem asperiores aperiam! Tempore sapiente fuga in a possimus, molestias dolores dolorem officiis fugiat adipisci porro natus. Quod iure eveniet libero consequuntur repellat exercitationem amet officia impedit, unde, saepe consectetur corporis! Pariatur quasi quo nostrum omnis, incidunt quam veritatis tenetur, animi consequuntur illum ipsum, laborum voluptatem facere est suscipit aperiam at iure ipsam aspernatur ullam id natus ut hic! Ea optio maxime eos?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, esse molestias. Aliquid, fugit doloribus. Minus quasi, ea cumque deserunt nemo perferendis nostrum reiciendis aut corrupti iure, quaerat molestiae porro distinctio vel, enim facilis! Provident voluptatem quas, modi corporis voluptate, similique repellat qui quod aperiam aut facilis expedita tempore pariatur in.</p>',
            'category_id'   => 2,
            'user_id'   => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug'  => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, libero. Ab blanditiis nisi sit, optio tempore eos nobis assumenda id at animi beatae voluptatem tenetur ratione.',
            'body'  => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, libero. Ab blanditiis nisi sit, optio tempore eos nobis assumenda id at animi beatae voluptatem tenetur ratione. Quisquam dolore repudiandae vel error, amet adipisci cumque consectetur totam iusto assumenda recusandae. A unde at amet hic expedita officiis adipisci molestiae. Quam rerum et debitis atque eaque! Molestias repellat, amet magni exercitationem enim adipisci impedit ad dolor vitae quibusdam iste similique repellendus itaque voluptatum reiciendis alias sit vel ex, eos blanditiis delectus dolorem praesentium quam. Sint, voluptatum excepturi explicabo ipsam omnis necessitatibus, ipsum repellat consectetur aspernatur quod deleniti perspiciatis mollitia corrupti assumenda ad?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo, maxime expedita sit consequatur veritatis quos fuga, nam eum odit pariatur quas unde impedit asperiores officia incidunt officiis debitis molestiae cupiditate qui, rerum itaque repellendus quod architecto! Necessitatibus, at provident deserunt voluptates inventore voluptate explicabo quis soluta perferendis autem veritatis. Unde perspiciatis cum in nam facilis! Fuga deserunt exercitationem asperiores aperiam! Tempore sapiente fuga in a possimus, molestias dolores dolorem officiis fugiat adipisci porro natus. Quod iure eveniet libero consequuntur repellat exercitationem amet officia impedit, unde, saepe consectetur corporis! Pariatur quasi quo nostrum omnis, incidunt quam veritatis tenetur, animi consequuntur illum ipsum, laborum voluptatem facere est suscipit aperiam at iure ipsam aspernatur ullam id natus ut hic! Ea optio maxime eos?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, esse molestias. Aliquid, fugit doloribus. Minus quasi, ea cumque deserunt nemo perferendis nostrum reiciendis aut corrupti iure, quaerat molestiae porro distinctio vel, enim facilis! Provident voluptatem quas, modi corporis voluptate, similique repellat qui quod aperiam aut facilis expedita tempore pariatur in.</p>',
            'category_id'   => 2,
            'user_id'   => 2
        ]);
        */

    }
}
