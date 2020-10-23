<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--<meta http-equiv="refresh" content="0; URL=/tester"/>-->
</head>

<body>
  <?php
  require_once("../vendor/autoload.php");
  $lengt = 8;
  function dec2arr($dec): array
  {
    global $lengt;
    $bin = decbin($dec);
    $str = array_reverse(str_split($bin));
    for ($i = count($str); $i < $lengt; $i++) {
      $str[$i] = "0";
    };
    return $str;
  }
  function arr2dec($arr): int
  {

    $dec = implode("", array_reverse($arr));
    return bindec($dec);
  }
  dd(dec2arr("43"), decbin("43"), arr2dec([1, 1, 0, 1, 0, 1]), arr2dec(dec2arr(43)));

  ?>
</body>

</html>