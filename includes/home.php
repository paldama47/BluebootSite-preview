<style>
  @media (min-width: 769px) {
    #sapBuildDiagram {
      display: block;
    }
  }

  @media (max-width: 768px) {
    #sapBuildDiagram {
      display: none;
    }
  }
  @media (min-width: 769px) {
    #jouleScreen {
      display: block;
    }
  }

  @media (max-width: 768px) {
    #jouleScreen {
      display: none;
    }
  }
  @media (min-width: 769px) {
    #contactFormDiv {
      display: block;
    }
  }

  @media (max-width: 768px) {
    #contactFormDiv {
      display: none;
    }
  }
</style>

<section class="home clearfix">

<div class="full-content">  	 

	<div class="clients clearfix"> 

	<!-- Email Success -->
	<button id="button-success" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-success" style="display:none">Small modal</button>
	<div class="modal fade bs-success">
	  <div class="modal-dialog">
	        <div class="alert alert-success">
		        <a href="#" onclick="$('.modal-backdrop').hide();" class="close" data-dismiss="alert">&times;</a>
		        <strong>Success!</strong> Your message has been sent successfully.
		    </div>
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- Email Error -->
	<button id="button-error" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-error" style="display:none">Small modal</button>
	<div class="modal fade bs-error">
	  <div class="modal-dialog">
	        <div class="alert alert-danger alert-error">
		        <a href="#" onclick="$('.modal-backdrop').hide();" class="close" data-dismiss="alert">&times;</a>
		        <strong>Error!</strong> A problem has been occurred while submitting your data.
		    </div>
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<section style="float:left; margin-bottom:15px; width:100%">
		<div style="top:15px; width:100%">
			<div class="clients clearfix"> 
				<section id="integration-section" class="section">
				<h2 class="integracion-2"><?php echo $text['sapapps-tit'];?></h2>
				<div id="divbanner2" style="float:left;overflow:hidden; width:100%;">
					<img id="banner2" class="sli" src="images/slider/<?php echo $language?>/3.jpg" />
				</div>
				<div style="width:98%; margin-left:auto; margin-rigth:auto">
					<div class="div-integration-section div-integration-section-width-1">
						<div style="width:98%;float: left;">
							<h3 class="text-left"><?php echo $text['sapapps-h3-1'];?></h3>
						</div>
						<table style="width:100%">
							<tr>
								<td>
									<img src="images/sapApps2.png" style="width:80%; margin-top:50px; margin-bottom:50px"/>
								</td>
								<td style="vertical-align:middle; width:50%; padding-left:50px">
									<ul style="font-family:'BentonSans-Light'; font-size:16px; padding-right:10%"> 
										<li style="font-size:16px"><i class="icon-ok"></i><span>System Integration</span></li>
										<li style="margin-top:10px; font-size:16px"><i class="icon-ok"></i><span>App Dev</span></li>
										<li style="margin-top:10px; font-size:16px"><i class="icon-ok"></i><span>Process Automation</span></li>
										<li style="margin-top:10px; font-size:16px"><i class="icon-ok"></i><span>Data & Analytics</span></li>
										<li style="margin-top:10px; font-size:16px"><i class="icon-ok"></i><span>Artificial Intelligence</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
					<diV style="float:left; width:1%; height:280px; margin-top:100px; padding-left:1%" class="div-border-right div-border-section-2"></diV>
					<div class="div-integration-section div-integration-section-width-3">	
						<h3 class="text-left"><?php echo $text['sapapps-h3-2'];?></h3>
						<div style="width:100%; float:left; height:275px;">
							<div style="float:left; width:45%; height:100%;">
								<a target="_blank" href="https://blueboot.com/Resources/BlueBoot%20-%20Future-Ready%20Enterprise%20Activities.pdf"><img src="images/fre_maturity.png" style="width:160%; padding-left:120px; margin-top:50px; margin-bottom:50px"/></a>
							</div>						
						</div>
					</div>
				</div>
			</section>
			</div>
			<div class="clients clearfix"> 
			<section id="sap-section" class="section">
				<h2 class="sap-2">SAP Build</h2>
				<div id="divbanner1" style="float:left;overflow:hidden; width:100%;">
					<img id="banner1" class="sli fiorioffice365" src="images/slider/<?php echo $language?>/FIoriforOffice365.jpg" />
				</div>
				<div style="width:98%; margin-left:auto; margin-rigth:auto">
					<div style="width:98%; margin-left:auto; margin-rigth:auto">
						<table>
							<tr>
								<td>
									<div id="sapBuildDiagram">
										<img src="images/build.png" style="width:90%; margin-top:50px; margin-bottom:50px"/>
									</div>
								</td>
								<td style="vertical-align:middle">
									<ul style="font-family:'BentonSans-Light'; font-size:16px; padding-right:50px; margin-top:50px; margin-bottom:50px"> 
										<li style="display:table;"><img style="padding-right: 10px; display: table-cell; vertical-align: middle;width:50px" src="images/build_apps.PNG"><span style="display:table-cell;vertical-align:middle;"><?php echo $text['sapstore-link-A'];?></span></li>
										<li style="display:table; margin-top:10px"><img style="padding-right: 10px; display: table-cell; vertical-align: middle;width:50px" src="images/build_pa.png"><span style="display:table-cell;vertical-align:middle;"><?php echo $text['sapstore-link-B'];?></span></li>
										<li style="display:table; margin-top:10px"><img style="padding-right: 10px; display: table-cell; vertical-align: middle;width:50px" src="images/build_wz.png"><span style="display:table-cell;vertical-align:middle;"><?php echo $text['sapstore-link-C'];?></span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</section>
			</div>
			<div class="clients clearfix"> 
			<section id="sharepoint-section" class="section">
			<h2 class="sharepoint-2"><?php echo $text['o365forsap-tit'];?></h2>
			<div id="divbanner3" style="float:left;overflow:hidden; width:100%;">
				<img id="banner3" class="sli" src="images/slider/<?php echo $language?>/1.jpg" />
			</div>
			<div style="width:98%; margin-left:auto; margin-rigth:auto">
				<div style="width:98%; margin-left:auto; margin-rigth:auto">
					<table>
						<tr>
							<td id="jouleScreen">
								<div>
									<img src="images/joule.png" style="width:80%; margin-top:50px; margin-bottom:50px"/>
								</div>
							</td>
							<td style="vertical-align:middle; width:50%; padding-left:50px">
								<table style="width:100%">
									<tr>
										<td>
											<ul style="font-family:'BentonSans-Light'; font-size:16px; padding-right:50px; margin-top:50px; margin-bottom:50px"> 
												<li><i class="icon-ok"></i><span><?php echo $text['sap1'];?></span></li>
												<li style="margin-top:10px"><i class="icon-ok"></i><span><?php echo $text['sap2'];?></span></li>
												<li style="margin-top:10px"><i class="icon-ok"></i><span><?php echo $text['sap3'];?></span></li>
												<li style="margin-top:10px"><i class="icon-ok"></i><span><?php echo $text['sap4'];?></span></li>
												<li style="margin-top:10px"><i class="icon-ok"></i><span><?php echo $text['sap5'];?></span></li>
												<li style="margin-top:10px"><i class="icon-ok"></i><span><?php echo $text['sap6'];?></span></li>
											</ul>
										</td>
										<td>
											<ul style="font-family:'BentonSans-Light'; font-size:16px; padding-right:50px; margin-top:50px; margin-bottom:50px">  
												<li><i class="icon-ok"></i><span><?php echo $text['sap7'];?></span></li>
												<li style="margin-top:10px"><i class="icon-ok"></i><span><?php echo $text['sap8'];?></span></li>
												<li style="margin-top:10px"><i class="icon-ok"></i><span><?php echo $text['sap9'];?></span></li>
												<li style="margin-top:10px"><i class="icon-ok"></i><span><?php echo $text['sap10'];?></span></li>    
												<li style="margin-top:10px"><i class="icon-ok"></i><span><?php echo $text['sap11'];?></span></li>
												<li style="margin-top:10px"><i class="icon-ok"></i><span><?php echo $text['sap12'];?></span></li>
											</ul>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
			</section>
		</div>      	       
	</section>
	<section id="casos" class="section">
	</section>
	<section id="casos-section" class="section">
		<div style="width:100%; float:left">
			<h2 class="casos-destacados-2"><?php echo $text['CASOS DESTACADOS'];?></h2>
			   
			<div class="clearout"></div>      

		<div style="float: left; width: 100%;">
			<div style="float:left; width:100%">									
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Aramco.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Aramco</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoAramco'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Mercedes.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Mercedes Benz</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoMercedes'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Pfizer.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Pfizer, Inc.</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoPfizer'];?></p>
				</div>

				<!-- EMPRESAS AGREGADAS -->
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/AMD.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">AMD</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoAMD'];?></p>
				</div>	

				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Moderna.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Moderna</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoModerna'];?></p>
				</div>

				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/BakerHughes.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Baker Hughes</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoBakerHughes'];?></p>
				</div>

				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/BBG.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Breakthru Beverage</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoBBG'];?></p>
				</div>

				<!-- -------------------- -->

				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Owens.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Owens Illinois</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoOwens'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Invista.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Invista</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoInvista'];?></p>
				</div>	
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/BMS.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Bristol Myers Squibb</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoBMS'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Merck.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Merck Group</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoMerck'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Sothebys.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Sotheby’s</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoSothebys'];?></p>
				</div>				
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/CN.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Canadian National Railway</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoCN'];?></p>
				</div>				
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/AmericanSugar.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">American Sugar</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoAmericanSugar'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/JBS.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">JBS USA</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoJBS'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Nissan.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Nissan</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoNissan'];?></p>
				</div>	

				<!-- NUEVOS -->
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Mannington.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Mannington Mills</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoMannington'];?></p>
				</div>

				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Chisholm.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Chisholm</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoChisholm'];?></p>
				</div>
				<!-- ------------- -->

				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Mohawk.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Mohawk Industries</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoMohawk'];?></p>
				</div>	
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/GP.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Georgia-Pacific</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoGP'];?></p>
				</div>	
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/NPPD.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">State of Nebraska</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoNPPD'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Ascend.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Ascend Performance Materials</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoAscend'];?></p>
				</div>
