<?php
session_start();

session_destroy();
header('Location: /Kodego/13_sessions.php');
