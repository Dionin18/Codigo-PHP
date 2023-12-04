<?php

echo $_SERVER["SERVER_NAME"];

echo $_SERVER["PHP_SELF"];
echo "<br>";

echo $_SERVER["SERVER_SOFTWARE"];
echo "<br>";

echo $_SERVER["HTTP_USER_AGENT"];
echo "<br>";


echo getenv("REMOTE_ADDR");
echo "<br>";

echo gethostbyname("");
echo "<br>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";