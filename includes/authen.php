<?php
session_start();
require_once('connect.php');

define("BASE_URL", DIRECTORY_SEPARATOR . "land" . DIRECTORY_SEPARATOR);
define("ROOT_PATH", $_SERVER['DOCUMENT_ROOT'] . BASE_URL);