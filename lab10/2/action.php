<?php
    session_start();
    if($_POST['choice']==$_SESSION['ans']){
        $_SESSION['point']++;
    }
    $_SESSION['qid']++;

    if($_SESSION['qid']>10){
        $link= "<script> window.open('scores.php','_self'); </script>";
        echo $link;
    }
    else{
        $link= "<script> window.open('index.php','_self'); </script>";
        echo $link;
    }
    
?>
