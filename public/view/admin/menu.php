<head>
    <link rel="stylesheet" type="text/css" href="/public/view/admin/menu.css">
    <script src="/public/view/admin/menu.js"></script>
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
    <label style="color: white">MONITORA</label>
    <a href="http://hubis.com.br/" target="_blank">
        <img src="/public/img/hubis.png" id="logo-hubis">
    </a>
</div>
<div class="menu" id="menu">
    <ul id="listMenu">
        <li>
            <a href="dashboard" onclick="menu()">Dashboard</a>
        </li>
        <li>
            <a href="local" onclick="menu()">Local</a>
        </li>
        <li>
            <a href="usuario" onclick="menu()">Usuario</a>
        </li>
        <li>
            <a onclick="logout()">Logout</a>
        </li>
    </ul>
</div>