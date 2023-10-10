<?php
// Database configuration
$db = mysqli_connect('localhost', 'root', '', 'tasklist');

if (!$db) {
    die('Database connection failed');
}
