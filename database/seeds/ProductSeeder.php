<?php

use App\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->title = "Iphone 11 Pro Max";
        $product->slug = Str::slug($product->title, '-');
        $product->price = 1100;
        $product->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $product->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->title = "Samsung Galaxy S10";
        $product->slug = Str::slug($product->title, '-');
        $product->price = 800;
        $product->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $product->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->title = "Huawai P30";
        $product->slug = Str::slug($product->title, '-');
        $product->price = 500;
        $product->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $product->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->title = "ASUS PC portable Vivobook Flip Tactile";
        $product->slug = Str::slug($product->title, '-');
        $product->price = 600;
        $product->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $product->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $product->category_id = 2;
        $product->save();

        $product = new Product();
        $product->title = "Ordinateur Portable - DELL Inspiron 15 5593";
        $product->slug = Str::slug($product->title, '-');
        $product->price = 900;
        $product->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $product->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $product->category_id = 2;
        $product->save();

        $product = new Product();
        $product->title = "Apple - 13,3\" MacBook Air -128Go SSD - Argent";
        $product->slug = Str::slug($product->title, '-');
        $product->price = 1000;
        $product->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $product->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $product->category_id = 2;
        $product->save();

        $product = new Product();
        $product->title = "Console PS4 Slim 500Go Noire/Jet Black";
        $product->slug = Str::slug($product->title, '-');
        $product->price = 300;
        $product->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $product->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $product->category_id = 3;
        $product->save();

        $product = new Product();
        $product->title = "Xbox One S 1To 2 manettes";
        $product->slug = Str::slug($product->title, '-');
        $product->price = 350;
        $product->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $product->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $product->category_id = 3;
        $product->save();

        $product = new Product();
        $product->title = "Console Nintendo Switch Lite Grise";
        $product->slug = Str::slug($product->title, '-');
        $product->price = 250;
        $product->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $product->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $product->category_id = 3;
        $product->save();

        $product = new Product();
        $product->title = "BEKO REC52S - Réfrigérateur congélateur bas";
        $product->slug = Str::slug($product->title, '-');
        $product->price = 500;
        $product->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $product->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $product->category_id = 4;
        $product->save();

        $product = new Product();
        $product->title = "ELECTROLUX ECF6P62X - Four électrique encastrable";
        $product->slug = Str::slug($product->title, '-');
        $product->price = 350;
        $product->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $product->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $product->category_id = 4;
        $product->save();

        $product = new Product();
        $product->title = "Lave Linge frontal connecté CANDY CS1292D3S - 9kg";
        $product->slug = Str::slug($product->title, '-');
        $product->price = 300;
        $product->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam iusto perferendis voluptatibus libero aperiam illum. Eos unde aut iusto. Ad voluptates consectetur temporibus asperiores quaerat esse laboriosam soluta a? Dolorum nobis amet, illo impedit corrupti labore similique aspernatur deleniti eaque! Velit dolorum assumenda eius minus, molestias quisquam tempora temporibus vel voluptates ipsam magnam dolor vero ratione consectetur nihil incidunt odio unde. Pariatur dolores libero dignissimos quo tempora mollitia veritatis ut architecto, distinctio possimus odit voluptate voluptatibus expedita harum quod maiores obcaecati alias. Accusantium id dolorum dicta suscipit porro quibusdam, minus velit numquam ab fuga quia consequuntur eum eveniet illum.';
        $product->img = "https://picsum.photos/400/350?random=" . mt_rand(1, 500);
        $product->category_id = 4;
        $product->save();

    }

}
