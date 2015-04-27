<!doctype html>
<html>

<head>
<title>seamonkey</title>
</head>

<body>

<ul>

<?php

$directory = 'music/';

$it = new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS);

while($it->valid()) {
  echo '<li>' . $it->key() . '</li>';
  $it->next();
}

?>

</ul>

</body>

</html>
