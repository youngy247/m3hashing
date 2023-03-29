<?php

// Assume the password was put in a form and sent to us

$dbPassword = password_hash('banana', PASSWORD_DEFAULT);

// Store $dbPassword (the hash of the actual password) in a database

// Let's check the password - pretend the user is logging in

// Get the hashed password from the database

$correct = password_verify('apple', $dbPassword);

var_dump($correct);