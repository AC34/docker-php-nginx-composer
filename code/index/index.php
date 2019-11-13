<?php

echo "hello world from index.php<br>";
echo "request_uri=".$_SERVER["REQUEST_URI"]."<br>";

echo "loading app.php<br>";
require("../app/app.php");

