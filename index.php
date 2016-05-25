<?php
session_start();
if(isset($_SESSION['hello']) && $_SESSION['hello'] == "world") {
    print "Old Session is alive";
} else {
    $_SESSION['hello'] = "world";
    print "Setting new Session";
}