<!-- <				<div class="div-casos">">
					<div style="width:100%;float: left;">
						<img src="images/casos/Dupont.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Dupont</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoDupont'];?></p>
				</div> -->
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Lyondell.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">LyondellBasell</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoLyondell'];?></p>
				</div>	
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/ET.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Energy Transfer</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoET'];?></p>
				</div>				
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Infinera.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Infinera</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoInfinera'];?></p>
				</div>
				<!-- <div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/OwensCorning.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Owens Corning</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoOwensCorning'];?></p>
				</div> -->
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Cascades.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Cascades</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoCascades'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Echostar.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Echostar</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoEchostar'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Molex.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Molex</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoMolex'];?></p>
				</div>	
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/SaskPower.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">SaskPower</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoSaskPower'];?></p>
				</div>											
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Femsa.png" class="circle-image image-center" />
					</div>			
					<div style="width:100%;float: left;">
						<h3 class="text-casos">The Coca-Cola Company</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoFemsa'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Finning.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Finning - CAT</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoFinning'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/CVS.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">CVS Pharmacy</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoCVS'];?></p>
				</div>				
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Baillie.png" class="circle-image image-center" />
					</div>			
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Baillie Lumber</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoBaillie'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Simpson.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Simpson Strong-Tie</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoSimpson'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Lycra.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">The Lycra Company</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoLycra'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/KornFerry.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Korn Ferry</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoKornFerry'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/FBM.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Foundation Building Materials</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoFBM'];?></p>
				</div>			
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Vishay.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Vishay</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoVishay'];?></p>
				</div>	
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Tacoma.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">City of Tacoma</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoTacoma'];?></p>
				</div>	
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Hilcorp.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Hilcorp</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoHilcorp'];?></p>
				</div>	
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Shutterfly.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Shutterfly</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoShutterfly'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Yeti.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Yeti</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoYeti'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Braskem.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Braskem</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoBraskem'];?></p>
				</div>						
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Compass_Group.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Compass Group</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoCompass_Group'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/CommScope.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Commscope</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoCommScope'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Isola.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Isola Group</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoIsola'];?></p>
				</div>				
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Nvidia.png" class="circle-image image-center" />
					</div>			
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Nvidia</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoNvidia'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Lhoist.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Lhoist</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoLhoist'];?></p>
				</div>						
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Latam.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">LATAM Airlines</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoLatam'];?></p>
				</div>	
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Petrobras.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Petrobras</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoPetrobras'];?></p>
				</div>					
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Vitro.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Vitro</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoVitro'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/AntofagastaMinerals.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Antofagasta Minerals</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoAntofagastaMinerals'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Elementia.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Elementia</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoElementia'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Araucologo.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Arauco</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoArauco'];?></p>
				</div>			
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Codelco.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Codelco</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoCodelco'];?></p>
				</div>				
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/CMPC.png" class="circle-image image-center" />
					</div>			
					<div style="width:100%;float: left;">
						<h3 class="text-casos">CMPC Tissue</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoCMPC'];?></p>
				</div>											
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Cap-logo.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">CAP / CMP</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoCAP'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/GrupoKuo.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Grupo Kuo</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoGrupoKuo'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/ENAP.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">ENAP</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoENAP'];?></p>
				</div>	
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Cencosud.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Cencosud</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoCencosud'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Tec.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Monterrey Institute of Technology</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoTec'];?></p>
				</div>				
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Cyt-logo.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Concha y Toro</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoCyt'];?></p>
				</div>												
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/SMU.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">SMU</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoSMU'];?></p>
				</div>																				
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Iansa.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">IANSA</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoIansa'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/MallPlaza.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Mall Plaza</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoMallPlaza'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/CCU.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">CCU</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoCCU'];?></p>
				</div>															
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Carozzi.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Carozzi</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoCarozzi'];?></p>
				</div>
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Agrosuper.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Agrosuper</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoAgrosuper'];?></p>
				</div>															
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Colbun.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Colbún</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoColbun'];?></p>
				</div>										
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/metrogas-logo.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Metrogas / CGE</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoCGE'];?></p>
				</div>						
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Enaex.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Enaex</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoEnaex'];?></p>
				</div>						
				<div class="div-casos">
					<div style="width:100%;float: left;">
						<img src="images/casos/Jumex.png" class="circle-image image-center" />
					</div>
					<div style="width:100%;float: left;">
						<h3 class="text-casos">Jumex</h3>
					</div>
					<p class="text-casos"><?php echo $text['casoJumex'];?></p>
				</div>				
			</div>
			<div class="clearout"></div>   
			<ul id="flexiselDemo3">
				<li><img src="images/casos/transelec.png" /></li>
				<li><img src="images/casos/Derco.png" /></li>
				<li><img src="images/casos/Esval.png" /></li>
				<li><img src="images/casos/Essbio.png" /></li>
				<li><img src="images/casos/Polpaico.png" /></li>
				<li><img src="images/casos/kaufamnn.png" /></li>
				<li><img src="images/casos/Ultramar.png" /></li>				
				<li><img src="images/casos/Indumotora.png" /></li>				
				<li><img src="images/casos/achslogo.png" /></li> 
				<li><img src="images/casos/3.png" /></li>
				<li><img src="images/casos/logomlp.png" /></li>			    			    
				<li><img src="images/casos/CIAL.png" /></li>
				<li><img src="images/casos/Masisa.png" /></li>
				<li><img src="images/casos/Cempro.png" /></li>
				<li><img src="images/casos/Orizon.png" /></li>
				<li><img src="images/casos/SAAM.png" /></li>
				<li><img src="images/casos/Salfa.png" /></li>
				<li><img src="images/casos/montesdelplata.png" /></li>
				<li><img src="images/casos/Ancap.png" /></li>
				<li><img src="images/casos/Construmart.png" /></li>
			</ul> 
		</div>
	</section>
	<section id="contacto" class="section" style="height:49px;">
	</section>
	<section id="contacto-section" style="margin-bottom:15px;" class="section">
			<h2 class="contacto-2"><?php echo $text['menu3'];?></h2>
			<div class="clearout"></div>
			<div style="width:98%; margin-left:auto; margin-rigth:auto">
				<div style="width:98%; margin-left:auto; margin-rigth:auto">
					<div class="div-sap-section div-sap-section-width-1" style="display:revert">							
							<table style="margin:auto">
								<tr>
									<td>
										<h3 class="text-left" style="text-align:left"><?php echo $text['GetInTouch'];?></h3>
									</td>
								</tr>
								<tr style="height:30px"/>
								<tr>
									<td>
										<table>
											<tr>
												<td style="vertical-align:middle"><img src="images/quoteline.png"/></td>
												<td>
													<table style="margin:auto">
														<thead>
														  <tr>
															<td style="vertical-align:middle"><img src="images/email_icon.jpg"/></td>
															<td style="vertical-align:middle; font-weight:bold">GENERAL</td>
														  </tr>
														  <tr>
															<td></td>
															<td style="vertical-align:middle">info@blueboot.com</td>
														  </tr>
														  <tr style="height:30px"/>
														  <tr>
															<td style="vertical-align:middle"><img src="images/location_icon.png"/></td>
															<td style="vertical-align:middle; font-weight:bold"><?php echo $text['CompanyAddress'];?></td>
														  </tr>
														  <tr>
															<td></td>
															<td style="vertical-align:middle">BLUEBOOT BUSINESS SOFTWARE</td>
														  </tr>
														  <tr>
															<td></td>
															<td style="vertical-align:middle">610 E Zack St, 4th Floor</td>
														  </tr>
														  <tr>
															<td></td>
															<td style="vertical-align:middle">Tampa, FL 33602</td>
														  </tr>
														  <tr>
															<td></td>
															<td style="vertical-align:middle">USA</td>
														  </tr>
														</thead>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
					</div>
					<!-- línea divisoria -->
					<!--div style="float:left; width:1%; height:280px; margin-top:100px; margin-right:1%" class="div-border-right div-border-section-1"></div-->
					<!-- form contacto -->
					<div id="contactFormDiv" class="ctc">
						<form  form id="contact" class="contact_form" name="contactform" onsubmit="isCaptchaEmpty()" method="post" action="sendmail.php">
							<ul>

								<li>
									<label for="name"><?php echo $text['ctc-nombre'];?></label>
									<input tabindex="1" type="text" id="nombre" name="nombre" placeholder="<?php echo $text['ctc-nombre'];?>" required />
								</li>
								<li>
									<label for="mail">Email:</label>
									<input tabindex="2" type="email" id="email" name="email" placeholder="name@example.com" required   />
								</li>
								<li>
									<label for="phone"><?php echo $text['ctc-web'];?></label>
									<input tabindex="3" type="text" name="phone" placeholder="http://..." optional />
								</li>
								<li>
									<label for="message"><?php echo $text['ctc-msj'];?></label>
									<textarea tabindex="4"  id="message" name="mensaje" cols="40" rows="6" required ></textarea>
								</li>
								<li>
									<div style="margin-top: 8px;" class="g-recaptcha" data-sitekey="6LdnRHwUAAAAACusPvLn6mbW8Lg93MbZyAnGSX-d"></div>							
									<label id="captcha_err" style="font-size:10px; color:red; display:none">Please verify you are not a robot!</label>
							   </li>
								<li style="float:left">
									<script>
										function isCaptchaEmpty(e){
											debugger;
											e = e || event;
											if (grecaptcha.getResponse() == ""){
												$(".g-recaptcha >:first-child").css("border","2px red solid");
												e.preventDefault();
												$("#captcha_err").show();
											}
											else{
												$(".g-recaptcha >:first-child").css("border","")
												$("#captcha_err").hide();
											}
												
										}
									</script>
									<button  id="submit" class="submit" type="submit"><?php echo $text['send'];?></button>
								</li>
							</ul>
						</form>	
					</div>
				</div>
			</div>
		</section>
	</div>

	<img style="float:right; position:relative; right: 10px; top: 5px;" src="images/bboothor.png">
</div>		
</section>
