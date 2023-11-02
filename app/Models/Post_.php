<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "id" => 1,
            "title" => "Judul post 1",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, dignissimos ipsam voluptatum eaque sunt facere laudantium expedita ratione non nulla cumque quas cupiditate soluta, delectus a vitae, laborum neque. Nesciunt magni iusto doloribus. Vel eaque hic iste, odio laudantium, quasi cumque aliquid aut rem qui consequatur sit quae sint saepe maiores dicta esse vero sunt magni pariatur ducimus illum. Totam non nesciunt molestias voluptatibus adipisci iste at impedit perspiciatis soluta eius modi facilis maxime minima perferendis sint laudantium iusto, veritatis officia vel dolorum quos qui libero minus quidem? Amet dicta aperiam, perspiciatis officiis iure facilis optio facere aliquam eius mollitia, molestias voluptate voluptatem nesciunt dolorem itaque, consectetur eum sit reprehenderit. Soluta veritatis, ex voluptate doloribus magni vel! Placeat vero quas atque ex doloribus tenetur temporibus tempore distinctio ea iste aut laudantium fuga maiores iure, unde id eaque, laboriosam soluta illum. Voluptas quidem exercitationem autem voluptatem. Nemo perspiciatis in animi esse corporis delectus pariatur ea nihil id quasi. At deleniti doloribus cumque earum. Libero quibusdam, aut nemo modi repellat nam voluptates dolor. Obcaecati nesciunt minus aliquid! Nesciunt vero asperiores ut dolore! Molestiae, ducimus tempora sint sed nesciunt numquam recusandae voluptatibus laudantium nobis porro totam mollitia, corporis atque adipisci fuga aspernatur debitis."
        ],
        [
            "id" => 2,
            "title" => "Judul post 2",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, dignissimos ipsam voluptatum eaque sunt facere laudantium expedita ratione non nulla cumque quas cupiditate soluta, delectus a vitae, laborum neque. Nesciunt magni iusto doloribus. Vel eaque hic iste, odio laudantium, quasi cumque aliquid aut rem qui consequatur sit quae sint saepe maiores dicta esse vero sunt magni pariatur ducimus illum. Totam non nesciunt molestias voluptatibus adipisci iste at impedit perspiciatis soluta eius modi facilis maxime minima perferendis sint laudantium iusto, veritatis officia vel dolorum quos qui libero minus quidem? Amet dicta aperiam, perspiciatis officiis iure facilis optio facere aliquam eius mollitia, molestias voluptate voluptatem nesciunt dolorem itaque, consectetur eum sit reprehenderit. Soluta veritatis, ex voluptate doloribus magni vel! Placeat vero quas atque ex doloribus tenetur temporibus tempore distinctio ea iste aut laudantium fuga maiores iure, unde id eaque, laboriosam soluta illum. Voluptas quidem exercitationem autem voluptatem. Nemo perspiciatis in animi esse corporis delectus pariatur ea nihil id quasi. At deleniti doloribus cumque earum. Libero quibusdam, aut nemo modi repellat nam voluptates dolor. Obcaecati nesciunt minus aliquid! Nesciunt vero asperiores ut dolore! Molestiae, ducimus tempora sint sed nesciunt numquam recusandae voluptatibus laudantium nobis porro totam mollitia, corporis atque adipisci fuga aspernatur debitis."
        ],
        [
            "id" => 3,
            "title" => "Judul post 3",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, dignissimos ipsam voluptatum eaque sunt facere laudantium expedita ratione non nulla cumque quas cupiditate soluta, delectus a vitae, laborum neque. Nesciunt magni iusto doloribus. Vel eaque hic iste, odio laudantium, quasi cumque aliquid aut rem qui consequatur sit quae sint saepe maiores dicta esse vero sunt magni pariatur ducimus illum. Totam non nesciunt molestias voluptatibus adipisci iste at impedit perspiciatis soluta eius modi facilis maxime minima perferendis sint laudantium iusto, veritatis officia vel dolorum quos qui libero minus quidem? Amet dicta aperiam, perspiciatis officiis iure facilis optio facere aliquam eius mollitia, molestias voluptate voluptatem nesciunt dolorem itaque, consectetur eum sit reprehenderit. Soluta veritatis, ex voluptate doloribus magni vel! Placeat vero quas atque ex doloribus tenetur temporibus tempore distinctio ea iste aut laudantium fuga maiores iure, unde id eaque, laboriosam soluta illum. Voluptas quidem exercitationem autem voluptatem. Nemo perspiciatis in animi esse corporis delectus pariatur ea nihil id quasi. At deleniti doloribus cumque earum. Libero quibusdam, aut nemo modi repellat nam voluptates dolor. Obcaecati nesciunt minus aliquid! Nesciunt vero asperiores ut dolore! Molestiae, ducimus tempora sint sed nesciunt numquam recusandae voluptatibus laudantium nobis porro totam mollitia, corporis atque adipisci fuga aspernatur debitis."
        ]
        ];

        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($id){
            $posts = static::all();
            return $posts->firstWhere('id', $id);
        }
}