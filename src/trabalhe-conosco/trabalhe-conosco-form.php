<?php

$workWithUs = file_get_contents('trabalhe-conosco-form.html');
echo $workWithUs;

if(isset($_POST['submit-workWithUs'])){
    
    $db_username = 'grh';
    $db_userpassword = 'grh#';
    $server = 'SRVDESENV:1522/DBUNI199';
    $connection = oci_connect("$db_username","$db_userpassword","$server","AL32UTF8");

    if($connection){
        echo 'Serviço online. Continuando...';
    }
    else{
        echo 'Serviço offline. Por favor, tente novamente mais tarde.';
    }
} 

?>


