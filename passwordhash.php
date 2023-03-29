<?php

// Assume the password was put in a form and sent to us

$dbPassword = password_hash('banana', PASSWORD_DEFAULT);

// Store $dbPassword (the hash of the actual password) in a database