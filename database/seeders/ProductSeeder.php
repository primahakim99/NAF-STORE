<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Apple Chips(200 Gram)',
            'category'=> 'Chips',
            'description'=> 'Apple chips are processed apple chips that are fried in a special way, usually using a vacuum frying machine. If you use the usual frying method, namely by using a cauldron / pan of apples will not be chips because the fruit will be damaged by excessive heat. By using a vacuum frying machine apples fried with a lower temperature of about 50°-60 °C so as not to damage the apples.',
            'stock'=> 100,
            'weight(Gram)'=> 200,
            'price(Rp)'=> 31500,
            'image'=>'Assets\images\img-pro-01.jpg',
        ]);

        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Bakpao Sayang(6 pcs)',
            'category'=> 'Snack',
            'description'=> 'Bakpao that is famous in the city of Malang and is often used as a souvenir is Bakpao Sayang. Various flavors are offered by this product, namely strawberry, chocolate, pineapple, peanut, black bean, green bean, meat, blueberry, and so on.',
            'stock'=> 100,
            'weight(Gram)'=> 300,
            'price(Rp)'=> 30000,
            'image'=>'Assets\images\img-pro-02.jpg',
        ]);

        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Bayam Crispy(100 Gram)',
            'category'=> 'Chips',
            'description'=> 'Spinach chips are chips made from spinach leaves and fried using seasoned flour. Spinach leaves are known to have a high iron content, so besides being delicious, spinach chips also have good benefits for the body.',
            'stock'=> 100,
            'weight(Gram)'=> 100,
            'price(Rp)'=> 8700,
            'image'=>'Assets\images\img-pro-03.jpg',
        ]);

        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Broccoli Chips(200 Gram)',
            'category'=> 'Chips',
            'description'=> 'Brochili chips are processed from broccoli vegetables mixed with flour that has been seasoned. Broccoli chips can affect the nutritional content such as vitamin C, fiber and antioxidants. Even though it is only priced at a relatively cheap price, broccoli chips are beneficial for the health of the body',
            'stock'=> 100,
            'weight(Gram)'=> 200,
            'price(Rp)'=> 17000,
            'image'=>'Assets\images\img-pro-04.jpg',
        ]);

        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Chili Chips(200 Gram)',
            'category'=> 'Chips',
            'description'=> 'For fans of spicy snacks, of course, you are no stranger to chili chips. Chili chips made from cassava or sweet potato and fried crisply with chili powder are one of the snacks that people really like.',
            'stock'=> 100,
            'weight(Gram)'=> 200,
            'price(Rp)'=> 34000,
            'image'=>'Assets\images\img-pro-05.jpg',
        ]);

        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Cokelat Tempe Dekonco(100 Gram)',
            'category'=> 'Snack',
            'description'=> 'Tempe chocolate is one of the home industry products in Malang that offers the delicacy of chocolate combined with the delicacy of tempeh. Even though it is priced relatively cheaply, this tempeh chocolate has a delicious taste.',
            'stock'=> 100,
            'weight(Gram)'=> 100,
            'price(Rp)'=> 10000,
            'image'=>'Assets\images\img-pro-06.jpg',
        ]);

        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Gadung Chips(250 Gram)',
            'category'=> 'Snack',
            'description'=> 'Gadung chips are food made from gadung tubers which are thinly sliced then dried in the sun to dry and then fried. Gadung chips are perfect for you chips lovers because they taste delicious.',
            'stock'=> 100,
            'weight(Gram)'=> 250,
            'price(Rp)'=> 13500,
            'image'=>'Assets\images\img-pro-07.jpg',
        ]);

        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Klanceng Honey(500 Gram)',
            'category'=> 'Beverages',
            'description'=> 'Klanceng honey is produced by dwarf honeybees that used to live wild in Southeast Asia and South Asia. The texture of the resulting honey taste is also more sweet and sour, there is also a little bitter. But this lanceng honey has a distinctive taste, different from ordinary honey.',
            'stock'=> 100,
            'weight(Gram)'=> 500,
            'price(Rp)'=> 31500,
            'image'=>'Assets\images\img-pro-08.jpg',
        ]);

        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Jackfruit Chips(250 Gram)',
            'category'=> 'Chips',
            'description'=> 'Jackfruit chips are chips processed jackfruit that are fried in a special way, usually using a vacuum frying machine. If you use the usual frying method, namely by using a cauldron / pan of jackfruit fruit will not be chips because the fruit will be damaged by excessive heat. By using a vacuum frying machine jackfruit fried with a lower temperature of about 50°-60 °C so as not to damage the jackfruit. In addition, the aroma and color do not change much and last stored for a long period of time even without the use of additional preservatives.',
            'stock'=> 100,
            'weight(Gram)'=> 250,
            'price(Rp)'=> 22000,
            'image'=>'Assets\images\img-pro-09.jpg',
        ]);

        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Pia Mangkok(400 Gram)',
            'category'=> 'Snack',
            'description'=> 'If Yogyakarta has pathok bakpia, then Malang has "Pia Mangkok". Not much different from the actual pathok bakpia, it`s just that pia bowl has a drier and crisper skin texture. But when you bite it, you will feel a soft sensation on the inside. The variants of the taste vary, there are chocolate, coffee, durian, cheese, tangwe, and green beans',
            'stock'=> 100,
            'weight(Gram)'=> 400,
            'price(Rp)'=> 40000,
            'image'=>'Assets\images\img-pro-10.jpg',
        ]);

        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Banana chips(250 Gram)',
            'category'=> 'Snack',
            'description'=> 'Banana chips can be processed traditionally or through a regular frying pan and can also be processed through a fruit chip machine. This time we will introduce the type of banana chips that are processed traditionally, the way the processing is not complicated recipes, especially also known to the public because the traditional processing of banana chips is one of the legacies that are hereditary introduced by our predecessor generations.

            The banana we choose must be from the type that can be processed into banana chips, should not be too ripe or that is still close to ripe so that at the time of the process of frying bananas can dry faster and also not easily burned.',
            'stock'=> 100,
            'weight(Gram)'=> 250,
            'price(Rp)'=> 18000,
            'image'=>'Assets\images\img-pro-11.jpg',
        ]);

        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Apple Cider Drink SIIPLAH(24 pcs)',
            'category'=> 'Beverages',
            'description'=> 'Apple cider drink is a liquid obtained by squeezing apples by filtering or unfiltered, not fermented and intended for fresh drinks that can be drunk directly. Some of the benefits of apples for health are as follows: help the work of the small intestine, reduce the risk of respiratory disorders, nourish the oral cavity and teeth, good for bone health, control blood sugar, prevent and treat cancer, good for brain health, lower cholesterol and many other benefits. The freshness of this apple extract drink is very suitable to be served when it is cold in the hot air. Of course, without losing the benefits of the content of apples themselves that nourish the body.',
            'stock'=> 100,
            'weight(Gram)'=> 2500,
            'price(Rp)'=> 32000,
            'image'=>'Assets\images\img-pro-12.jpg',
        ]);

        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Veggie Chips(200 Gram)',
            'category'=> 'Chips',
            'description'=> 'Vegetable chips can be made with slices of vegetables fried, fried soaked, baked, or simply dried. Vegetable chips can be produced from a wide variety of root vegetables and leaf vegetables, such as carrots, radishes, rutabaga, parsnips, parsley roots, cervil root, celery root, beets, radishes, topinambur, taro, malanga, egg taro, sweet potato, butter squash, onion, garlic, sweet potatoes, cassava, kale, spinach, fennel, and bengkuang. Some versions of baked chips use sliced vegetables, smeared with a little oil, and then baked in the oven until crisp. [2] Vegetable chips prepared using this method are often called healthier than fried chips, especially if prepared using olive oil that is "heart-healthy".',
            'stock'=> 100,
            'weight(Gram)'=> 200,
            'price(Rp)'=> 20000,
            'image'=>'Assets\images\img-pro-13.jpg',
        ]);

        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Soya Bean Chips(100 Gram)',
            'category'=> 'Chips',
            'description'=> 'Tempeh chips are one type of processed food from soy tempeh ingredients that are thinly fried and mixed with spices and other ingredients. Malang is one of the cities producing tempeh chips that are familiar to people, the results of tempeh chips from the Malang area have their own distinctive taste that is able to create the best taste of processed soybeans.

            From the best soybean ingredients, these tempeh chips are made by Aneka Keripik Malang, ranging from soy base ingredients to spices selected through good Quality Control to get the best quality of tempeh chips.

            Processing of tempeh chips is carried out with semi-tradition where assisted by supporting tools and handled by experts in the field of tempeh chips. Healthy and Hygienic is the commitment of Aneka Keripik Malang products to always provide the best results for consumers.',
            'stock'=> 100,
            'weight(Gram)'=> 100,
            'price(Rp)'=> 5500,
            'image'=>'Assets\images\img-pro-14.jpg',
        ]);

        DB::table('products')->insert([
            'ID_Store' => '1',
            'productName'=> 'Carrot Chips(250 Gram)',
            'category'=> 'Chips',
            'description'=> 'Carrot chips are processed carrot chips that are fried in a special way, usually using a vacuum frying machine. If you use the usual frying method, namely by using a cauldron / pan of jackfruit fruit will not be chips because the fruit will be damaged by excessive heat. By using a vacuum frying machine carrots fried with a lower temperature of about 50°-60 °C so as not to damage the carrot fruit. In addition, the aroma and color do not change much and last stored for a long period of time even without the use of additional preservatives.',
            'stock'=> 100,
            'weight(Gram)'=> 250,
            'price(Rp)'=> 17000,
            'image'=>'Assets\images\img-pro-15.jpg',
        ]);
    }
}
