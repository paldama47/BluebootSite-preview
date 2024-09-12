 

<?php
 
/* idioma existe tambien*/
 
if(!empty($_REQUEST['local']) && file_exists('lang/'.$_REQUEST['local'].'.php')){
 
  /*Entonces lo que vamos a hacer ahora, es decir que a partir de ahora,
  nuestro idioma por defecto es este, al menos que se solicite cambiarlo de vuelta*/
 
  $_SESSION['local'] = $_REQUEST['local'];
 
  //y esto lo vamos a usar despues
  $language = $_REQUEST['local'];
}
 
//Sino se solicito ningun idioma, verificamos si quedo guardado en nuestra session
 
elseif(isset($_SESSION['local']))
 
  //Lo mismo que antes, esto para despues
 
  $language = $_SESSION['local'];
 
//Y por ultimo, si nada de lo anterior cumple los requisitos, cargamos el idioma, que seria el idioma por defecto
 
else
  $language = 'en';

require_once('lang/'.$language.'.php');
 
?>

<header id="Header">
<div class="header-cont">
	<a href="#slideshow-section">
		<img src="images/logoBlueBootBlanco.png" height="42" alt="Blueboot" class="logoBB" />
	</a>
<nav>
  <ul id="menuBig" class="menuBig">
		<li><a href="#tecnologias" id="link-tecno"><i class="icon-check-sign"></i><?php echo $text['title-tec']; ?></a></li>
		<li><a href="#casos" id="link-casos"><i class="icon-check-sign"></i><?php echo $text['menu2']; ?></a></li>	
		<li><a href="#contacto"><i class="icon-envelope-alt"></i><?php echo $text['menu3'];?></a></li>
		<div class="dropdown btn-group">
      <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="brighter icon-flag"></i>
          <span class="brighter caret"></span>
      </a>
      <ul class="new-menu dropdown-menu">
          <li><a class="brighter" href="?local=es">español</a></li>
          <li><a class="brighter" href="?local=en">english</a></li>  		 
      </ul>
    </div>           
           
	</ul>
  <div id="menuSmall" class="dropdown btn-group">
      <a class="btn dropdown-toggle" data-toggle="dropdown" onclick="showHideMenu()" href="#">
          <img src="images/menu.png" style="margin-top: 0px; height: 22px; width: 22px;">
      </a>
      <ul class="new-menu dropdown-menu" style="width:100% !important; left: 0px !important; top:50px; margin:0 !important; position:fixed; border-radius: 0px !important;">
          <li class="menuSmall"><a href="#tecnologias-section" onclick="$('#menuSmall').removeClass('open');" id="link-tecno"><i class="icon-check-sign"></i><?php echo $text['title-tec']; ?></a></li>
          <li class="menuSmall"><a href="#casos-section" onclick="$('#menuSmall').removeClass('open');" id="link-casos"><i class="icon-check-sign"></i><?php echo $text['menu2']; ?></a></li>    
          <li class="menuSmall"><a href="#nosotros-section" onclick="$('#menuSmall').removeClass('open');" id="link-home"><i class="icon-home"></i><?php echo $text['nosotros-tit'];?></a></li>
          <li class="menuSmall"><a href="#contacto-section" onclick="$('#menuSmall').removeClass('open');"><i class="icon-envelope-alt"></i><?php echo $text['menu3'];?></a></li>
          <li style="margin: 10px 0;"><span><a class="brighter" href="?local=es" onclick="$('#menuSmall').removeClass('open');">ES</a> | <a class="brighter" href="?local=en" onclick="$('#menuSmall').removeClass('open');">EN</a><!-- | <a class="brighter" href="?local=pr" onclick="$('#menuSmall').removeClass('open');">PT</a>--></span></li>
      </ul>
  </div>
</nav>
</div>
</header>

