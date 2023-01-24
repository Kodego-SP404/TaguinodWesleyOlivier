<?php
session_start();

if (isset($_SESSION['username'])){
    echo 'Logged in as: '. $_SESSION['username'];
    echo '<a href="logout.php">Logout</a>';
} else {
    echo 'Not logged in';
    echo '<a href="/htdocs/kodego/13_sessions.php">Home</a>';
    
}