<?php

$_SESSION['user_logged_in'] == 'no';


session_destroy();

header('location: index.php');