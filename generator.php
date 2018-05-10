<?php
// Should fix caching issues.
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Username Generator</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<?php
			echo "<h1>Tomato Hentai's Username Generator </h1>";
			echo "<tiny><center>Sometimes you'll need to refresh the page a few times to get a new username.<br />Blame the government... or... something.</center></tiny>";
			echo "<br />";
			echo "<center><p>Your new username is...</p></center>";
			$wordOne = array("Tomato", "1080p", "Aquatic", "Amiga", "Amigo", "Spaghetti", "Enormous", "Hellacious", "Hecka", "Commadore", "Miniscule", "Moist", "Darth", "Tractor", "Glass", "Artificial", "Salty", "Buoyant", "Skeleton", "Drago", "Wookie", "Mt.", "Safety", "Depressed", "Bipolar", "Hungry", "Nippy", "Saucy", "MLG", "Neon", "Hooker", "Hella", "Hipster", "Vaporwave", "Pocket", "Pigmask", "Cabbage", "CRT", "Psychotic", "Gay", "Magypsy", "Sentient", "Apple", "Satanic", "Glitterati", "Nervous", "Anxious", "Rad", "Nuclear", "Citra", "Furry", "Deep", "Cyborg", "Red", "Blue", "Orange", "Green", "Giga", "Rat", "Endless", "M.U.L.E.", "Prince", "Parappa the", "Amplified", "Asexual", "Steamy", "2D", "3D", "4D", "5D", "Blind", "Salmon", "Trout", "Goldfish", "Neko", "Cat", "Dog", "Inu", "World Wide", "Cherry", "Saut&eacute;ed", "Low-Poly", "Potentially Unwanted", "Plasma", "Salty", "Wampus", "Intergalactic", "Ethereal", "Omnipotent", "Omnipresent", "Trans", "Emo", "Frail", "Microscopic", "Wild", "Silent", "Canadian", "Foolish", "A Bottle of", "Shuffly", "Fake", "Carbonated", "Minecraft", "Fresh Prince of");
			$wordTwo = array("Hentai", "Lemonade", "Desert", "Sea", "Ocean", "Bog", "Asbestos", "Wiki", "Macintosh", "Mac", "Purgatory", "Sand", "Ass", "Booty", "Dongle", "Chode", "Jello", "Lake", "Pasta", "Hitler", "Holocaust", "Webkit", "Corpse", "Coffee", "Mushroom", "Condom", "Orgy", "emuNAND", "StreetPass", "amiibo",  "Nazi", "Carrot", "Attorney", "Hailstorm", "Bees", "Anime", "Shota", "Loli", "Bread", "Onett", "Cookie", "Illuminati", "Boulder", "Gender", "School", "CIA", "Bonfire", "Hell", "Web", "Scientologist", "Room", "Cena", "Pudding", "sysNAND", "NAND", "Iodine", "Fluticasone", "Vyvanse", "Lisdexamfetamine", "Levoamphetamine", "FBI", "Leviathan", "Puddle", "Rain", "Storm", "Thunder", "Dad", "Daddy", "Mom", "Generator", "Omorashi", "Piss", "Nobody", "Ceiling", "Wicca", "Wiccan", "Moon", "Amoeba", "Plant", "Forum", "Farm", "Pants", "Pi&ntilde;ata", "Gnop", "Foreskin", "CFW", "Oxygen", "Dolan", "Pie", "Yarn", "Plane", "Dirt", "Bukkake", "Whimbrel", "Knight", "Feminist", "Prick", "Detective", "Hebetude", "Enema", "RAID0", "RAID10", "Brogue", "Cocaine", "Heroin", "Cartwheel", "Neighbour", "Stench", "Friend", "Kin", "the Hedgehog", "Sausage", "Rave", "MySpace", "Tumblr", "Facebook", "Instagram", "Twitter", "Guitar", "Froge");
			$keyOne = array_rand($wordOne);
			$keyTwo = array_rand($wordTwo);
			echo "<name><center>$wordOne[$keyOne] $wordTwo[$keyTwo]</center></name>";
			echo "<br />";
			echo "<p>Hey, you. Yeah you. Wanna check out the <a href=\"https://github.com/headache-booth/\">creator</a>?</p>";
		?>
	</body>
</html>
