<?php
declare(strict_types=1);
function displayErrors()
{
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
}
displayErrors();
require('ads.php');
require('articles.php');
require('vacancies.php');