 <!--<?php 
 if (isset($_SESSION['local']))
	$language = $_SESSION['local'];
 else 
	$language = "es";
 ?>-->
<?php 
	$language = $_SESSION['local'];
?> 

<section id="slideshow-section" class="sliderblue">
	<div class="banner-container" >
		<div class="banner-princ-1" >
		</div>
		<div class="banner-princ-2" >
		</div>
		<div class="us_2">
	    	<h1><img src="images/BlueBoot.png" style="position:relative; width:100%; "></h1>
	        <p><?php echo $text['texto-box'];?></p>
	        <img src="images/SAP_Partner_R.png" class="img-partner-banner">
	    </div>
	</div>	
	<!--<div id="slideshow" class="slideshow-banner">-->
	  <!--<div><img class="sli" src="images/slider/<?php echo $language?>/1.jpg" style="min-height:400px;" /></div>
	  <div><img class="sli" src="images/slider/<?php echo $language?>/2.jpg" style="min-height:400px;" /></div>
	  <div><img class="sli" src="images/slider/<?php echo $language?>/3.jpg" style="min-height:400px;" /></div>
	  <div><img class="sli" src="images/slider/<?php echo $language?>/4.jpg" style="min-height:400px;" /></div>
	  <div><img class="sli" src="images/slider/<?php echo $language?>/5.jpg" style="min-height:400px;" /></div>-->
	<!--</div>
	<div class="prev-nexit"> <span class="previ"><a href="#"><i class="icon-chevron-sign-left min"></i></a></span><span class="nexti"><a href="#"><i class="icon-chevron-sign-right min"></i></a></span> </div>-->
	<section id="tecnologias-section" class="section">
	<div style="width: 100%; float: left; min-height:300px; margin-bottom:30px;">
		<a class="go-to-section" href="#sap-section">
		<div style="width:33.333%; float:left; min-height:300px; min-width:200px">
			<div style="margin-top: 30px; padding-left:0%; width:200px; margin-left:auto; margin-right:auto;">
				<img src="images/SapStore.png" width="200px;" height="115px" />
				<div class="title_wrapper" style="width:200px">
					<h3>
						<span><?php echo $text['sapfiori-tit'];?></span>
					</h3>
				</div>
				<p class="text-center" style="margin-left:0 !important"><?php echo $text['sapfiori-text'];?></p>
			</div>
		</div>
		</a>
		<a class="go-to-section" href="#integration-section">
		<div style="width:33.333%; float:left; min-height:300px; min-width:200px">
			<div style="margin-top: 30px; padding-left:0%; width:200px; margin-left:auto; margin-right:auto;">
				<img src="images/sapApps.png" width="200px;" height="115px" class="sapappsclass" />
				<div class="title_wrapper" style="width:200px">
					<h3>
						<span><?php echo $text['sapapps-tit'];?></span>
					</h3>
				</div>
				<p class="text-center" style="margin-left:0 !important"><?php echo $text['sapapps-text'];?></p>
			</div>
		</div>
		</a>
		<a class="go-to-section" href="#sharepoint-section">
		<div style="width:33.333%; float:left; min-height:300px; min-width:200px">
			<div style="margin-top: 30px; padding-left:0%; width:200px; margin-left:auto; margin-right:auto;">
				<img src="images/micro_2.png" width="200px;" height="115px" />
				<div class="title_wrapper" style="width:200px">
					<h3>
						<span><?php echo $text['sharepoint-tit'];?></span>
					</h3>
				</div>
				<p class="text-center" style="margin-left:0 !important"><?php echo $text['sharepoint-text'];?></p>
			</div>
		</div>
		</a>
	</div>
	</section>
	</div>
</section>         	
