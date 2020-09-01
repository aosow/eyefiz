<?php

use App\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = "Tout savoir sur la sortie de l'iphone 12 ";
        $post->slug = Str::slug($post->title, '-');
        $post->content = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $post->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $post->save();

        $post = new Post();
        $post->title = "Fin de la licence temporaire Android pour Huawei";
        $post->slug = Str::slug($post->title, '-');
        $post->content = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $post->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $post->save();

        $post = new Post();
        $post->title = "PS5 : prix, sortie, jeux... Les dernières infos ";
        $post->slug = Str::slug($post->title, '-');
        $post->content = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $post->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $post->save();

        $post = new Post();
        $post->title = "Test machine à laver - Quel lave linge choisir ? ";
        $post->slug = Str::slug($post->title, '-');
        $post->content = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $post->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $post->save();

    }


}
