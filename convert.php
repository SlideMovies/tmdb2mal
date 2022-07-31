<?php
  $api_key = "MyAPIKey"; // Please provide your own TMDb API key.
  $m = json_decode(file_get_contents("https://api.themoviedb.org/3/tv/$_GET[id]/season/$_GET[s]?api_key=$api_key"));
  $date = $m->air_date;
  $year = explode("-", $date)[0];
  $y = json_decode(file_get_contents("https://api.themoviedb.org/3/tv/$_GET[id]?api_key=$api_key"));
  $title = $y->name;
  $x = json_decode(file_get_contents(str_replace(" ", "%20", "https://api.jikan.moe/v4/anime?q=$title&start_date=$year&order_by=start_date")));
  echo $x->data[0]->mal_id;
?>
