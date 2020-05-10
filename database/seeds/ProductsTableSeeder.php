<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 3,
                'brand' => 'Ferrero Rocher',
                'category' => 'Milk',
                'name' => 'Ferrero Rocher',
                'price' => 16,
                'description' => 'Ferrero Rocher offers a unique taste experience of contrasting layers: a whole crunchy hazelnut in the heart, a delicious creamy hazelnut filling, a crisp wafer shell covered with chocolate and gently roasted pieces.',
                'image' => 'ferr_1588149586.jpg',
                'created_at' => '2020-04-28 10:37:44',
                'updated_at' => '2020-04-29 08:39:46',
            ),
            1 => 
            array (
                'id' => 4,
                'brand' => 'Ritter Sport',
                'category' => 'White',
                'name' => 'Crisp',
                'price' => 9,
                'description' => 'This bar is a declaration of love to fans of anything crispy. The roasted corn and rice flakes make it twice as crunchy, combining with the strong milk and vanilla flavours of the white chocolate to create a harmonious taste. Enough to make anyone\'s heart melt.',
                'image' => 'crispy_1588149178.jpg',
                'created_at' => '2020-04-28 16:02:42',
                'updated_at' => '2020-04-29 08:32:58',
            ),
            2 => 
            array (
                'id' => 5,
                'brand' => 'Mondelez',
                'category' => 'Dark',
                'name' => 'Alpen Gold',
                'price' => 5,
                'description' => 'Alpen Gold is one of the leading chocolate brands in Poland, Russia and Ukraine. Combining premium chocolate with irresistible ingredients like nuts, raisins and liqueur, Alpen Gold satisfies chocolate cravings with a delicious taste. Alpen Gold is available in chocolate bars, boxed chocolates and creamy, mouth-watering pralines.',
                'image' => 'alpen_1588149282.jpg',
                'created_at' => '2020-04-28 18:09:48',
                'updated_at' => '2020-04-29 08:34:42',
            ),
            3 => 
            array (
                'id' => 6,
                'brand' => 'Crafers',
                'category' => 'Milk',
                'name' => 'Amilov',
                'price' => 2,
                'description' => 'Fantastic, high quality chocolate makes a wonderful gift for friends and family.',
                'image' => 'amilov_1588149441.jpg',
                'created_at' => '2020-04-28 18:29:31',
                'updated_at' => '2020-04-29 08:37:21',
            ),
            4 => 
            array (
                'id' => 8,
                'brand' => 'Lindt',
                'category' => 'White',
                'name' => 'Grandeur',
                'price' => 25,
                'description' => 'The Lindt Master Chocolatiers have created this fine selection of Mini pralines for you with the most precise craftsmanship and passion for detail. They have managed to create the most prestigious pralines smaller, yet equally refined. Exquisite, delicate, Mini Pralines for even more delight.',
                'image' => 'lindt_1588152911.jpg',
                'created_at' => '2020-04-28 19:22:10',
                'updated_at' => '2020-04-29 09:35:11',
            ),
            5 => 
            array (
                'id' => 12,
                'brand' => 'Roshen',
                'category' => 'Dark',
                'name' => 'Roshen Premium',
                'price' => 10,
                'description' => 'ROSHEN chocolate is a combination of excellent recipes and mastery of confectioners, which ensures a high quality product that brings true satisfaction. And that is what we all expect from the chocolate.',
                'image' => 'roshen_1588152308.png',
                'created_at' => '2020-04-29 09:25:08',
                'updated_at' => '2020-04-29 09:25:08',
            ),
            6 => 
            array (
                'id' => 13,
                'brand' => 'Korkunov',
                'category' => 'Milk',
                'name' => 'Korkunov',
                'price' => 12,
                'description' => 'The A.KORKUNOV brand was created by Andrey Korkunov in 1999, and after just a few years captured the love and recognition of consumers. Now A. KORKUNOV is the most famous brand of premium chocolate, which is nice to give as a gift or put on the table for your dear guests.',
                'image' => 'korkunov_1588153201.png',
                'created_at' => '2020-04-29 09:40:01',
                'updated_at' => '2020-05-06 16:22:34',
            ),
            7 => 
            array (
                'id' => 18,
                'brand' => 'Nestle',
                'category' => 'Milk',
                'name' => 'KitKat',
                'price' => 4,
                'description' => 'KitKat Chocolatory is the ultimate KitKat Break Experience offering products with unique premium flavors, personalized and customized, digitally shareable. KitKat is the first global confectionery brand to be sourced from 100% sustainable cocoa.',
                'image' => 'kit_1588183432.png',
                'created_at' => '2020-04-29 17:20:32',
                'updated_at' => '2020-04-29 18:03:52',
            ),
            8 => 
            array (
                'id' => 34,
                'brand' => 'HERSHEY\'S',
                'category' => 'Milk',
                'name' => 'Hershey\'s Chocolate Bar',
                'price' => 1,
                'description' => 'There’s happy, and then there’s HERSHEY’S Happy. Made with farm fresh milk, this HERSHEY’S Chocolate Bar makes life delicious. Unwrap a bar, break off a piece, savor and repeat.',
                'image' => 'hersheys_1588767116.png',
                'created_at' => '2020-05-06 12:11:56',
                'updated_at' => '2020-05-06 12:11:56',
            ),
            9 => 
            array (
                'id' => 35,
                'brand' => 'Ghirardelli',
                'category' => 'Dark',
                'name' => 'RASPBERRY RADIANCE SQUARES',
                'price' => 32,
                'description' => 'Take time to slow down and feel yourself melt with each bite. This sophisticated recipe fuses crunchy raspberry bits with our Intense Dark chocolate.',
                'image' => 'dark_1588780483.jpg',
                'created_at' => '2020-05-06 15:54:43',
                'updated_at' => '2020-05-06 15:54:43',
            ),
            10 => 
            array (
                'id' => 36,
                'brand' => 'Toblerone',
                'category' => 'Milk',
                'name' => 'Classic Personalization',
                'price' => 14,
                'description' => 'Smooth Swiss milk chocolate with delectable honey and almond nougat. Unique triangles of delicious milk chocolate to give as a gift or share with family and friends',
                'image' => 'toble_1588781319.jpg',
                'created_at' => '2020-05-06 16:08:39',
                'updated_at' => '2020-05-06 16:08:39',
            ),
            11 => 
            array (
                'id' => 37,
                'brand' => 'Milka',
                'category' => 'Milk',
                'name' => 'Crushed Hazelnuts',
                'price' => 8,
                'description' => 'The new Milka Hazelnut Nut Paste is a delicious mix of Milka\'s delicate milk chocolate with melting hazelnut hazelnut paste and slices of toasted hazelnuts',
                'image' => 'milka_1588782106.PNG',
                'created_at' => '2020-05-06 16:21:46',
                'updated_at' => '2020-05-06 16:21:46',
            ),
            12 => 
            array (
                'id' => 38,
                'brand' => 'GREEN AND BLACK\'S',
                'category' => 'White',
                'name' => 'Organic',
                'price' => 11,
                'description' => 'Cocoa butter, pressed from crushed cocoa beans, and organic whole milk give our White chocolate its wonderfully smooth texture. Then, we blend in Madagascan vanilla, which adds a deeper flavor, which, we think, white chocolate rarely achieves.',
                'image' => 'gb_1588782943.jpg',
                'created_at' => '2020-05-06 16:35:43',
                'updated_at' => '2020-05-06 16:35:43',
            ),
            13 => 
            array (
                'id' => 39,
                'brand' => 'Mars',
                'category' => 'Milk',
                'name' => 'Bounty',
                'price' => 7,
                'description' => 'Available in whole milk and dark chocolate varieties, the moist, tender coconut in Bounty Candy tempts your senses with the taste of paradise.',
                'image' => 'bounty_1588783108.jpg',
                'created_at' => '2020-05-06 16:38:28',
                'updated_at' => '2020-05-06 16:38:28',
            ),
            14 => 
            array (
                'id' => 40,
                'brand' => 'Ulker',
                'category' => 'White',
                'name' => 'Chicolata',
                'price' => 6,
                'description' => 'Ülker Chocolate Pistachio White Tablet',
                'image' => 'ulker_1588783854.jpg',
                'created_at' => '2020-05-06 16:50:54',
                'updated_at' => '2020-05-06 16:50:54',
            ),
        ));
        
        
    }
}