<?php
    include_once('email.php');

    class MonitoraInternet {
        private $host = "www.hubiaas.com";

        function monitorar(){
            exec("ping -n 1 -w 1 " . $this->host, $output, $result);
            if ($result != 0) {
                $html = '';
                $html .= '<label>Monitora Hubis Alerta!!</label>';
                $html .= '<br><br><br>';
                $html .= '<label>Internet '.$this->host.' Off</label>';
                $Email = new Email;
                $Email->envioEmail($html);
            }else{
                $html = '';
                $html .= '<label>Monitora Hubis</label>';
                $html .= '<br><br><br>';
                $html .= '<label>Internet '.$this->host.' On</label>';
                $Email = new Email;
                $Email->envioEmail($html);
            }
        }
    }
?>
            

            D:\WebServer\projects\monitora.hubis\src\controller\monitoraInternet.php