<?php
include_once "config.php";
$count = $db->query("SELECT count(*) FROM users")->fetchColumn();
echo $count;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>count</title>
</head>
</html>