<?php

$nombres= ["Anna", "Clara", "Nimue", "Patricia", "Melisa"] ;
foreach ($nombres as $value) {
  echo "$value" ;
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<ul>
<?php foreach ($nombres as $value) : ?>
  <li>
<?=$value?>
 </li>
<?php endforeach ?>

</ul>
  </body>
</html>
