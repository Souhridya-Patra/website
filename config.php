<?php
// Database configuration
$db = mysqli_connect('localhost', 'username', 'password', 'tasklist');

if (!$db) {
    die('Database connection failed');
}
