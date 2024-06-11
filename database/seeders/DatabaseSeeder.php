<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => "Abu Husein",
            'username' => "husein",
            'email' => "huseinabu@gmail.com",
            'password' => bcrypt('12345')

        ]);

        User::create([
            'name' => "hidayat",
            'username' => "dayat",
            'email' => "hidayat@gmail.com",
            'password' => bcrypt('12345')

        ]);

        // User::factory(3)->create();

        Category::create([
            'name' => "Web Programming",
            'slug' => "web-programming"
        ]);

        Category::create([
            'name' => "Personal",
            'slug' => "personal"
        ]);

        Post::factory(20)->create();

        Post::create([
            'title' => "Judul Pertama",
            'slug' => "judul-pertama",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio, molestias mollitia nemo sit et aliquam sint
            doloremque nulla blanditiis",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio, molestias mollitia nemo sit et aliquam sint
            doloremque nulla blanditiis, nostrum quis culpa consectetur. Excepturi sequi repellendus corrupti vero necessitatibus
            reprehenderit quis architecto labore omnis nulla ipsam ullam tempora itaque harum nisi delectus quam, ex quasi molestias
            velit esse. Ducimus harum aliquam eos necessitatibus, excepturi ipsa fugiat consectetur tenetur at beatae qui voluptatem
            nihil debitis veritatis laudantium voluptatum officia unde praesentium, vero alias deleniti numquam. Sed unde dolorem,
            minus illo saepe commodi molestias aliquid quidem eius quaerat magnam et vel mollitia quis, exercitationem magni aliquam
            sunt enim ratione dignissimos modi iusto. Quasi ea odit officia ipsum in eligendi laborum ex ad accusantium, iure
            aperiam tenetur, facilis molestiae perspiciatis sint. Suscipit perferendis exercitationem repudiandae voluptatibus
            asperiores culpa corrupti, omnis voluptate eum, obcaecati impedit porro debitis aut quia esse rem cum repellendus id,
            quos ratione tempora in tempore maiores! Possimus, officiis ducimus.",
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => "Judul Kedua",
            'slug' => "judul-kedua",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio, molestias mollitia nemo sit et aliquam sint
            doloremque nulla blanditiis",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio, molestias mollitia nemo sit et aliquam sint
            doloremque nulla blanditiis, nostrum quis culpa consectetur. Excepturi sequi repellendus corrupti vero necessitatibus
            reprehenderit quis architecto labore omnis nulla ipsam ullam tempora itaque harum nisi delectus quam, ex quasi molestias
            velit esse. Ducimus harum aliquam eos necessitatibus, excepturi ipsa fugiat consectetur tenetur at beatae qui voluptatem
            nihil debitis veritatis laudantium voluptatum officia unde praesentium, vero alias deleniti numquam. Sed unde dolorem,
            minus illo saepe commodi molestias aliquid quidem eius quaerat magnam et vel mollitia quis, exercitationem magni aliquam
            sunt enim ratione dignissimos modi iusto. Quasi ea odit officia ipsum in eligendi laborum ex ad accusantium, iure
            aperiam tenetur, facilis molestiae perspiciatis sint. Suscipit perferendis exercitationem repudiandae voluptatibus
            asperiores culpa corrupti, omnis voluptate eum, obcaecati impedit porro debitis aut quia esse rem cum repellendus id,
            quos ratione tempora in tempore maiores! Possimus, officiis ducimus.",
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => "Judul Ketiga",
            'slug' => "judul-ketiga",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio, molestias mollitia nemo sit et aliquam sint
            doloremque nulla blanditiis",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio, molestias mollitia nemo sit et aliquam sint
            doloremque nulla blanditiis, nostrum quis culpa consectetur. Excepturi sequi repellendus corrupti vero necessitatibus
            reprehenderit quis architecto labore omnis nulla ipsam ullam tempora itaque harum nisi delectus quam, ex quasi molestias
            velit esse. Ducimus harum aliquam eos necessitatibus, excepturi ipsa fugiat consectetur tenetur at beatae qui voluptatem
            nihil debitis veritatis laudantium voluptatum officia unde praesentium, vero alias deleniti numquam. Sed unde dolorem,
            minus illo saepe commodi molestias aliquid quidem eius quaerat magnam et vel mollitia quis, exercitationem magni aliquam
            sunt enim ratione dignissimos modi iusto. Quasi ea odit officia ipsum in eligendi laborum ex ad accusantium, iure
            aperiam tenetur, facilis molestiae perspiciatis sint. Suscipit perferendis exercitationem repudiandae voluptatibus
            asperiores culpa corrupti, omnis voluptate eum, obcaecati impedit porro debitis aut quia esse rem cum repellendus id,
            quos ratione tempora in tempore maiores! Possimus, officiis ducimus.",
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => "Judul Keempat",
            'slug' => "judul-keempat",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio, molestias mollitia nemo sit et aliquam sint
            doloremque nulla blanditiis",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio, molestias mollitia nemo sit et aliquam sint
            doloremque nulla blanditiis, nostrum quis culpa consectetur. Excepturi sequi repellendus corrupti vero necessitatibus
            reprehenderit quis architecto labore omnis nulla ipsam ullam tempora itaque harum nisi delectus quam, ex quasi molestias
            velit esse. Ducimus harum aliquam eos necessitatibus, excepturi ipsa fugiat consectetur tenetur at beatae qui voluptatem
            nihil debitis veritatis laudantium voluptatum officia unde praesentium, vero alias deleniti numquam. Sed unde dolorem,
            minus illo saepe commodi molestias aliquid quidem eius quaerat magnam et vel mollitia quis, exercitationem magni aliquam
            sunt enim ratione dignissimos modi iusto. Quasi ea odit officia ipsum in eligendi laborum ex ad accusantium, iure
            aperiam tenetur, facilis molestiae perspiciatis sint. Suscipit perferendis exercitationem repudiandae voluptatibus
            asperiores culpa corrupti, omnis voluptate eum, obcaecati impedit porro debitis aut quia esse rem cum repellendus id,
            quos ratione tempora in tempore maiores! Possimus, officiis ducimus.",
            'category_id' => 1,
            'user_id' => 2
        ]);
    }
}
