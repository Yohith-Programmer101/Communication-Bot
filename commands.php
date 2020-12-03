<?php include "header.php";?>
    <div class="scrollmenu">
        <a href="index.html">Home</a>
        <a href="commands.php" class="active">Commands</a>
        <a href="contact.php">Contact</a>
        <a href="https://discord.gg/pH2qMdFpAn">Support</a>
        <a href="https://discord.com/login">Login</a>
        <a href="https://classroom.google.com/c/MjIyNDU4OTI2MTQ1?cjc=gy7vrnj">Report</a> 
        <a href="admin.php">Admin Panel</a>
    </div>   
</body>
</html>

<!DOCKTYPE>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Commands, Syntax and Prefix for the Communication-Bot">
  <title>Communication Bot</title>
  <style>
    table, td, th, thead{
      border-radius: 10px;
      border-collapse: collapse;
      padding: 5px;
    }
    th{
      background: #15151e;
    }
    .scrolling{
      overflow-x: scroll;
    }
    .container{
      padding: 5px;
      border-radius: 5px;
      margin: auto;
      color: white;
      background: #23272a
    }
    code{
      background: #00000033;
      padding: 5px;
      border-radius: 5px;
    }
    .color-box{
      background: #3b3d43;
      padding: 5px;
      border-radius: 5px;
    }
    .cd{
      background: #3b3d43;
    }
    button{
      color: white;
      background: #23272a;
      border-radius: 5px;
      border: #3b3d43;
      font-size: 20px;
      width: 150px;
    }
    .btn{
      float: left;
      margin-right: 10px;
      border-right: 1px white solid;
      height: 550px;
      padding: 10px;
    }
    .content{
      margin-left: 10px;
    }
    #container{
      padding: 5px;
      margin: 5px;
      height: 580px; 
    }
  </style>
