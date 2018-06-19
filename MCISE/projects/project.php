
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de">  <!--<![endif]-->
<head>

	<!-- META DATA -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="UTF-8">
	<title>Versi - One Page Parallax Template</title>
    <meta name="description" content="A Template by RocknRolla Designs"/>
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP"/>
    <meta name="author" content="RocknRolla Designs"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- GOOGLE WEB FONTS INCLUDE -->
	<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans:400,600' rel='stylesheet' type='text/css'>
	
	<!-- JARVIS THEME STYLESHEETS -->
     
	<link rel="stylesheet" href="../css/skeleton.css" type="text/css">
	<link rel="stylesheet" href="../css/reset.css" type="text/css">    
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="stylesheet" href="../css/social.css" type="text/css">             
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css">	
	<link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css" media="screen"/><!-- PrettyPhoto -->	
	<link rel="stylesheet" href="../css/font-awesome.css" type="text/css"/><!-- PrettyPhoto -->    	
	<link rel="stylesheet" href="../css/media.css"><!-- Media Queries -->	
    
       
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
		   
    
</head>

<body class="multipage">

    <!-- START NAVIGATION -->
    <nav class="light">
     <!-- START CONTAINER -->	
      <div class="container clearfix">			
          <div class="four columns">			
              <!-- START LOGO -->	
              <div class="logo large">
               <a href="#home"><img src="../images/logo.png" title="logo"/></a>
              </div>
              <!-- END LOGO -->			
          </div><!-- END FOUR COLUMNS -->   
          
                   
          <div class="twelve columns">            		
              <!-- START NAVIGATION MENU ITEMS -->
              <ul class="main-menu large iconic" id="nav">
                  <li><a href="../index.html#home"><i class="icon-home"></i>Home</a></li>                
                  <li><a href="../index.html#about"><i class="icon-thumbs-up"></i>About</a></li>
                  <li><a href="../index.html#team"><i class="icon-user"></i>Team</a></li>
                  <li><a href="../index.html#services"><i class="icon-cogs"></i>Services</a></li>
                  <li><a href="../index.html#portfolio"><i class="icon-picture"></i>Portfolio</a></li>
                  <li><a href="../index.html#contact"><i class="icon-envelope"></i>Contact</a></li>
              </ul>
              <!-- END NAVIGATION MENU ITEMS -->				
          </div><!-- END TWELVE COLUMNS -->	
      </div><!-- END CONTAINER -->	
    </nav>
    <!-- END NAVIGATION -->
	<?php 
			$id=$_GET['id'];
			$db=new PDO("mysql:host=localhost;dbname=cise_bd;charset=utf8",'root','');
			$req=$db->prepare('SELECT * from organisme where id_O='.$id);
			$req->execute();
			$data=$req->fetch();
			?>

    <!-- START PAGE WRAP -->    
    <div class="page-wrap">
    
    	<!-- START PROJECT-SINGLE -->	
	    <div class="page multipage">
	
		<div class="container">	
           <div class="row">	
			<div class="sixteen columns">            
	            <!-- START TITLE -->	            
				<div class="title">
				  <h1><?php echo $data['Nom']; ?></h1>
                </div><!-- END TITLE -->  	                           
			</div><!-- END SIXTEEN COLUMNS -->  
           </div><!-- END ROW -->         
          </div><!-- END CONTAINER -->
          
          
		<div class="container">	
           <div class="row">
             <div id="ajaxpage">
                <!-- START PROJECT MEDIA -->
               <div class="eleven columns"> 
                <div class="project-media">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="images/portfolio/<?php echo $data['Image']; ?>" alt="portfolio slider" />
                            </li>
                        </ul>
                  </div> 
                </div>  
               </div>
                <!-- END PROJECT MEDIA -->
                
               <div class="five columns"> 
                <!-- START PROJECT INFO --> 
                <div class="project-info">
                    <div class="project-description">
                      <h3>Description</h3>
                       <p>L<?php echo $data['Description']; ?></p>
                    </div>
                    
                    <div class="project-details">
                      <h3>Details</h3>
                      <p><span>Adresse</span>: <?php echo $data['Adresse'];?></p> 
                      <p><span>Email </span>: <?php echo $data['Email']; ?></p>
					  <p><span>Site web</span>: <a href="<?php echo $data['Site_Web'];?>"><?php echo $data['Site_Web'];?></a></p> 
					  <p><span>Téléphone</span>: <?php echo $data['Tel'];?></p> 
                    </div>
                </div>
                <!-- END PROJECT INFO -->
               </div>
            </div><!-- END AJAX PAGE --> 
            </div><!-- END ROW -->         
          </div><!-- END CONTAINER -->           
          
          <div class="clear"></div>
            
            
       <!-- START COPYRIGHT SECTION -->   	
       <div class="copyright clearfix">
     <div class="container clearfix">
        <div class="sixteen columns">   
        <div class="copyright-logo"><a href="#"><img src="../images/logo2.png" title="logo" alt="logo"/></a></div>   
           <div class="social-icons">
              <div class="social-icon social-email"><a href="mailto:hallo@example.com" target="_blank" data-original-title="Email">Email</a></div>
              <div class="social-icon social-aim"><a href="#" target="_blank" data-original-title="Aim">Aim</a></div>
              <div class="social-icon social-apple"><a href="http://apple.com" target="_blank" data-original-title="Apple">Apple</a></div>
              <div class="social-icon social-behance"><a href="#" target="_blank" data-original-title="Behance">Behance</a></div>
              <div class="social-icon social-blogger"><a href="#" target="_blank" data-original-title="Blogger">Blogger</a></div>
              <div class="social-icon social-delicious"><a href="#" target="_blank" data-original-title="Delicious">Delicious</a></div>
              <div class="social-icon social-deviantart"><a href="#" target="_blank" data-original-title="Deviantart">Deviantart</a></div>
              <div class="social-icon social-digg"><a href="#" target="_blank" data-original-title="Digg">Digg</a></div>
              <div class="social-icon social-dribbble"><a href="#" target="_blank" data-original-title="Dribbble">Dribbble</a></div>
              <div class="social-icon social-ember"><a href="#" target="_blank" data-original-title="Ember">Ember</a></div>
              <div class="social-icon social-facebook"><a href="#" target="_blank" data-original-title="Facebook">Facebook</a></div>
              <div class="social-icon social-flickr"><a href="#" target="_blank" data-original-title="Flickr">Flickr</a></div>
              <div class="social-icon social-forrst"><a href="#" target="_blank" data-original-title="Forrst">Forrst</a></div>
           </div><!-- END COPYRIGHT SECTION -->
			<p>&copy; 2012 All Rights Reserved. Designed by <a href="http://themeforest.net/user/RockNRollaDesigns">RockNRolla Designs</a></p>
            
         </div> <!-- END SIXTEEN COLUMNS -->        
	  </div><!-- END CONTAINER -->
     </div>
     <!-- END COPYRIGHT SECTION -->           
         
      </div>
      <!-- END PAGE -->

       </div>
      <!-- END PAGE WRAP -->
    

	<!-- JARVIS THEME SCRIPTS -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>  
    <script type="text/javascript" src="../js/jquery.queryloader2.js"></script>        
    <script type="text/javascript" src="../js/modernizr-2.6.2.min.js"></script>  
    <script type="text/javascript" src="../js/jquery.fitvids.js"></script>   
	<script type="text/javascript" src="../js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="../js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="../js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="../js/jquery.sticky.js"></script>
	<script type="text/javascript" src="../js/selectnav.min.js"></script>    
    <script type="text/javascript" src="../js/SmoothScroll.js"></script>   
    <script type="text/javascript" src="../js/jquery.flexslider-min.js"></script>    
    <script type="text/javascript" src="../js/isotope.js"></script>     
	<script type="text/javascript" src="../js/scripts.js"></script>               
    <script src="https://api.twitter.com/1/statuses/user_timeline/envato.json?callback=twitterCall&count=1"></script>              
	<script>

	    $(window).load(function(){
	      $("nav").sticky({ topSpacing: 0, className: 'sticky', wrapperClassName: 'main-menu-wrapper' });
	    });

		selectnav('nav', {
			nested: true,
			indent: '-'
		});

	  $(document).ready(function(){
	    $("a[data-rel^='prettyPhoto']").prettyPhoto();
		
  });
	</script>
	
</body>
</html>