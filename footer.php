
<div class="footer">
            
            <div class="footerbox">
                <h3 class="footer-title">STAY IN TOUCH</h3>
                <input type="text"  placeholder="First Name" class="textbox-style" id="firstname"/>
                <input type="email" placeholder="Mail Address" class="textbox-style" id="mail"/>
                <textarea placeholder="Your Message" class="textbox-style" id="yourmessage"></textarea>
                <input type="submit" value="Submit" id="submit" class="textbox-style"/>
            </div>
            
            
            <div class="footerbox">
                <h3 class="footer-title">ADDRESS</h3>
                <p> 
                    Vinod Kumar<br/>
                    Plot No-67, Gali No-8E,<br/>
                    Sarurpur Industrial Area,<br/>
                    Ballabgarh,<br/>
                    Dist. Faridabad-121005 (Haryana),<br/>
                    India<br/> 
                    
                </p>
            </div>
            
            
            
            <div class="footerbox">
                <h3 class="footer-title">USEFUL LINKS</h3>
                <li><a href="#"><i aria-hidden="true" class="fa fa-facebook-official"></i>Facebook</a></li>
                <li><a href="#"><i aria-hidden="true" class="fa fa-twitter-square"></i>Twitter</a></li>
                <li><a href="#"><i aria-hidden="true" class="fa fa-google-plus-square"></i>Google+</a></li>
                <li><a href="#"><i aria-hidden="true" class="fa fa-youtube-square"></i>YouTube Channel</a></li>
                <li><a href="#"><i aria-hidden="true" class="fa fa-instagram"></i>Instagram</a></li>
            </div>
            
            <div class="footerbox">
                <h3 class="footer-title">LEGAL</h3>
                <p>
                    Copyright &copy; 2016-2017<br/>
                    All Rights Reserved<br/>
                    <br/>
                    Terms & Conditions
                
                </p>
            </div>    
    
        </div>
        <!-- Footer Closed Here-->

        <!-- Social Media Icons Starts Here-->
        <div class="socialmedia">
            <div class="socialmedia-inner">
                <a href="#" target="_blank"><img src="social-media/facebookprofile.png" alt="facebook"/></a>
                <a href="#" target="_blank"><img src="social-media/Twitter.png" alt="twitter"/></a>
                <a href="#" target="_blank"><img src="social-media/googleplusprofile.png" alt="google+"/></a>
                <a href="#" target="_blank"><img src="social-media/instagram.jpg" alt="instagram"/></a>
                <a href="#" target="_blank"><img src="social-media/linkedinprofile.png" alt="linkedin"/></a>
                <a href="#" target="_blank"><img src="social-media/pinterest.jpg" alt="pininterest"/></a>
            </div>            
        </div>
        <!-- Social Media Icons End Here-->


		</div>
        <!-- Containder Ends Here-->

		<script type="application/javascript">
            var slideIndex = 0;
            showSlides();

            function showSlides() 
            {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("numbertext");
                
                for (i = 0; i < slides.length; i++) 
                {
                    slides[i].style.display = "none";  
                }
                
                slideIndex++;
                
                if (slideIndex> slides.length) 
                { slideIndex = 1 }   
                
                for (i = 0; i < dots.length; i++) 
                {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 3000); // Change image every 3 seconds
                }
        </script>
    
    </body>
</html>