</head>
<body>
  <br>
  <div class="scrolling container" class="container">
    <h2>COMMAND PREFIX</h2>
    <hr>
    <p>Default: <code class="cd">+</code></p>
    <p>Example: <code class="cd">+help</code></p>
    <br>
    <h2>COMMAND USAGE SYNTAX</h2>
    <hr>
    <p><code class="cd">[]</code> - optional parameter.</p>
    <p><code class="cd">{}</code> - required parameter.</p>
    <p><code class="cd">()</code> - default value.</p>
    <br>
    <p>(Don't include these while typing the commands.)</p>
  </div>

  <br>

  <div class="container">
  <h2>COMMANDS</h2>
  <hr>
  <div class="btn">
    <br>
    <button id="all" style="background: #7289DA;" onclick="allContent(this)">All</button>
    <br><br>
    <button id="utility" onclick="utilityContent(this)">Utility</button>
    <br><br>
    <button id="economy" onclick="economyContent(this)">Economy</button>
    <br><br>
    <button id="misc" onclick="miscContent(this)">Misc</button>
  </div>
  <div id="container" class="scrolling">
    <div id="all-content">
      <div id="utility-content">
        <p id="content"><div class="color-box"><code>dm {user} {message}</code> - It will send the message to the user, it cannot send blank dm.</div></p>
        <p id="content"><div class="color-box"><code>spam {user} {message}</code> - It will spam the user with the message, it cannot spam with blank line.</div></p>
      </div>
      <div id="economy-content">
        <p id="content"><div class="color-box"><code>bal [@user]</code> - It is used to check the balence of the @user if provided or your's if not.</div></p>
        <p id="content"><div class="color-box"><code>inv [@user]</code> - It is used to check the inventory on the @user if provided or your's if not.</div></p>
        <p id="content"><div class="color-box"><code>shop</code> - It returns the list of items in the shop to buy them.</div></p>
        <p id="content"><div class="color-box"><code>buy {item}</code> - It is used to buy an item from the shop's list</div></p>
        <p id="content"><div class="color-box"><code>buy {item} [quantity (1)]</code> - It is used to buy items, to the number of quantity.</div></p>
        <p id="content"><div class="color-box"><code>lb [member amount (1)]</code> - It returns the leader board for the richest persons to the given number.</div></p>
        <p id="content"><div class="color-box"><code>sell {item} [quantity (1)]</code> - It sell the item to the number of quantity in the rate of 10% of the original price</div></p>
      </div>
      <div id="misc-content">
        <p id="content"><div class="color-box"><code>ping</code> - It returns the respone time of the bot.</div></p>
        <p id="content"><div class="color-box"><code>guilds</code> - It returns the number os servers the bot is currently in.</div></p>
      </div>
    </div>
  </div>
  <script>
    var ALL = document.getElementById("all");
    var UTILITY = document.getElementById("utility");
    var ECONOMY = document.getElementById("economy");
    var MISC = document.getElementById("misc");
    var ALL_CONTENT = document.getElementById("all-content");
    var UTILITY_CONTENT = document.getElementById("utility-content");
    var ECONOMY_CONTENT = document.getElementById("economy-content");
    var MISC_CONTENT = document.getElementById("misc-content");
    var CONTAINER = document.getElementById("container");
    var ALL_TEXT =  `
        <div id="all-content">
          <div id="utility-content">
            <p id="content"><div class="color-box"><code>dm {user} {message}</code> - It will send the message to the user, it cannot send blank dm.</div></p>
            <p id="content"><div class="color-box"><code>spam {user} {message}</code> - It will spam the user with the message, it cannot spam with blank line.</div></p>
          </div>
          <div id="economy-content">
            <p id="content"><div class="color-box"><code>bal [@user]</code> - It is used to check the balence of the @user if provided or your's if not.</div></p>
            <p id="content"><div class="color-box"><code>inv [@user]</code> - It is used to check the inventory on the @user if provided or your's if not.</div></p>
            <p id="content"><div class="color-box"><code>shop</code> - It returns the list of items in the shop to buy them.</div></p>
            <p id="content"><div class="color-box"><code>buy {item}</code> - It is used to buy an item from the shop's list</div></p>
            <p id="content"><div class="color-box"><code>buy {item} [quantity (1)]</code> - It is used to buy items, to the number of quantity.</div></p>
            <p id="content"><div class="color-box"><code>lb [member amount (1)]</code> - It returns the leader board for the richest persons to the given number.</div></p>
            <p id="content"><div class="color-box"><code>sell {item} [quantity (1)]</code> - It sell the item to the number of quantity in the rate of 10% of the original price</div></p>
          </div>
          <div id="misc-content">
            <p id="content"><div class="color-box"><code>ping</code> - It returns the respone time of the bot.</div></p>
            <p id="content"><div class="color-box"><code>guilds</code> - It returns the number os servers the bot is currently in.</div></p>
          </div>
        </div>`;
      var UTILITY_TEXT = `
          <div id="utility-content">
            <p id="content"><div class="color-box"><code>dm {user} {message}</code> - It will send the message to the user, it cannot send blank dm.</div></p>
            <p id="content"><div class="color-box"><code>spam {user} {message}</code> - It will spam the user with the message, it cannot spam with blank line.</div></p>
          </div>`;
      var ECONOMY_TEXT = `
          <div id="economy-content">
            <p id="content"><div class="color-box"><code>bal [@user]</code> - It is used to check the balence of the @user if provided or your's if not.</div></p>
            <p id="content"><div class="color-box"><code>inv [@user]</code> - It is used to check the inventory on the @user if provided or your's if not.</div></p>
            <p id="content"><div class="color-box"><code>shop</code> - It returns the list of items in the shop to buy them.</div></p>
            <p id="content"><div class="color-box"><code>buy {item}</code> - It is used to buy an item from the shop's list</div></p>
            <p id="content"><div class="color-box"><code>buy {item} [quantity (1)]</code> - It is used to buy items, to the number of quantity.</div></p>
            <p id="content"><div class="color-box"><code>lb [member amount (1)]</code> - It returns the leader board for the richest persons to the given number.</div></p>
            <p id="content"><div class="color-box"><code>sell {item} [quantity (1)]</code> - It sell the item to the number of quantity in the rate of 10% of the original price</div></p>
          </div>
      `;
      var MISC_TEXT = `
          <div id="misc-content">
            <p id="content"><div class="color-box"><code>ping</code> - It returns the respone time of the bot.</div></p>
            <p id="content"><div class="color-box"><code>guilds</code> - It returns the number os servers the bot is currently in.</div></p>
          </div>
      `;

    function allContent(element){
        console.log(ALL);
        element.style.backgroundColor = "#7289DA";
        UTILITY.style.backgroundColor = "#23272a";
        MISC.style.backgroundColor = "#23272a";
        ECONOMY.style.backgroundColor = "#23272a";
        ALL_CONTENT.remove();
        UTILITY_CONTENT.remove();
        ECONOMY_CONTENT.remove();
        MISC_CONTENT.remove();
        CONTAINER.innerHTML = ALL_TEXT;
    }

    function utilityContent(element){
        console.log(UTILITY);
        element.style.backgroundColor = "#7289DA";
        ALL.style.backgroundColor = "#23272a";
        MISC.style.backgroundColor = "#23272a";
        ECONOMY.style.backgroundColor = "#23272a";
        ALL_CONTENT.remove();
        UTILITY_CONTENT.remove();
        ECONOMY_CONTENT.remove();
        MISC_CONTENT.remove();
        CONTAINER.innerHTML = UTILITY_TEXT;
    }

    function economyContent(element){
        console.log(ECONOMY);
        element.style.backgroundColor = "#7289DA";
        ALL.style.backgroundColor = "#23272a";
        UTILITY.style.backgroundColor = "#23272a";
        MISC.style.backgroundColor = "#23272a";
        ALL_CONTENT.remove();
        UTILITY_CONTENT.remove();
        ECONOMY_CONTENT.remove();
        MISC_CONTENT.remove();
        CONTAINER.innerHTML = ECONOMY_TEXT;
    }

    function miscContent(element){
        console.log(MISC);
        element.style.backgroundColor = "#7289DA";
        ALL.style.backgroundColor = "#23272a";
        UTILITY.style.backgroundColor = "#23272a";
        ECONOMY.style.backgroundColor = "#23272a";
        ALL_CONTENT.remove();
        UTILITY_CONTENT.remove();
        ECONOMY_CONTENT.remove();
        MISC_CONTENT.remove(); 
        CONTAINER.innerHTML = MISC_TEXT;
    }
  </script>
</body>
</html>