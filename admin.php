<?php include "header.php"; ?>
    <div class="scrollmenu">
        <a href="index.html">Home</a>
        <a href="commands.php">Commands</a>
        <a href="contact.php">Contact</a>
        <a href="https://discord.gg/pH2qMdFpAn">Support</a> 
        <a href="https://discord.com/login">Login</a>
        <a href="https://classroom.google.com/c/MjIyNDU4OTI2MTQ1?cjc=gy7vrnj">Report</a>
        <a href="admin.php" class="active">Admin Panel</a>
    </div>   
</body>
</html>

<!DOCKTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin panel for the Coomunication-Bot, only admins can enter.">
    <title>Communication Bot</title>
    <style>
        img{
            width: 200px;
            height: 200px;
            border-radius: 5px; 
        }
        .content{
            border: black solid 5px;
            border-radius: 5px;
            margin: auto;
            width: 200px;
            height: 400px;
            padding: 5px;
        }
        .form{
            padding: 5px; 
            background: #0a0a0f;
            border-radius: 5px;
            width: 190px;
        }
    </style>
</head>
<body>
<br>
    <div class="content">
    <img src="bcb 3d bot.jpg" alt="bcb 3d bot.jpg">
    <br><br>
    <div class="form">
    <form action="admin_processing_.php" method="post">
        User Name <br>
        <input type="text" name="username" placeholder="User Name"><br>
        Password <br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" value="Submit">
    </form>
    </div>
    </div>
</body>
</html>