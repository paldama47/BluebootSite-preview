 

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
		<img src="images/logoHeader.png" height="42" alt="Blueboot" class="logoBB" onload="this.width*=0.9;this.height*=0.9;this.onload=null;"/>
	</a>
<nav>
  <ul id="menuBig" class="menuBig">
		<li><a href="#tecnologias-section" id="link-tecno"><i class="icon-check-sign"></i><?php echo $text['title-tec']; ?></a></li>
		<li><a href="#casos-section" id="link-casos"><i class="icon-check-sign"></i><?php echo $text['menu2']; ?></a></li>		
		<li><a href="#nosotros-section" id="link-home"><i class="icon-home"></i><?php echo $text['nosotros-tit'];?></a></li>
		<li><a href="#contacto-section"><i class="icon-envelope-alt"></i><?php echo $text['menu3'];?></a></li>
		<div class="dropdown btn-group">
      <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="brighter icon-flag"></i>
          <span class="brighter caret"></span>
      </a>
      <ul class="new-menu dropdown-menu">
          <li><a class="brighter" href="?local=es">español</a></li>
          <li><a class="brighter" href="?local=en">english</a></li>
  		    <li><a class="brighter" href="?local=pr">português</a></li>
      </ul>
    </div>           
           
	</ul>
  <div id="menuSmall" class="dropdown btn-group" style="display:none;">
      <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
          <img src="images/menu.png" style="margin-top: 0px; height: 22px; width: 22px;">
      </a>
      <ul class="new-menu dropdown-menu" style="width:200px !important; left: -150px;">
          <li class="menuSmall"><a href="#tecnologias-section" id="link-tecno"><i class="icon-check-sign"></i><?php echo $text['title-tec']; ?></a></li>
          <li class="menuSmall"><a href="#casos-section" id="link-casos"><i class="icon-check-sign"></i><?php echo $text['menu2']; ?></a></li>    
          <li class="menuSmall"><a href="#nosotros-section" id="link-home"><i class="icon-home"></i><?php echo $text['nosotros-tit'];?></a></li>
          <li class="menuSmall"><a href="#contacto-section"><i class="icon-envelope-alt"></i><?php echo $text['menu3'];?></a></li>
          <li style="margin: 10px 0;"><span><a class="brighter" href="?local=es">ES</a> | <a class="brighter" href="?local=en">EN</a> | <a class="brighter" href="?local=pr">PT</a></span></li>
      </ul>
  </div>
</nav>
</div>
</header>

