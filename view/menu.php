<head>
    <link rel="stylesheet" type="text/css" href="public/css/menu.css">
    <script src="public/js/menu.js"></script>
    <script src="public/js/login.js"></script>
</head>
<div id="barraSuperior">
    <input type="checkbox" id="checkMenu">
    <label for="checkMenu">
        <div id="botaoMenu" onclick="menu()">
            <span class="linha-menu"></span>
            <span class="linha-menu"></span>
            <span class="linha-menu"></span>
        </div> 
    </label>
</div>
<div id="topMenu">
    <a href="admin.php"><label>DASHBACKUP</label></a>
    <a href="http://hubis.com.br/" target="_blank">
        <img src="public/img/hubis.png" id="logo-hubis">
    </a>
</div>
<div class="menu" id="menu">
    <ul id="listMenu">
        <li>
            <a href="dashboard.php" onclick="menu()">Dashboard</a>
        </li>
        <li>
            <a href="local.php" onclick="menu()">Local</a>
        </li>
        <li>
            <a href="usuario.php" onclick="menu()">Usuario</a>
        </li>
        <li>
            <a onclick="menu();logout()">Logout</a>
        </li>
    </ul>
</div>