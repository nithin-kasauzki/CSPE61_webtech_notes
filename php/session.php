<?php
// Start a session or resume the current session
session_start();

// Setting a session variable
$_SESSION["user"] = "John Doe";

// Setting a persistent cookie that lasts for a week
$cookie_name = "preferred_language";
$cookie_value = "English";
setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); // 86400 = 1 day

// Inform the user that the data has been set
echo "Session and Cookie data have been set.";
?>
