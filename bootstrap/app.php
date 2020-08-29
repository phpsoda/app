<?php

require '../routing/web.php';

// Load configurations and etc. here

session_start();

return PHPSoda\Application::getInstance();
