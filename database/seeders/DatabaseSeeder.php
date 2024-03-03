<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        User::factory(5)->create();

        /*
        User::create([
            'name' => 'Wiro Sableng',
            'email' => 'sisableng88@mail.com',
            'password' => bcrypt('12345')
        ]);
        */

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Category::create([
            'name' => 'Network',
            'slug' => 'network'
        ]);

        Post::factory(10)->create();

        /*
        Post::create([
            'postTitle' => 'Judul Kesatu',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-kesatu',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolorem repellat maxime, eius atque ducimus, voluptate alias in vitae mollitia magnam.',
            'postBody' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolorem repellat maxime, eius atque ducimus, voluptate alias in vitae mollitia magnam. Excepturi sed perspiciatis repellendus odio porro ullam, architecto fuga iste eius corporis. Consequuntur aperiam exercitationem animi quae voluptatum iure minus. Temporibus provident labore, nam tempora veritatis architecto, autem doloremque veniam ab alias laborum eligendi, odio quisquam eum. Qui vitae dignissimos sint similique tempora. Ullam voluptates ab laudantium at odit suscipit, provident corrupti esse eaque.</p><p>Temporibus dolore earum quaerat necessitatibus autem. Quidem aliquid tenetur nam quos officiis aliquam eum temporibus! Blanditiis alias omnis et nostrum fugiat eos, nulla doloribus eligendi, natus quod harum repudiandae voluptatem eius! Distinctio consequuntur perspiciatis nesciunt eius fugit omnis veniam reprehenderit temporibus, repellat, iste dolor quo. Numquam fugit corporis, possimus, nostrum illum eius cupiditate maiores necessitatibus eum veniam ea fugiat recusandae doloribus dignissimos, quas laboriosam eveniet! Possimus voluptate veritatis ipsum dolorem magnam perferendis.</p><p>Numquam nulla reprehenderit labore sit eos laboriosam modi architecto debitis corporis? Minus non cumque beatae ducimus eos asperiores, molestiae veniam eveniet commodi quas mollitia, error reprehenderit perspiciatis aliquam adipisci quidem necessitatibus doloribus. Fuga consequatur quaerat perferendis numquam magnam dolorem voluptas illo, quas natus sapiente ipsam quod repellendus adipisci nostrum nemo exercitationem iste autem?</p>'
        ]);
        */
    }
}
