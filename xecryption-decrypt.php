<?php function decrypt($raw) {
  $raw_ar = explode(".",$raw);

  // get a single number for each character
  $chars = array();
  for ($i = 0; $i < sizeof($raw_ar); $i++) {
    if (fmod($i,3) == 0)
    array_push($chars, $raw_ar[$i]);
    else {
      $floor = floor($i/3);
      $chars[$floor] += $raw_ar[$i];
    }
  }

  // get frequencies of each character
  $frequencies = array();
  foreach($chars as $char) {
    if (array_key_exists($char,$frequencies)) {
      $frequencies[$char]++;
    }
    else {
      $frequencies[$char] = 1;
    }
  }

  // calculate offset using the ASCII value of the space character (32)
  $mostfreq = array_keys($frequencies,max($frequencies));
  $spacecode = $mostfreq[0];
  $offset = $spacecode - 32;

  // print the ASCII codes
  $out = "";
  foreach ($chars as $char) {
    $decoded = $char - $offset;
    if ($decoded == 10) {
      $out.="<br/>";
    }
    else {
      $out.="&#";
      $out.= (string) $decoded;
      $out.=";";
    }
  }
  return $out;
}
