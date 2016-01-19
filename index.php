<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'classes/Loader.php';

Loader::load();
Router::route();
