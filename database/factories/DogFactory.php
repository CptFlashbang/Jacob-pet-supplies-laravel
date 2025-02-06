<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dog>
 */
class DogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $maleNames = ["Max", "Buddy", "Charlie", "Jack", "Cooper", "Rocky", "Toby", "Tucker", "Jake", "Bear", "Duke", "Teddy", "Oliver", "Riley", "Bailey", "Bentley", "Milo", "Buster", "Cody", "Dexter", "Winston", "Murphy", "Leo", "Lucky", "Oscar", "Louie", "Zeus", "Henry", "Sam", "Harley", "Baxter", "Gus", "Sammy", "Jackson", "Bruno", "Diesel", "Jax", "Gizmo", "Bandit", "Rusty", "Marley", "Jasper", "Brody", "Roscoe", "Hank", "Otis", "Bo", "Joey", "Beau", "Ollie", "Tank", "Shadow", "Peanut", "Hunter", "Scout", "Blue", "Rocco", "Simba", "Tyson", "Ziggy", "Boomer", "Romeo", "Apollo", "Ace", "Luke", "Rex", "Finn", "Chance", "Rudy", "Loki", "Moose", "George", "Samson", "Coco", "Benny", "Thor", "Rufus", "Prince", "Chester", "Brutus", "Scooter", "Chico", "Spike", "Gunner", "Sparky", "Mickey", "Kobe", "Chase", "Oreo", "Frankie", "Mac", "Benji", "Bubba", "Champ", "Brady", "Elvis", "Copper", "Cash", "Archie", "Walter"];
        $femaleNames = ["Bella", "Lucy", "Daisy", "Molly", "Lola", "Sophie", "Sadie", "Maggie", "Chloe", "Bailey", "Roxy", "Zoey", "Lily", "Luna", "Coco", "Stella", "Gracie", "Abby", "Penny", "Zoe", "Ginger", "Ruby", "Rosie", "Lilly", "Ellie", "Mia", "Sasha", "Lulu", "Pepper", "Nala", "Lexi", "Lady", "Emma", "Riley", "Dixie", "Annie", "Maddie", "Piper", "Princess", "Izzy", "Maya", "Olive", "Cookie", "Roxie", "Angel", "Belle", "Layla", "Missy", "Cali", "Honey", "Millie", "Harley", "Marley", "Holly", "Kona", "Shelby", "Jasmine", "Ella", "Charlie", "Minnie", "Willow", "Phoebe", "Callie", "Scout", "Katie", "Dakota", "Sugar", "Sandy", "Josie", "Macy", "Trixie", "Winnie", "Peanut", "Mimi", "Hazel", "Mocha", "Cleo", "Hannah", "Athena", "Lacey", "Sassy", "Lucky", "Bonnie", "Allie", "Brandy", "Sydney", "Casey", "Gigi", "Baby", "Madison", "Heidi", "Sally", "Shadow", "Cocoa", "Pebbles", "Misty", "Nikki", "Lexie", "Grace", "Sierra"];

        $breedsArray = [
            "Affenpinscher" => [],
            "African" => [],
            "Airedale" => [],
            "Akita" => [],
            "Appenzeller" => [],
            "Australian" => ["Kelpie", "Shepherd"],
            "Bakharwal" => ["Indian"],
            "Basenji" => [],
            "Beagle" => [],
            "Bluetick" => [],
            "Borzoi" => [],
            "Bouvier" => [],
            "Boxer" => [],
            "Brabancon" => [],
            "Briard" => [],
            "Buhund" => ["Norwegian"],
            "Bulldog" => ["Boston", "English", "French"],
            "Bullterrier" => ["Staffordshire"],
            "Cattledog" => ["Australian"],
            "Cavapoo" => [],
            "Chihuahua" => [],
            "Chippiparai" => ["Indian"],
            "Chow" => [],
            "Clumber" => [],
            "Cockapoo" => [],
            "Collie" => ["Border"],
            "Coonhound" => [],
            "Corgi" => ["Cardigan"],
            "Cotondetulear" => [],
            "Dachshund" => [],
            "Dalmatian" => [],
            "Dane" => ["Great"],
            "Danish" => ["Swedish"],
            "Deerhound" => ["Scottish"],
            "Dhole" => [],
            "Dingo" => [],
            "Doberman" => [],
            "Elkhound" => ["Norwegian"],
            "Entlebucher" => [],
            "Eskimo" => [],
            "Finnish" => ["Lapphund"],
            "Frise" => ["Bichon"],
            "Gaddi" => ["Indian"],
            "Germanshepherd" => [],
            "Greyhound" => ["Indian", "Italian"],
            "Groenendael" => [],
            "Havanese" => [],
            "Hound" => ["Afghan", "Basset", "Blood", "English", "Ibizan", "Plott", "Walker"],
            "Husky" => [],
            "Keeshond" => [],
            "Kelpie" => [],
            "Kombai" => [],
            "Komondor" => [],
            "Kuvasz" => [],
            "Labradoodle" => [],
            "Labrador" => [],
            "Leonberg" => [],
            "Lhasa" => [],
            "Malamute" => [],
            "Malinois" => [],
            "Maltese" => [],
            "Mastiff" => ["Bull", "English", "Indian", "Tibetan"],
            "Mexicanhairless" => [],
            "Mix" => [],
            "Mountain" => ["Bernese", "Swiss"],
            "Mudhol" => ["Indian"],
            "Newfoundland" => [],
            "Otterhound" => [],
            "Ovcharka" => ["Caucasian"],
            "Papillon" => [],
            "Pariah" => ["Indian"],
            "Pekinese" => [],
            "Pembroke" => [],
            "Pinscher" => ["Miniature"],
            "Pitbull" => [],
            "Pointer" => ["German", "Germanlonghair"],
            "Pomeranian" => [],
            "Poodle" => ["Medium", "Miniature", "Standard", "Toy"],
            "Pug" => [],
            "Puggle" => [],
            "Pyrenees" => [],
            "Rajapalayam" => ["Indian"],
            "Redbone" => [],
            "Retriever" => ["Chesapeake", "Curly", "Flatcoated", "Golden"],
            "Ridgeback" => ["Rhodesian"],
            "Rottweiler" => [],
            "Saluki" => [],
            "Samoyed" => [],
            "Schipperke" => [],
            "Schnauzer" => ["Giant", "Miniature"],
            "Segugio" => ["Italian"],
            "Setter" => ["English", "Gordon", "Irish"],
            "Sharpei" => [],
            "Sheepdog" => ["English", "Indian", "Shetland"],
            "Shiba" => [],
            "Shihtzu" => [],
            "Spaniel" => ["Blenheim", "Brittany", "Cocker", "Irish", "Japanese", "Sussex", "Welsh"],
            "Spitz" => ["Indian", "Japanese"],
            "Springer" => ["English"],
            "Stbernard" => [],
            "Terrier" => [
                "American",
                "Australian",
                "Bedlington",
                "Border",
                "Cairn",
                "Dandie",
                "Fox",
                "Irish",
                "Kerryblue",
                "Lakeland",
                "Norfolk",
                "Norwich",
                "Patterdale",
                "Russell",
                "Scottish",
                "Sealyham",
                "Silky",
                "Tibetan",
                "Toy",
                "Welsh",
                "Westhighland",
                "Wheaten",
                "Yorkshire"
            ],
            "Tervuren" => [],
            "Vizsla" => [],
            "Waterdog" => ["Spanish"],
            "Weimaraner" => [],
            "Whippet" => [],
            "Wolfhound" => ["Irish"]
        ];

        $breedsCollection = collect($breedsArray);

        // Random breed selection
        $breedKey = $breedsCollection->keys()->random();
        $subBreeds = $breedsCollection[$breedKey];

        // Select sub-breed if available
        $breed = !empty($subBreeds) ? $breedKey . ' - ' . collect($subBreeds)->random() : $breedKey;

        $sex = $this->faker->randomElement(['male', 'female']);
        $name = $sex === 'male' ? $this->faker->randomElement($maleNames) : $this->faker->randomElement($femaleNames);



        return [
            'name' => $name,
            'sex' => $sex,
            'breed' => $breed,
            'image' => 'https://via.placeholder.com/150', // Placeholder for dog image
        ];
    }
}
