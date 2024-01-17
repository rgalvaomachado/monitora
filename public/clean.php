<?php 
    unlink('uploads/'.$_GET['img']);
    header("location: index.html");
?>