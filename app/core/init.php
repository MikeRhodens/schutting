<?php
ob_start();
session_start();
require 'app/configuration/config.php';
require 'app/helpers/autoloader.php';
new AutoLoader('app/helpers');
new AutoLoader('app/class');
new user();
require 'app/functions/functions.php';
require 'app/controller/ajax.php';