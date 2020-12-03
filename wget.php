<?php

$url = $_REQUEST['url'];

$patt = "^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+(?:png|jpg|jpeg|gif|svg)+$^";

$isAllowed = preg_match($patt,$url);

if ($isAllowed) {

  echo system("wget $url -P /var/www/html/images/");

  echo '<h3 style="position:relative;max-width:500px;margin:450px auto;font-size:50px">check </br> /var/www/html/f2up/images/</br> maybe your file uploaded</h3>';

} else {

  echo '<h3 style="position:relative;max-width:500px;margin:450px auto;font-size:50px">Noo0o0o0o0o0o0o0o0pe</h3>';

}

