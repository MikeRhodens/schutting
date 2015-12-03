<?php
require 'app/core/init.php';
require 'app/views/header.php';
require 'app/views/sidebar.php';
require 'app/views/content.php';
switch_include::getInstance()->getPage(Input::get('page'));
require 'app/views/footer.php';

