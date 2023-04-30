<?php


session_start();
session_unset();
session_destroy();

// Going To Back To Front Page
header("location: ../index.php?error=none");