<?php
require_once 'config.php';
if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $check = $bdd->prepare('SELECT pseudo, email, password FROM dev WHERE email = ?');
$check->execute(array($email));
$data = $check->fetch();
$row = $check->rowCount();

if($row == 0)
{
if(strlen($pseudo) <= 100)
{
if(strlen($email) <= 100)
{
if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
if($password == $password_retype)
{
$password == hash('sha256', $password);
$_ip = $_SERVER['REMOTE_ADDR'];

$insert = $bdd->prepare('INSERT INTO dev(pseudo, email, password, ip) VALUES(:pseudo, :email, :password, :ip)');
$insert->execute(array(
'pseudo' => $pseudo,
'email' => $email,
'password' => $password,
'ip' => $ip
));
header('Location:inscription.php?reg_err=success');
}else header('Location: inscription.php?reg_err=password');
}else header('Location: inscription.php?reg_err=email');
}else header('Location: inscription.php?reg_err=email_length');
}else header('Location: inscription.php?reg_err=pseudo_length');
}else header('Location: inscription.php?reg_err=already');
}
?>