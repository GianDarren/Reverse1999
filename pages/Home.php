<?php
   session_start();

    if ($_SESSION['is_login'] !== true) {
     header("Location: login.php");  
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/home.css">
</head>

<body>
<div class="navbar">
        <a href="./home.php">Home</a>
        <a href="./character.php">Character List</a>
        <a href="./profile.php">Profile</a>
        <a href="../controllers/logout.php">Logout</a>
</div>

<h1 id="top">Reverse:1999</h1>
<br>
<div class="section">
    <p>Reverse: 1999 (重返未来：1999) is a turn-based fantasy adventure RPG that is being developed and published by Bluepoch for iOS and Android devices.
        Reverse: 1999 was released first in mainland China on May 31st, and subsequently released worldwide on October 26th, 2023 on PC, iOS, and Android platforms.</p>

    <p>On the last day of 1999, "The Storm" ascended from the ground up into the sky, and everyone except for you who became disorientated after is dissipated.
        You are called the "Timekeeper", the final witness of an era. You search for the truth behind "The Storm", and the answers that you are searching for are hidden in the last day of 1999.</p>
</div>

<div class="footer">
     &copy; 2023 Your Website. All rights reserved.
</div>


</body>
</html>