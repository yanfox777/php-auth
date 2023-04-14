<?php 
require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=php-auth',
        'user', 'password' ); 

session_start();
