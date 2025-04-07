<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Carbon\Carbon;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Pet Kelly The Kangaroo',
                'price' => 9.99,
                'available' => true,
                'description' => "Some dogs believe in tough love. This is for them. A rough & tough toy that can withstand a chew and wrestle during playtime. Made from recycled materials, it reuses what's already here, giving waste a second life while encouraging its collection and reuse.",
                'category' => 'Toy',
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Baby plesiosaur',
                'price' => 8.99,
                'available' => true,
                'description' => "Say hello to the Dinopaws, a cute and cuddly gang of soft toys that love a snuggle. Each member of this bright and colourful bunch is a perfect addition to your dog’s toy basket, featuring double-stitched seams and a squeaker. These prehistoric pals can’t wait to become your dog’s new best friend, and they’re all made from recycled materials, giving waste a second (and more playful) life.",
                'category' => 'Toy',
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Rough & Tough Narwhal',
                'price' => 11.99,
                'available' => true,
                'description' => "Some dogs believe in tough love. This is for them. A rough & tough toy that can withstand a chew and wrestle during playtime. Made from recycled materials, it reuses what's already here, giving waste a second life while encouraging its collection and reuse.",
                'category' => 'Toy',
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Soft baby dinosaur',
                'price' => 8.99,
                'available' => true,
                'description' => "Say hello to the Dinopaws, a cute and cuddly gang of soft toys that love a snuggle. Each member of this bright and colourful bunch is a perfect addition to your dog’s toy basket, featuring double-stitched seams and a squeaker. These prehistoric pals can’t wait to become your dog’s new best friend, and they’re all made from recycled materials, giving waste a second (and more playful) life.",
                'category' => 'Toy',
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Rough & tough octopus',
                'price' => 10.99,
                'available' => false,
                'description' => "Some dogs believe in tough love. This is for them. A rough & tough toy that can withstand a chew and wrestle during playtime. Made from recycled materials, it reuses what's already here, giving waste a second life while encouraging its collection and reuse.",
                'category' => 'Toy',
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Chad the red hot chilli pepper',
                'price' => 8.95,
                'available' => false,
                'description' => "This cheeky chilli pepper is set to be a red hot bestseller! Made from jute, stitched over with soft suede and with a plaited jute rope stalk, he's a real must have in your dog's toy box!",
                'category' => 'Toy',
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Trudy Truelove',
                'price' => 8.95,
                'available' => false,
                'description' => "Isn't she lovely, isn't she wonderful....This little love heart made from jute and stitched over with soft suede, will make an adorable addition to your dog's toy collection.",
                'category' => 'Toy',
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Flea & Tick shampoo',
                'price' => 11.99,
                'available' => true,
                'description' => "Fleas and Ticks can be a nasty pest for pet’s, causing bites, rashes, open sores and causing your pet to scratch so hard, they damage their own skin. Luckily nature gave us Neem Oil. Packed full of Neem Oil* and formulated with ethically sourced ingredients, our flea and tick shampoo for dogs helps to cleanse your dog’s coat whilst also leaving it clean, soft and smelling great for days after use. A safe and suitable flea shampoo for puppies over 8 weeks and for all coat categorys, it can also aid as a soothing relief for sensitive areas of the skin.",
                'category' => 'Grooming',
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Clean & Fresh Shampoo',
                'price' => 9.99,
                'available' => true,
                'description' => "Our newly reformulated Clean & Fresh Shampoo is now better than ever! Using the distinctive scent of black peppermint essential oil, which is known to deter parasites, alongside eucalyptus and lemongrass essential oils, this shampoo helps to keep your pet's coat fresh and clean. It has good rinsability with no residue remaining after washing. Use Clean & Fresh Shampoo regularly and you should find that fleas simply don’t want to hang around on your pet!",
                'category' => 'Grooming',
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Roast Dinner Toothpaste',
                'price' => 12.50,
                'available' => false,
                'description' => "With this tasty toothpaste on the menu, brushing your pet’s teeth doesn’t have to be too much of a chore for you or your pet. Human toothpastes just don’t cut the mustard for pets and this toothpaste has been developed in conjunction with veterinary professionals. It’s low foaming, and gentle – as the enamel of pets’ teeth can be surprisingly soft.",
                'category' => 'Grooming',
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Duck strips',
                'price' => 0.9,
                'available' => true,
                'description' => '100% duck',
                'category' => 'Treat',                
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Lamb strips',
                'price' => 0.9,
                'available' => true,
                'description' => '100% lamb',
                'category' => 'Treat',                
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Antler Natural Dog And Puppy Chew',
                'price' => 8.00,
                'available' => false,
                'description' => 'We would never be without an Antler, no smell, no mess perfect chew for Dogs!',
                'category' => 'Treat',                
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Chicken liver with parsnip & honey',
                'price' => 2.99,
                'available' => true,
                'description' => 'Small bites with a big flavour that dogs go wild for. These irresistible training Treat help dogs master their skills through positive reinforcement. Once they get a sniff of these, they’ll be sitting before you even mention the word. We only use free-range chicken that have access to the great outdoors, grubs and wildflowers. We add honey and parsnip to help them focus for longer. Pocket-sized and compostable packaging approved, ready to grab-and-go.',
                'category' => 'Treat',                
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Peanut with coconut & turmeric',
                'price' => 2.99,
                'available' => true,
                'description' => 'Crunchy peanuts, super turmeric and naturally sweet coconut for when you want to give your dog something special, just…because Results? Lick-lipping reviews. Each individual biscuit is soft-baked in an oven powered by renewables and packed with plant-based protein and tail-waggingly tasty ingredients, with peanuts providing a great source of energy and focus. Pocket-sized and compostable packaging approved, ready to grab-and-go.',
                'category' => 'Treat',                
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Beef cartilage',
                'price' => 1.20,
                'available' => true,
                'description' => '100% beef',
                'category' => 'Treat',                
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Black pudding stick',
                'price' => 1.10,
                'available' => true,
                'description' => 'Our Stick range is our most popular and there\'s a flavour to suit every Dogs taste buds! You can feed these meaty sticks whole or break them up into bites for multiple rewards. As these Meat Sticks are high-value rewards they make great training Treat! Chop them up before class and you and your Dog will be best in show!',
                'category' => 'Treat',                
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
            [
                'name' => 'Braided lamb skin',
                'price' => 1.60,
                'available' => true,
                'description' => 'Braided lamb chew',
                'category' => 'Treat',                
                'sell_by_date' => Carbon::now()->addDays(rand(30, 365))
            ],
        ];

        
        foreach ($products as $product) {
            $product['img_url'] = $product['img_url'] ?? 'https://via.placeholder.com/150';
            Product::create($product);
        }
    }
}
