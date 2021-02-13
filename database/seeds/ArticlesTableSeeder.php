<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('articles')->insert([
            [
                'user_id' => 1,
                'category_id' => 3,
                'title' => 'Adventure in Borobudur Temple',
                'description' => 'The world’s biggest Buddhist sanctuary is a must-visit attraction, not only because of its religious significance but also for its beauty and charm. Built around the eighth century, this temple is a reflection of the country’s long and intricate history that covers religion, culture, customs, architecture, and more. Tourists can observe the ornate and mesmerizing stone carvings, gaze of the main grand structure, and immerse themselves in the surrounding scenic view that includes the sunrise, jungles, and faraway hills.The world’s biggest Buddhist sanctuary is a must-visit attraction, not only because of its religious significance but also for its beauty and charm. Built around the eighth century, this temple is a reflection of the country’s long and intricate history that covers religion, culture, customs, architecture, and more. Tourists can observe the ornate and mesmerizing stone carvings, gaze of the main grand structure, and immerse themselves in the surrounding scenic view that includes the sunrise, jungles, and faraway hills.The world’s biggest Buddhist sanctuary is a must-visit attraction, not only because of its religious significance but also for its beauty and charm. Built around the eighth century, this temple is a reflection of the country’s long and intricate history that covers religion, culture, customs, architecture, and more. Tourists can observe the ornate and mesmerizing stone carvings, gaze of the main grand structure, and immerse themselves in the surrounding scenic view that includes the sunrise, jungles, and faraway hills.The world’s biggest Buddhist sanctuary is a must-visit attraction, not only because of its religious significance but also for its beauty and charm. Built around the eighth century, this temple is a reflection of the country’s long and intricate history that covers religion, culture, customs, architecture, and more. Tourists can observe the ornate and mesmerizing stone carvings, gaze of the main grand structure, and immerse themselves in the surrounding scenic view that includes the sunrise, jungles, and faraway hills.',
                'image' => 'images/borobudur-temple.jpg',
            ],
            [
                'user_id' => 2,
                'category_id' => 2,
                'title' => 'Climb Mount Bromo',
                'description' => 'This volcano, often surrounded by smoke and a multi-colored sky, has become one of the most iconic sights from Indonesia. Watching the sunrise at Mount Bromo from Java Island is a popular excursion that offers and unforgettable experience. The volcano also shares the area with a vast desert, other lush mountains and hills, sweeping flower fields, and some waterfalls, most of which can be explored in a day or two.',
                'image' => 'images/mount-bromo.jpg',
            ],
            [
                'user_id' => 2,
                'category_id' => 1,
                'title' => 'Relax at Nusa Islands',
                'description' => 'Often referred to as “The Maldives of Bali,” this string of three islands off the coast of Bali is an up-and-coming tropical paradise with natural attractions that many would argue outshine the famed mainland. Nusa Penida, Nusa Lembongan, and Nusa Ceningan each have their own specialty, but all three offer a splendid underwater scene, with thriving wildlife, translucent water, and a calm surface. The areas are perfect for diving, snorkeling, or water sports. Other favorite activities include cliff-jumping in Nusa Ceningan, crossing the yellow bridge between Nusa Lembongan and Nusa Ceningan, caving, hiking, and more.',
                'image' => 'images/nusa-islands.jpg',
            ],
            [
                'user_id' => 3,
                'category_id' => 1,
                'title' => 'Raja Ampat',
                'description' => 'With one of the liveliest underwater scenes on the planet, this world-famous tropical paradise is home to over 530 species of coral, 700 species of mollusk, and 1,300 types of fish. Despite the magnetism of exotic species and a breathtaking island view, Raja Ampat remains largely pristine because of its remote location and vast locality. More than just a divers’ paradise, Raja Ampat also makes an unforgettable destination for birdwatchers, photographers, adventurers, and even those who long for a luxury vacation with an amazing view in a faraway island.',
                'image' => 'images/raja-ampat.jpg',
            ],
            [
                'user_id' => 3,
                'category_id' => 3,
                'title' => 'Adventure in Ubud Bali',
                'description' => 'Considered Bali’s art and culture capital, Ubud charms tourists beyond its elegant art galleries and lively traditional performances. Ubud is also one of the most beautiful neighborhoods in the popular island destination. The famed Tegalalang Rice Terrace, for example, is a must-visit spot while in Bali. Ubud’s lush tropical jungles, calming rivers, and other natural features have also provided many wellness establishments with a serene atmosphere. Even a casual stroll or meal in this locality may come with a lovely view of nature or architecture.',
                'image' => 'images/ubud.jpg',
            ],
        ]);
    }
}
