<?php

namespace App\Models;



class post 
{
    private static $blog_posts = [
        ["title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Ramadana",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio atque repudiandae libero cumque consequuntur perspiciatis in mollitia explicabo. Eos tempore libero ut natus pariatur saepe tenetur amet aspernatur dolorum dignissimos corrupti sint ullam reprehenderit quos harum cumque, odio nulla asperiores quod velit illo. Amet architecto delectus tenetur porro vero qui quo, officiis aspernatur placeat id aut facere aliquam iure harum, debitis quos corporis illo est voluptate suscipit eius? Eum eligendi ipsa nobis et, temporibus pariatur enim sunt aperiam delectus! Commodi?"
        ],
        
        [   "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sirrul Muhibbah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt consectetur voluptatem esse voluptatum! Similique est aliquid accusantium sequi debitis animi dolor fugit eveniet unde eum ab beatae modi repellendus, ipsa ex architecto excepturi, ut nihil saepe rem sint corrupti eius? Ducimus, veniam laborum. Totam labore voluptates laudantium cumque laborum? Placeat quasi aliquid temporibus voluptas quaerat optio numquam eaque repudiandae odio nulla, nam itaque recusandae possimus dolorem error quae animi? Ut vero placeat laborum laboriosam, magni harum expedita aliquam id repellendus laudantium, quaerat voluptatem nisi aut vel neque pariatur in sed quos commodi. Officia aspernatur omnis cum qui consequatur, numquam error."
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
        $post = static::all();
       // $post = [];
        //foreach ($post as $p){
        //if ($p ["slug"] === $slug){
        //$post = $p;
       // }
    //}

        return $post->firstWhere('slug', $slug);

        }
    }