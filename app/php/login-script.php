<?php 

$user = 'admin';
$senha = '12345';

if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {

    if ($_POST['username'] == $user && $_POST['password'] == $senha) {

    echo json_encode(array('success' => 1));
    }
} else {

    echo json_encode(array('success' => 0));

}


