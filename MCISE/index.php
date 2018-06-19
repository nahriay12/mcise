<?php
	include "php/mail.php";
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
	<title>MCISE</title>
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
    
	<!-- START HOME SECTION -->    
	<div id="home" class="home-parallax">
      <div class="home-text-wrapper">
      
          <div class="home-logo-text">
            <a href="#home">MCISE</a>
          </div>
                 
           <div id="home-slider" class="flexslider">			
                <ul class="slides styled-list">
                
                <li class="home-slide"><p class="home-slide-content"> <span class="highlight">ACTING FOR SOCIAL CHANGE</span></p></li>
                
                </ul>
           </div><!-- END FLEXSLIDER -->
        </div><!-- END HOME TEXT WRAPPER -->
     </div><!-- END HOME SECTION -->
	
	
	
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
                  <li><a href="#home">Home</a></li>
                  <li><a href="#portfolio">Ecosysteme</a></li>              
                  <li><a href="#contact">Contact</a></li>
              </ul>
              <!-- END NAVIGATION MENU ITEMS -->				
          </div><!-- END TWELVE COLUMNS -->	
      </div><!-- END CONTAINER -->	
    </nav>
    <!-- END NAVIGATION -->
	
	<!-- START PORTFOLIO SECTION -->
	<div id="portfolio" class="page">
	
		<div class="container">	
           <div class="row">	
			<div class="sixteen columns">            
	            <!-- START TITLE -->	            
				<div class="title">
				  <h1>Ecosysteme</h1>
                  <div class="subtitle">
                      <p>Les principaux acteurs de <span class="highlight">l'ecosysteme</span> de l'entrepreneuriat sociale au <span class="highlight">Maroc.</span></p>
                  </div><!-- END SUBTITLE -->                  
                </div><!-- END TITLE -->  	                           
			</div><!-- END SIXTEEN COLUMNS -->  
           </div><!-- END ROW -->         
          </div><!-- END CONTAINER -->     
   			
           <!-- START AJAX SECTION -->  
            <div id="ajax-section">     
             <div class="container clearfix"> 

                
              <!-- START PROJECT NAVIGATION --> 
              <div id="project-navigation">
                  <ul>
                      <li id="nextProject"><a href="#"></a></li>
                      <li id="prevProject"><a href="#"></a></li>
                   </ul>  
               </div>
               <!-- END PROJECT NAVIGATION --> 
                
               <!-- START PROJECT CLOSE BUTTON -->
               <div id="closeProject">
                    <a href="#loader"><i class="icon-remove"></i></a>               
               </div>  
               <!-- START PROJECT CLOSE BUTTON -->
                 
               <!-- START PROJECT LOADER SECTION -->
               <div id="loader"></div>
               <!-- END PROJECT CLOSE BUTTON -->
                     
               <!-- START AJAX CONTENT -->
               <div id="ajax-content-outer">
                    <div id="ajax-content-inner"></div>
               </div>
               <!-- END AJAX CONTENT -->
                      
        </div><!-- END CONTAINER -->
        
    </div>
           <!-- END AJAX SECTION -->          
              
         <div class="clear"></div>  
      
             
   	
   <div class="container clearfix">  
   
   <!-- START PORTFOLIO FILTERING -->   
   <div  id="filters" class="sixteen columns">

      <ul class="clearfix">
        <li><a href="#" data-filter="*" class="active"><h3>Tous</h3></a></li>
		<?php
			$db=new PDO("mysql:host=localhost;dbname=cise_bd;charset=utf8",'root','');
			$req=$db->prepare('select * from secteur');
			$req->execute();
			while($data=$req->fetch()){
				?>
					<li><a href="#" data-filter=".<?php echo $data['filter']; ?>"><h3><?php echo $data['Nom']; ?></h3></a></li>
				<?php
			}
			?>
      </ul>
    </div><!-- END PORTFOLIO FILTERING -->    
   </div><!-- END CONTAINER --> 
   
         
   <!-- START PORTFOLIO WRAP -->  
   <div id="portfolio-wrap">
    <?php $req=$db->prepare('SELECT * from organisme ');
			$req->execute();
			while($data=$req->fetch()){
					 $req2=$db->prepare("select s.filter from org_secteur os, secteur s where os.id_s=s.Id_S and os.id_O=".$data['id_O']);
					 $filter="";
					 $req2->execute();
					 while($data2=$req2->fetch()){
						 $filter .= " ".$data2['filter'];
						 }
						?>
					 <div class="portfolio-item one-third column <?php echo $filter; ?>">
					   <div class="portfolio">
					   <!---->
						  <a href="#!projects/project.php?id=<?php echo $data['id_O']; ?>" class="portfolio-image">
							<img src="images/portfolio/<?php echo $data['Image']; ?>" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->   
							
							<div class="portfolio-overlay">                
								<div class="thumb-info">        
								  <h3><?php echo $data['Nom']; ?></h3><!-- OVERLAY TITLE -->  
								  <i class="icon-picture"></i><!-- OVERLAY ICON --> 
								</div>                
							</div><!-- END PORTFOLIO OVERLAY --> 
						  
						  </a>
					   </div>
				</div>
				<?php
			}
			?> 
              
             
   </div>
   <!-- END PORTFOLIO WRAPPER -->
		
	</div>
	<!-- END PORTFOLIO SECTION -->
    
	<!-- START CONTACT SECTION -->
	<div id="contact" class="page">
    
		<div class="container">	
           <div class="row">	
			<div class="sixteen columns">            
	            <!-- START TITLE -->	            
				<div class="title">
				  <h1>Contact</h1>
                  <div class="subtitle">
                      <p>Pour rester en contact, merci d'envoyer un message</p>
                  </div><!-- END SUBTITLE -->
                </div><!-- END TITLE -->  	                           
			</div><!-- END SIXTEEN COLUMNS -->  
           </div><!-- END ROW -->         
          </div><!-- END CONTAINER -->         
		<div class="container clearfix">
			<div class="sixteen columns">
				
	   <!-- START CONTACT BOX -->
      <div class="contact-box">
     
                      <label for="email">Email</label>
                    <![endif]-->
                  <input type="text" name="email" id="email" placeholder="Email (required)">
                   <!--[if IE]>
                      <label for="subject">Subject</label>
                    <![endif]-->
                  <input type="text" name="subject" id="subject" placeholder="Subject" >
                </div>
                <div id="contact-textarea">
                 <!--[if IE]>
                      <label for="   <!-- START CONTACT FORM -->
         <div id="contact-form">			
            <form action="" method="post">
           
                <div id="contact-input">
                 <!--[if IE]>
                    <label for="name">Name</label>
                <![endif]-->
                  <input type="text" name="nom" id="name" placeholder="Name (required)" >
                   <!--[if IE]>message">Your Message Here</label>
                    <![endif]-->
                  <textarea name="message" id="message" cols="39" rows="4" placeholder="Your Message"></textarea>
                </div>
                <div id="contact-submit">
                  <div>
                    <input type="submit" href="mail.php" name="submit" tabindex="5" value="Post Comment" class="comment-submit small button">
                  </div>
                </div>
              </form> 
         <div class="clear"></div>
          </div>
           <div class="result"></div>  
		<!-- END CONTACT FORM -->
	
        	
		</div>

        <!-- END CONTACT BOX -->
		</div> <!-- END SIXTEEN COLUMNS -->        
	</div><!-- END CONTAINER -->
 
      <!-- START COPYRIGHT SECTION -->   	
       <div class="copyright">
     <div class="container clearfix">
        <div class="sixteen columns">   
        <div class="copyright-logo"><a href="#"><img src="images/logo2.png" title="logo" alt="logo"/></a></div>   
           <div class="social-icons">
              <div class="social-icon social-facebook"><a href="https://www.facebook.com/MoroccanCise/" target="_blank" data-original-title="Facebook">Facebook</a></div>
              <div class="social-icon social-youtube"><a href="https://www.youtube.com/user/MoroccanCISE" target="_blank" data-original-title="Flickr">Youtube</a></div>
              <div class="social-icon social-twitter"><a href="https://twitter.com/moroccancise" target="_blank" data-original-title="Forrst">Twitter</a></div>
           </div>
			<p>2017 : <i class="icon-heart"></i> by <a href="https://www.facebook.com/Mido.Nahri"> NAHRI Ayoub </a></p>
            
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