<div class="table-responsive">
    <table class="table-fill table">
        <tr>
            <th class="text-left1" scope="col">Local</th>
            <th class="text-left1" scope="col">Data Vegas</th>
            <th class="text-left1" scope="col">Vegas</th>
            <th class="text-left1" scope="col">Erro</th>
            <th class="text-left1" scope="col">SugarSync</th>
        </tr>
<?php
//Checagem de Vegas
for ($i=1; $i<count($cliente); $i++){
    $arquivo = file("Files\\$cliente[0]/$cliente[$i]/NumTabelas_Vegas.txt");
    foreach($arquivo as $chave => $frase){
                if ($chave == 1){
                    $data_arquivo = $frase;
                }
                if ($chave == 3){
                    $anterior = $frase;
                    $anterior = intval($anterior);
                }
                if ($chave == 5){
                    $backup = $frase;
                    $backup = intval($backup);
                }
    }
    if ($anterior==$backup){
        if ($backup!=0){
            if($data_bkp==$data_arquivo){
                $status_myyork[$i]='OK';
                $cor_myyork[$i]='#32CD32';
                $dia_myyork[$i]=$data_arquivo;
            }
            else{
                $status_myyork[$i]='Não OK';
                $cor_myyork[$i]='#FF0000';
                $dia_myyork[$i]=$data_arquivo;  
            }
        }
        else {
            $status_myyork[$i]='Não OK';
            $cor_myyork[$i]='#FF0000';
            $dia_myyork[$i]=$data_arquivo;  
        }
    }
    else{
        $status_myyork[$i]='Não OK';
        $cor_myyork[$i]='#FF0000';
        $dia_myyork[$i]=$data_arquivo; 
    }
    echo'
        <tr>
            <td style="white-space: nowrap;" class="text-left" bgcolor="#D5DDE5" ><b>'.$cliente[$i].'</b></td>
            <td class="text-left"><center>'.$dia_myyork[$i].'</center></td>
            <td style="white-space: nowrap;" class="text-left" bgcolor="'.$cor_myyork[$i].'" ><center>'.$status_myyork[$i].'</center></td>
            <td class="text-left"><center><a href="erro.php?Cliente='.$cliente[0].'&Praca='.$cliente[$i].'&Erro=Erro_Vegas.log" target="_blank">View</a></center></td>
            <td class="text-left"><center><a href="'.$link_sugarsync[$i].'" target="_blank">Link</a></center></td>
		</tr>
    ';
}
?>
    </table>
</div>