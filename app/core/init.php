<?php

session_start();
require 'app/configuration/config.php';
require 'app/helpers/autoloader.php';
new AutoLoader('app/helpers');
new AutoLoader('app/class');
require 'app/functions/functions.php';