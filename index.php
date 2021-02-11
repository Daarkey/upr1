<?php

$favouriteAnime = "Sword Art Online";
$numberOfEpisodes = 200;
$viewers = 79.8;
$isSAOtheBest = true;
$array = [$favouriteAnime, $numberOfEpisodes, $viewers, $isSAOtheBest];

//print_r($array);
//echo $favouriteAnime;
//echo "<br>";
//echo $numberOfEpisodes;
//echo "<br>";
//echo $viewers;
//echo "<br>";
//echo $isSAOtheBest;
//echo "<br>";

$assocArray = [
    "title" => $favouriteAnime,
    "num" => $numberOfEpisodes,
    "viewers" => $viewers,
    "isSAOtheBest" => $isSAOtheBest
];

//print_r($assocArray);

//for ($i = 0; $i <= 3; $i++) {
//    echo $array[$i];
//    echo "<br";
//}

//$counter = 0;
//while ($counter < sizeof($array)) {
//    echo $array[$counter];
//    echo "<br>";
//    $counter++;
//}

//foreach ($assocArray as $key => $item) {
//    echo $key;
//    echo "<br>";
//    echo $item;
//    echo "<br>";
//}

//function whatIsMyFavouriteAnime($personName) {
//    $favouriteAnime = "";
//    echo $personName;
//    $personName = strtolower($personName);
//    echo "<br>";
//    echo $personName;
//    echo "<br>";
//    if ($personName === "simona") {
//        $favouriteAnime = "Your favourite anime is ...";
//    }
//    elseif ($personName === "georgi") {
//        $favouriteAnime = "Georgi;s favourite anime is ...";
//    }
//    else {
//        $favouriteAnime = "Person has not been found";
//    }
//    return $favouriteAnime;
//}
//
//echo whatIsMyFavouriteAnime("simona");
//echo whatIsMyFavouriteAnime("georgi");

function whatIsMyFavouriteAnime($personName)
{
    $favouriteAnime = "";
    echo $personName;
    $personName = strtolower($personName);
    echo "<br>";
    echo $personName;
    echo "<br>";
    switch ($personName) {
        case "simona" :
            $favouriteAnime = "Simona";
            break;
        case "georgi":
            $favouriteAnime = "Georgi";
            break;
        case "marin":
            $favouriteAnime = "Marin";
            break;
        default:
            $favouriteAnime = "Not found";
            break;
    }
    return $favouriteAnime;
}

echo whatIsMyFavouriteAnime("simona");