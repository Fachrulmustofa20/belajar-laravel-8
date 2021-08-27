<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fachrul",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora voluptatem atque odio voluptatum laborum aliquam, ducimus, maiores tenetur totam fugiat, vitae iusto? Architecto quis fuga quasi obcaecati quaerat corporis, odio possimus. Sint, veritatis impedit. Recusandae, libero in! Ipsa repudiandae nesciunt placeat, ullam magnam iste neque nemo perspiciatis maiores, facilis explicabo officiis corporis veniam consequuntur nostrum eum harum, voluptatem sapiente pariatur enim eveniet obcaecati. Eaque provident, itaque, est in ea aliquid hic voluptatem aperiam amet quo architecto ipsam assumenda ut quisquam."
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Arul",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora voluptatem atque odio voluptatum laborum aliquam, ducimus, maiores tenetur totam fugiat, vitae iusto? Architecto quis fuga quasi obcaecati quaerat corporis, odio possimus. Sint, veritatis impedit. Recusandae, libero in! Ipsa repudiandae nesciunt placeat, ullam magnam iste neque nemo perspiciatis maiores, facilis explicabo officiis corporis veniam consequuntur nostrum eum harum, voluptatem sapiente pariatur enim eveniet obcaecati. Eaque provident, itaque, est in ea aliquid hic voluptatem aperiam amet quo architecto ipsam assumenda ut quisquam."
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug',$slug);
    }
}
