
<?php 
session_start();
echo "<script type='text/javascript'>alert('PRUEBA');</script>";

$supportedLangs = array('en', 'es', 'pr');
$languages = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);

$message = "nada";
 
foreach($languages as $lang)
{
    if(in_array($lang, $supportedLangs))
    {
        $_SESSION['local']= $lang;
        $message = $lang; 
        break;
    }
}

if ($_GET['local']) { 
	$_SESSION['local']=$_GET['local']; 
	$message = "otro " + $_GET['local'];
}
echo "<script type='text/javascript'>alert('$message');</script>";

// incluimos el idioma con las definiciones 
include("idiomas".$_SESSION['local'].".php"); 
?> 