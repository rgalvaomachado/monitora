
<?php include_once('public/view/admin/menu.php') ?>
<div id="content">
    <div class="table-responsive">
        Backups
        <table class="table-fill table">
            <tr>
                <th class="text-left1" scope="col">Nome</th>
                <th class="text-left1" scope="col">Local</th>
                <th class="text-left1" scope="col">Data</th>
                <th class="text-left1" scope="col">Status</th>
                <th class="text-left1" scope="col">Erro</th>
                <th class="text-left1" scope="col">Cloud</th>
            </tr>
            <tr>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>Backup 1</b></td>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>Cliente 1</b></td>
                <td class="text-left"><center>16/02/2023</center></td>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#FF0000" ><center>Não OK</center></td>
                <td class="text-left"><center><a href="erro.php?Cliente='.$cliente[0].'&Praca='.$cliente[$i].'&Erro=Erro_Vegas.log" target="_blank">View</a></center></td>
                <td class="text-left"><center><a href="'.$link_sugarsync[$i].'" target="_blank">Link</a></center></td>
            </tr>
            <tr>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>Backup 2</b></td>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>Cliente 1</b></td>
                <td class="text-left"><center>16/02/2023</center></td>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#32CD32" ><center>OK</center></td>
                <td class="text-left"><center><a href="erro.php?Cliente='.$cliente[0].'&Praca='.$cliente[$i].'&Erro=Erro_Vegas.log" target="_blank">View</a></center></td>
                <td class="text-left"><center><a href="'.$link_sugarsync[$i].'" target="_blank">Link</a></center></td>
            </tr>
            <tr>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>Backup 1</b></td>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>Cliente 2</b></td>
                <td class="text-left"><center>16/02/2023</center></td>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#32CD32" ><center>OK</center></td>
                <td class="text-left"><center><a href="erro.php?Cliente='.$cliente[0].'&Praca='.$cliente[$i].'&Erro=Erro_Vegas.log" target="_blank">View</a></center></td>
                <td class="text-left"><center><a href="'.$link_sugarsync[$i].'" target="_blank">Link</a></center></td>
            </tr>
        </table>
    </div>
    <br>
    <div class="table-responsive">
        Maquinas 
        <table class="table-fill table">
            <tr>
                <th class="text-left1" scope="col">Nome</th>
                <th class="text-left1" scope="col">Local</th>
                <th class="text-left1" scope="col">Data</th>
                <th class="text-left1" scope="col">Status</th>
            </tr>
            <tr>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>Maquina 1</b></td>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>Cliente 1</b></td>
                <td class="text-left"><center>16/02/2023</center></td>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#32CD32" ><center>OK</center></td>
            </tr>
        </table>
    </div>
    <br>
    <div class="table-responsive">
        Internet 
        <table class="table-fill table">
            <tr>
                <th class="text-left1" scope="col">Local</th>
                <th class="text-left1" scope="col">Data</th>
                <th class="text-left1" scope="col">Status</th>
            </tr>
            <tr>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>Internet 1</b></td>
                <td class="text-left"><center>16/02/2023</center></td>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#32CD32" ><center>OK</center></td>
            </tr>
            <tr>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>Internet 2</b></td>
                <td class="text-left"><center>16/02/2023</center></td>
                <td style="white-space: nowrap;" class="text-left" bgcolor="#32CD32" ><center>OK</center></td>
            </tr>
        </table>
    </div>
    <?php
        $host =   "www.hubis.com";
        exec("ping -n 1 -w 1 " . $host, $output, $result);
        if ($result == 0) {
            echo "$host up";
        } else {
            echo "$host down";
        }
    ?>
</div>