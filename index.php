<?php 
require_once "StoreBase.php";
require_once "PlaystationStore.php";
$PlaystationStore = new PlaystationStore("RU", "ru");
$MostPopular = $PlaystationStore->PS4Content();
echo '{    "games": [' ;
foreach ($MostPopular as $game)
{
echo 
'{'
. '"name": "'. $game->name .'"'. ', "display_price": "' . $game->default_sku->display_price  .'"'. ', "long_desc": "' . $game->long_desc .'"'.  ', "genres": "' . $game->metadata->genre->values[0].'"'.  ', "screenshots1": "'. $game->mediaList->screenshots[0]->url .'"'	
. ', "screenshots2": "' . $game->mediaList->screenshots[1]->url .'"'
. ', "screenshots3": "'. $game->mediaList->screenshots[2]->url .'"'
. ', "screenshots4": "'. $game->mediaList->screenshots[3]->url .'"'
. ', "provider_name": "' . $game->provider_name .'"'
. ',"release_date": "' .$game->release_date .'"'
.  ',"score": "' .$game->star_rating->score .'"'
.  ',"total": "' .$game->star_rating->total .'"'
. ', "poster": "'. $game->images[0]->url .'"' . '}, ' 
; 
//echo "<img src='".$game->images[0]->url."'><hr>";
}
echo "] }";
?>