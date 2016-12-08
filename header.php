<!doctype html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>   
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet"/>
        
        <script src="jquery/jquerymin.js" type="application/javascript"></script>
        
        <script type="application/javascript">
            $(document).ready(function(){                
            $("#lines").click(function(){
            $(".site-navigation").slideDown(400);
            
            $(".close-nav").click(function(){ 
            $(".site-navigation").slideUp(400);
            });
                
           
           

           $(document).mouseup(function (e)
            {
                var container = $(".site-navigation");
                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.hide();
                       
                }
               
            });
            
            
       
               
            });
            
              
                
                
                
        
            $(".site-navigation ul li a:nth-last-child(2)").click(function(){
            $(".sub-list").slideToggle(400);    
            });
                
            
            
           
        });
        

        $(window).on('resize', function(event){
        event.preventDefault();	
        var windowSize = $(window).width();
        if(windowSize > 700)
        {
            $('#nav').css('display','block');
          } 
        
        });
        </script>

        <style>
            .sub-list{display: none; z-index: 999; width: 100%;}
            .sub-list li a{ padding-left: 50px !important;}
            .aboutus-inner img {    width: 100%;    height: 180px;}
            
            .close-nav {    line-height: 75px !important; width: 100% !important; height: 75px; }
            
            .close-nav a:hover{ background: #04556F !important; color: #fff !important;}
            
            .fa.fa-times {    float: right;    margin-top: 18px;    margin-right: 22px;    font-size: 30px; }
    
            
        
        </style>
    </head>
<body>

    <div class="container">
        <div class='header'>
            
            <div class='fixed-header'>
                
                <!--- Site Title Goes Here -->
                <div class='site-title'>
                    <div class="brand-name">
                         <a href=""><h2>Brand Logo</h2></a>
                    </div>
                    <div class="navigation-bar"><b id="lines" class="navbar"></b></div>
                </div>
                
                <!--********** Site Title Here Closed *************-->

                <!--*********** Navigation STARTS here *********-->
                <div class='site-navigation' id="site-navigation">
                    <nav>
                        <ul>
                            <li class="close-nav"> <a href="#"><span></span><i class="fa fa-times" aria-hidden="true"></i></a></li>
                            
                            <li><a href='index.php'><i class='fa fa-home'></i>Home </a></li>
                            <li><a href='aboutus.php'><i class="fa fa-users" aria-hidden="true"></i> About Us</a></li>
                            <li><a href='#'><i class="fa fa-product-hunt" aria-hidden="true"></i> Products <span class="shown"></span></a>
                                <ul class="sub-list">
                                    <li><a href="products.php">
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Plastic Crates</a></li>
                                    
                                    <li><a href="products2.php"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                        Customize Plastic Crates </a></li>
                                    
                                    <li><a href="products3.php">
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                        Plastic Bins </a></li>
                                    
                                    <li><a href="products4.php">
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Plastic Plates </a></li>
                                    
                                    <li><a href="products5.php">
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Air Bubble Bay </a></li>
                                    
                                    <li><a href="products6.php">
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Z.P. Bay/ Foam Bay</a></li>
                                    
                                    <li><a href="products7.php">
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>E.P. Block </a></li>
                                    
                                    <li><a href="products8.php">
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>P.P.Bin </a></li>
                                    
									<li><a href="products9.php">
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>P.P. Sheet </a></li>
                                </ul>
                            </li>
                            
                            
                            <li>
                                <a href='gallery.php'><i class="fa fa-picture-o" aria-hidden="true"></i>Gallery</a>
                            </li>
                            
                            <li><a href='contactus.php'><i class="fa fa-info-circle" aria-hidden="true"></i>Contact Us</a></li>
                            
                        </ul>
                    </nav>
                </div>
                <!-- Navigation Endup here -->
            </div>

            <!-- Fixed Header Closed -->
        </div>

        <!--******** Header Closed (Only Site Title) *******-->