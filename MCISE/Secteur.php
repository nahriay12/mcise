<?php
	session_start();
	if(!isset($_SESSION["unser"]))
	{
		echo $_SESSION["unser"];
		header('location: Page_Log.php');
	}
	include('php/Secteur.php');
	$modif=false;
	$ids="";
	$nom="";
	$filter="";
	if(isset($_GET['edit'])){
		$ids=$_GET['edit'];
		$sec=$fonction->Show('secteur',$ids,'Id_S');
		$nom=$sec->Nom;
		$filter=$sec->filter;
		$modif=true;
	}
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de">  <!--<![endif]-->
<head>

	<!-- META DATA -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="UTF-8">
	<title>Jarvis - One Page Parallax Template</title>
    <meta name="description" content="A Template by RocknRolla Designs"/>
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP"/>
    <meta name="author" content="RocknRolla Designs"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- GOOGLE WEB FONTS INCLUDE -->
	<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans:400,600' rel='stylesheet' type='text/css'>
	
	<!-- JARVIS THEME STYLESHEETS -->
     
	<link rel="stylesheet" href="css/skeleton.css" type="text/css">
	<link rel="stylesheet" href="css/reset.css" type="text/css">    
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/social.css" type="text/css">             
	<link rel="stylesheet" href="css/flexslider.css" type="text/css">	
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/><!-- PrettyPhoto -->	
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css"/><!-- PrettyPhoto -->    
	<link rel="stylesheet" href="css/shortcodes.css" type="text/css"/> 	
	<link rel="stylesheet" href="css/media.css"><!-- Media Queries -->         
    
 	<link rel="stylesheet" href="files/themes_panel/themes_panel.css"><!-- Theme Panel -->      
    
    <link id="layout_color" href="css/light.css" rel="stylesheet" type="text/css"/>  
    <link id="primary_color_scheme" href="css/colors/yellow.css" rel="stylesheet" type="text/css"/>   
       
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
		   
    
</head>

<body class="onepage">
 <div id="load"></div>
 

    	
    
    <!-- START PAGE WRAP -->    
    <div class="page-wrap">
	
    <!-- START NAVIGATION -->
    <nav class="light">
     <!-- START CONTAINER -->	
      <div class="container clearfix">			
          <div class="four columns">			
              <!-- START LOGO -->	
              <div class="logo large">
               <a href="#home"><img src="images/logo.png" title="logo" alt="Logo"/></a>
              </div>
              <!-- END LOGO -->			
          </div><!-- END FOUR COLUMNS -->   
          
                   
          <div class="twelve columns">            		
              <!-- START NAVIGATION MENU ITEMS -->
              <ul class="main-menu large" id="nav" >
                  <li><a href="index.php">Home</a></li>
                  <li><a href="Secteur.php">Secteurs</a></li>              
                  <li><a href="Organisme.php">Organismes</a></li>
              </ul>
              <!-- END NAVIGATION MENU ITEMS -->				
          </div><!-- END TWELVE COLUMNS -->	
      </div><!-- END CONTAINER -->	
    </nav>
    <!-- END NAVIGATION -->
	</div><!-- END CONTAINER -->
		<div id="portfolio" class="page">
			<div class="container">
			<div class="title">
				<h1>Secteurs</h1>
			</div>
			<form method="post" action="">
				<div classe="class="input-group"">
				<input type="hidden" name="id" value="<?php echo $ids; ?>">
					<div class="input-group2">
						<input type="text" name="nom" placeholder="Nom" value="<?php echo $nom; ?>" required>
						<input type="text" name="filter" placeholder="Filter" value="<?php echo $filter; ?>" required>
					</div>
					<div class="title">
						<?php if ($modif == false): ?>
							<button type="submit" name="save" class="btn">Ajouter</button>
						<?php else: ?>
							<button type="submit" name="update" class="btn" onclick="if(window.confirm('Voulez-vous vraiment modifier ?')){return true;}else{return false;}">Modifier</button>
							<button type="submit" name="cancel" class="btn">Annuler</button>
						<?php endif ?>
					</div>
				</div>
			</form>
		  </div>
		  <div style="overflow-x:auto;">
				<table>
					<thead>
						<tr>
							<th><strong>Secteur d'activité</strong></th>
							<th><strong>Filtre</strong></th>
							<th colspan="2"> <strong>Actions</strong></th>
							
						</tr>
					</thead>
					<tbody>
						<?php foreach($secteur as $secteurs){?>
							<tr>
								<td><?php echo $secteurs->Nom;?></td>
								<td><?php echo $secteurs->filter;?></td>
								<td>
									<a class="edit_bnt" href="Secteur.php?edit=<?php echo $secteurs->Id_S; ?>">Modifier</a>
								</td>
								<td>
									<a class="del_bnt" href="php/Secteur.php?del=<?php echo $secteurs->Id_S; ?>" onclick="if(window.confirm('Voulez-vous vraiment supprimer ?')){return true;}else{return false;}">Suprimer</a>
								</td>
							</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>	
      <!-- START COPYRIGHT SECTION -->   	
	  <div id="contact" class="page">
      <div class="copyright">
     <div class="container clearfix">
        <div class="sixteen columns">   
			<div class="copyright-logo"><a href="#"><img src="images/logo2.png" title="logo" alt="logo"/></a></div>   
           <div class="social-icons">
              <div class="social-icon social-facebook"><a href="https://www.facebook.com/MoroccanCise/" target="_blank" data-original-title="Facebook">Facebook</a></div>
              <div class="social-icon social-youtube"><a href="https://www.youtube.com/user/MoroccanCISE" target="_blank" data-original-title="Flickr">Youtube</a></div>
              <div class="social-icon social-twitter"><a href="https://twitter.com/moroccancise" target="_blank" data-original-title="Forrst">Twitter</a></div>
           </div>
			<p>2017 : <i class="icon-heart"></i> by <a href="https://www.facebook.com/Mido.Nahri"> NAHRI Ayoub</a></p>
            
         </div> <!-- END SIXTEEN COLUMNS -->        
	  </div><!-- END CONTAINER -->
     </div>
     <!-- END COPYRIGHT SECTION -->	 
      
	</div>
    <!-- END CONTACT SECTION -->		
	
	
   </div><!-- END PAGE WRAP -->
   

          

	<!-- JARVIS THEME SCRIPTS -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>  
    <script type="text/javascript" src="js/jquery.queryloader2.js"></script>        
    <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>  
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>  
    <script type="text/javascript" src="js/jquery.appear.js"></script>  
    <script type="text/javascript" src="js/jquery.slabtext.min.js"></script>   
    <script type="text/javascript" src="js/jquery.fittext.js"></script>   
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.sticky.js"></script>
	<script type="text/javascript" src="js/selectnav.min.js"></script>    
    <script type="text/javascript" src="js/SmoothScroll.js"></script>   
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>    
    <script type="text/javascript" src="js/isotope.js"></script>   
    <script type="text/javascript" src="js/bootstrap-modal.js"></script>   
    <script type="text/javascript" src="js/shortcodes.js"></script>        
	<script type="text/javascript" src="js/scripts.js"></script>               
    <script src="https://api.twitter.com/1/statuses/user_timeline/envato.json?callback=twitterCall&amp;count=4"></script>              
    <!-- Themes Panel -->
    <script src="files/themes_panel/themes_panel.js"></script>
    <!-- /Themes Panel -->                
	
</body>

</html>
