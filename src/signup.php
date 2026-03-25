<?php
    include('../congif/database.php');
    // get data
    $f_name = $_Post ['fname'];
    $l_name = $_Post ['lname'];
    $e_mail = $_Post ['email'];
    $m_phone = $_Post ['mphone'];
    $p_sswd = $_Post ['passwd'];
    $enc_pass= md5($p_sswd);
    //Query to insert to SQL
    $sql = "Insert  Into users (Fisrtnanem,lastname,email,mobilephone,password)
            values ('$f_name','$l_name','$e_mail',$m_phone,'$p_sswd')";

    //Excute query
    pg_query($sql);