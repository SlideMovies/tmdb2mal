<?php
  $m = json_decode(file_get_contents("https://api.themoviedb.org/3/tv/$_GET[id]/season/$_GET[s]?api_key=7f43cb004071d31460301e2127f5fb41"));
  $date = $m->air_date;
  $year = explode("-", $date)[0];
  $y = json_decode(file_get_contents("https://api.themoviedb.org/3/tv/$_GET[id]?api_key=7f43cb004071d31460301e2127f5fb41"));
  $title = $y->name;
  $x = json_decode(file_get_contents(str_replace(" ", "%20", "https://api.jikan.moe/v4/anime?q=$title&start_date=$year&order_by=start_date")));
  echo $x->data[0]->mal_id;
?>
