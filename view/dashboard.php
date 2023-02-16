<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/geral.css">
    <link rel="stylesheet" type="text/css" href="public/css/menu.css">
    <link rel="stylesheet" type="text/css" href="public/css/tabela.css">
    <script src="public/js/jquery-1.11.1.min.js"></script>
    <script src="public/js/usuario.js"></script>
    <script src="public/js/dialog.js"></script>
</head>
<body>
    <?php // include_once('check.php') ?>
    <?php include_once('menu.php') ?>
    <div id="content">
        <div class="table-responsive">
            Cliente A
            <table class="table-fill table">
                <tr>
                    <th class="text-left1" scope="col">Local</th>
                    <th class="text-left1" scope="col">Data</th>
                    <th class="text-left1" scope="col">Status</th>
                    <th class="text-left1" scope="col">Erro</th>
                    <th class="text-left1" scope="col">Cloud</th>
                </tr>
                <tr>
                    <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>local1</b></td>
                    <td class="text-left"><center>16/02/2023</center></td>
                    <td style="white-space: nowrap;" class="text-left" bgcolor="#FF0000" ><center>Não OK</center></td>
                    <td class="text-left"><center><a href="erro.php?Cliente='.$cliente[0].'&Praca='.$cliente[$i].'&Erro=Erro_Vegas.log" target="_blank">View</a></center></td>
                    <td class="text-left"><center><a href="'.$link_sugarsync[$i].'" target="_blank">Link</a></center></td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>local2</b></td>
                    <td class="text-left"><center>16/02/2023</center></td>
                    <td style="white-space: nowrap;" class="text-left" bgcolor="#32CD32" ><center>OK</center></td>
                    <td class="text-left"><center><a href="erro.php?Cliente='.$cliente[0].'&Praca='.$cliente[$i].'&Erro=Erro_Vegas.log" target="_blank">View</a></center></td>
                    <td class="text-left"><center><a href="'.$link_sugarsync[$i].'" target="_blank">Link</a></center></td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>local3</b></td>
                    <td class="text-left"><center>16/02/2023</center></td>
                    <td style="white-space: nowrap;" class="text-left" bgcolor="#32CD32" ><center>OK</center></td>
                    <td class="text-left"><center><a href="erro.php?Cliente='.$cliente[0].'&Praca='.$cliente[$i].'&Erro=Erro_Vegas.log" target="_blank">View</a></center></td>
                    <td class="text-left"><center><a href="'.$link_sugarsync[$i].'" target="_blank">Link</a></center></td>
                </tr>
            </table>
        </div>
        <br>
        <div class="table-responsive">
            Cliente B
            <table class="table-fill table">
                <tr>
                    <th class="text-left1" scope="col">Local</th>
                    <th class="text-left1" scope="col">Data</th>
                    <th class="text-left1" scope="col">Status</th>
                    <th class="text-left1" scope="col">Erro</th>
                    <th class="text-left1" scope="col">Cloud</th>
                </tr>
                <tr>
                    <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>local1</b></td>
                    <td class="text-left"><center>16/02/2023</center></td>
                    <td style="white-space: nowrap;" class="text-left" bgcolor="#32CD32" ><center>OK</center></td>
                    <td class="text-left"><center><a href="erro.php?Cliente='.$cliente[0].'&Praca='.$cliente[$i].'&Erro=Erro_Vegas.log" target="_blank">View</a></center></td>
                    <td class="text-left"><center><a href="'.$link_sugarsync[$i].'" target="_blank">Link</a></center></td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>local2</b></td>
                    <td class="text-left"><center>16/02/2023</center></td>
                    <td style="white-space: nowrap;" class="text-left" bgcolor="#32CD32" ><center>OK</center></td>
                    <td class="text-left"><center><a href="erro.php?Cliente='.$cliente[0].'&Praca='.$cliente[$i].'&Erro=Erro_Vegas.log" target="_blank">View</a></center></td>
                    <td class="text-left"><center><a href="'.$link_sugarsync[$i].'" target="_blank">Link</a></center></td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>local3</b></td>
                    <td class="text-left"><center>16/02/2023</center></td>
                    <td style="white-space: nowrap;" class="text-left" bgcolor="#FF0000" ><center>Não OK</center></td>
                    <td class="text-left"><center><a href="erro.php?Cliente='.$cliente[0].'&Praca='.$cliente[$i].'&Erro=Erro_Vegas.log" target="_blank">View</a></center></td>
                    <td class="text-left"><center><a href="'.$link_sugarsync[$i].'" target="_blank">Link</a></center></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>