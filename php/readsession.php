<?php
// Start or resume the session
session_start();

// Retrieve session data
if (isset($_SESSION["user"])) {
    echo "Welcome back, " . $_SESSION["user"] . "!<br>";
} else {
    echo "Session data not found.<br>";
}

// Retrieve cookie data
if (isset($_COOKIE["preferred_language"])) {
    echo "Preferred Language: " . $_COOKIE["preferred_language"] . "<br>";
} else {
    echo "Preferred Language Cookie not set.<br>";
}
?>
