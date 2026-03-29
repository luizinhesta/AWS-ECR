<?php
require __DIR__ . '/bootstrap.php';
logout_user();
header('Location: index.php');
exit;