<?php
require "routes/Routes.php";

$router = new Router();

$router->add("/", function () {
    require "views/home.php";
});
