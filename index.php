<?php
	include_once('header.php');
?>
<head> <link rel="stylesheet" href="style1.css"></head>
<!--starting of index-->
	<div id="index">
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i style="font-size:24px" class="fa">&#xf106;</i></button>
	<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
			<div class="banner">
	  <!--<div class="text"><h1><a href="join.php">JOIN</a></h1></div>-->
			<!--<h2 class="w3-center">Automatic Slideshow</h2>-->
                <div class="slideshow-container">
				
					<div class="mySlides fade">
					  <img src="images/pic8.jpg" style="width:100%;opacity: 0.5;height:500px;">
					  <div class="text2"><h1><b>TOUCHSTONE PHAGWARA </h1><br><h3>WELCOME YOU!</b></h3></div>
					</div>

					<div class="mySlides fade">
					  <img src="images/pic8.jpg" style="width:100%;opacity: 0.5;height:500px;">
					  <div class="text2"><h1><b>IELTS</h1><br><h3>Pursue higher education in your dream country</b></h3></div>
					</div>

					<div class="mySlides fade">
					  <img src="images/pic8.jpg" style="width:100%;opacity: 0.5;height:500px;">
					  <div class="text2"><h1><b>PTE</h1><br><h3> Equal opportunities for non-native speaker to score a perfect go</b></h3></div>
					</div>

					<div class="mySlides fade">
					  <img src="images/pic8.jpg" style="width:100%;opacity: 0.5;height:500px;">
					  <div class="text2"><h1><b>TOEFL<h1><br><h3>Learn,earn & live abroad with your desired score</b></h3></div>
					</div>
					
					<div class="mySlides fade">
					  <img src="images/pic8.jpg" style="width:100%;opacity: 0.5;height:500px;">
					  <div class="text2"><h1><b>Study Abroad</h1><br><h3> Ready to study abroad get start with us </b></h3></div>
					</div>

                </div>
				<br>

					<div style="text-align:center">
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					</div>

				  
				  <div class="text1"><h1><a href="registration.php">JOIN</a></h1></div>
				</div>

				<script>
				let slideIndex = 0;
					showSlides();

					function showSlides() {
					  let i;
					  let slides = document.getElementsByClassName("mySlides");
					  let dots = document.getElementsByClassName("dot");
					  for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";  
					  }
					  slideIndex++;
					  if (slideIndex > slides.length) {slideIndex = 1}    
					  for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					  }
					  slides[slideIndex-1].style.display = "block";  
					  dots[slideIndex-1].className += " active";
					  setTimeout(showSlides, 3000); // Change image every 3 seconds
					}
				</script>

			
		<br>
	
		<div class="index1">
			<style>
					* {
					  box-sizing: border-box;
					  
					}
					

					body {
					  font-family: Arial, Helvetica, sans-serif;
					}

					/* Float four columns side by side */
					.column {
					 
					  float: left;
					  width: 33%;
					 
					  padding:60px 60px 60px;
					}

					/* Remove extra left and right margins, due to padding */
					.row {margin: 0 -15px -155px;}

					/* Clear floats after the columns */
					.row:after {
					  content: "";
					  display: table;
					  clear: both;`1		
					  
					}

					/* Responsive columns */
					@media screen and (max-width: 600px) {
					  .column {
						width: 100%;
						display: block;
						/*margin-bottom: 20px;*/
					  }
					}

					/* Style the counter cards */
					.card {
					  box-shadow: 0 5px 9px 0 rgba(0, 0, 0, 0.8);
					  padding: 30px;
					  text-align: center;
					  background-color:white;
					 /* background-color: #f1f1f1;*/
					   height:500px;
					}
					/*hr {
							border: 1px solid red;
							text-align:center;
							margin-left:30%;
							*/
							.card:hover {
							box-shadow: 0 4px 30px 0 rgba(0,0,0,0.4);
							}
			</style>
			<div class="row">
			  <div class="column">
				<div class="card">
				<a href="oriented.php#oriented-data1"><img src="images/log4.png" height="100px">
				  <h2 style="color:black;"><b>Result-oriented, research-oriented</b></h2>
				  <h3 style="color:black;">Cutting edge facilities & unrivalled resources</h3></a>
				  
				</div>
			  </div>

			  <div class="column">
				<div class="card">
				<a href="oriented.php#oriented-data2"><img src="images/working-work.gif" height="100px">
				  <h2 style="color:black;"><b>Smart classrooms, well-equipped labs</b></h2>
				  <h3 style="color:black;">Freedom to interact with the content,keeping students focused </h3></a>
				  
				</div>
			  </div>
			  
			  <div class="column">
				<div class="card">
				<a href="oriented.php#oriented-data3"><img src="images/icegif-2710.gif" height="100px">
				  <h2 style="color:black;"><b>One-to-one attention system & Open-ended discussion</b></h2>
				  <h3 style="color:black;">Supportive & stimulating environment different capacities to learn </h3></a>
				  
				</div>
			  </div>
			 </div>
		</div><!--end of index1-->
		
		<!--index2 about offers start-->
		<div class="index2" >
		
		<h1 style="font-size:40px;color: #006699;text-align:center;"><b><u>COURSE WE OFFER</u></b></h1>

		 <h3>IDP has enthusiastically rated Touchstone Educational as India’s number 1 IELTS institute in the 
		 country for 9 consecutive years. We are proud of our long and clean track record of offering English 
		 language programs and study abroad support to students and thus fulfilling their aspirations.</h3>
		 
			
			<div class="row">
			  <div class="column">
				<div class="card">
				<img src="images/ielts.png"height="100px" >
				  <h2 >IELTS</h2>
				  <h3>We are the number 1 institute for IELTS as recognized by IDP.
				  Our dedicated trainers are well acquainted with the latest pattern,
				  study material & methodologies</h3><br><br>
				  <button style="background:linear-gradient(to bottom right, #00cc99 1%, #006699 52%);border:none;"><h2><a href="join.php?id=1">READ MORE</a></h2></button>
				</div>
			  </div>

			  <div class="column">
				<div class="card">
				<img src="images/pte1.png"height="100px" >
				  <h2 >PTE</h2>
				  <h3>With Touchstone as the official testing center for PTE,
				  we ensure your global acceptance in top-tier universities to
				  fulfill your dream of international education.</h3>
				  <button style="background:linear-gradient(to bottom right, #00cc99 1%, #006699 52%);border:none;"><h2><a href="pte.php?id=2">READ MORE</a></h2></button>
				</div>
			  </div>
			  
			  <div class="column">
				<div class="card">
				<img src="images/toefl1.png"height="70px"width="250px" >
				  <h2 >TOFEL</h2>
				  <h3>We use a powerful adaptive technology platform to streamline your preparation. 
				  Avail coaching & mentoring by the most experienced faculty.</h3><br><br><br>
				  <button style="background:linear-gradient(to bottom right, #00cc99 1%, #006699 52%);border:none;"><h2><a href="toefl.php?id=8">READ MORE</a></h2></button>
				</div>
			  </div>
			 </div>
			 
			 <div class="row">
			  <div class="column">
				<div class="card">
				<img src="images/2916879-200.png"height="100px" >
				  <h2 >STUDY ABROAD</h2>
				  <h3>Explore the international standards of learning and discover 
				  the world outside with our exclusive study programs and hassle-free
				  visa application procedures.</h3><br><br>
				  <button style="background:linear-gradient(to bottom right, #00cc99 1%, #006699 52%);border:none;"><h2><a href="study_abroad.php">READ MORE</a></h2></button>
				</div>
			  </div>

			  <div class="column">
				<div class="card">
				<img src="images/pngtree-interview-line-icon-vector-png-image_6649646.png"height="100px" >
				  <h2 >INTERVIEW PREPARATION</h>
				  <h3>Our interview preparation course helps you leave a good 
				  first impression & establish yourself as the priority candidate
				  during the hiring process.</h3>
				  <button style="background:linear-gradient(to bottom right, #00cc99 1%, #006699 52%);border:none;"><h2><a href="interview.php?id=6">READ MORE</a></h2></button>
				</div>
			  </div>
			  
			  <div class="column">
				<div class="card">
				<img src="images/5334791.png"height="100px" >
				  <h2 >SPOKEN ENGLISH</h2>
				  <h3>Improve career opportunities by reinforcing your English proficiency 
				  with Touchstone. We are centered on the sensible usage of the 
				  language to promote your growt</h3><br>
				  <button style="background:linear-gradient(to bottom right, #00cc99 1%, #006699 52%);border:none;"><h2><a href="spoken.php?id=4">READ MORE</a></h2></button>
				</div>
			  </div>
			 </div>
			
		</div><!--end of index2-->

	<div id="event-index">
			<div class="event-index-top">
				<h1 style="font-size:40px;color:#006699;text-align:center;"><b><u> LATEST EVENTS </u></b></h1>
				<a href="event.php" style="color:#006699;">MORE EVENTS</a>
				
			</div>
			<?php
				//$conn=connection();
				$sql_news="select * from `events` order by `doe` desc limit 0,3";
				
				$result_news=get_data($sql_news);
				$news=$result_news->fetchAll();
				
				$sr=1;
				foreach($news as $new)
				{
						
			?>
		<div class="row">
		 <div class="column">
            <div class="card">
		       <img src="backend/img_upload/events/<?php echo $new['images'];?>"width="350"height="200">
		        <h2 style="color:black;"><?php echo $new['name'];?></h2>
		          <p style="color:black;"><?php echo $new['description'];?></p>
  
            </div>
         </div>

        <?php $sr=$sr+1;
			}
			$conn=null;
		?>



	    </div>
    </div>	

		
		<!--index3 about consultation start -->
		<div class="index3">
			<div class="contact-button">
				<h1 align="center"style="font-size:40px;color:white;"><b> BOOK FOR FREE CAREER CONSULTATION TODAY!</b></h1>
				<script>
					var cars1 = ["IELTS","PTE","TOEFL","Interviwe preparation","Spoken English"];
					var i  = 0 ;
					setInterval(function (){
					document.getElementById("comment").innerHTML = cars1[i];
					i++;
					i = i%3;
					}, 4000)
				</script>
                  <h1 class="name" id="comment" style="padding-left:150px;padding-top:40px;color:white"></h1>
				  <h3 style="padding-left:125px;padding-top:40px;color:white;">Discover a better way of learning. Improve your English proficiency with the experts & get closer to your dream score!</h3>
						
				<button style="background-color:#ffbf00;margin-left:130px;border:none;"><h2><a href="contact.php">CONTACT US</a></h2></button>
				
			</div>
			
			<div class="pic">
				<img src="images/girl.jpg" height="99%" width="70%" align="right" style="padding-right:80px">
			</div>
			
		</div><!--end of index3-->
		
		<!--index4 about why touch stone-->
		<div id="index4">
		
		<h1 style="text-align:center; font-size:40;color: #006699;"><b><u> WHY TOUCH STONE</u></b></h1>
			<div class="txt" style="text-align:center;">
				<script>
					var cars = ["Learn without limits","Get job ready with us","Start an advance your career","Parpare for in-demand courses",  
								"IELTS institution in chandigarh","Online IELTS in chandigarh","PTE coaching in chandigarh","TOFEL coaching in chandigarh ",
								"Listed with world class institute"];
					var i  = 0 ;
					setInterval(function (){
					document.getElementById("text").innerHTML = cars[i];
					i++;
					i = i%3;
					}, 4000)
				</script>
                  <h1 class="name" id="text"></h1>
						
				
				
				<h4>IDP has enthusiastically rated Touchstone Educational as India’s number 1 IELTS institute in the 
				country for 9 consecutive years. We are proud of our long and clean track record of offering English
				language programs and study abroad support to students and thus fulfilling their aspirations.</h4>
			</div>
			
			<div class="highlight">
				<div class="row">
			  <div class="column">
				<div class="card">
				<img src="images/c92a16e5197d61b5094189e018aeb724-graduation-award-ribbon-flat-icon.png" height="100px" >
				  <h2>Awards And Recognition</h2>
				  <h3>Winner of the IDP award for excellence in IELTS training for 9 consecutive years. Platinum Plus member 
				  of the British Council and IDP.</h3>
				 <button style="background:linear-gradient(to bottom right, #00cc99 1%, #006699 52%);border:none;"><h2><a href="achievements.php">READ MORE</a></h2></button>
				</div>
			  </div>

			  <div class="column">
				<div class="card">
				<img src="images/2815116-200.png" height="100px">
				  <h2>Faculty</h2>
				  <h3>Faculty members are the backbone of any institution, nurturing minds and shaping futures with knowledge and guidance. </h3>
				  <button style="background:linear-gradient(to bottom right, #00cc99 1%, #006699 52%);border:none;"><h2><a href="faculty_details.php">READ MORE</a></h2></button>
				</div>
			  </div>
			  
			  <div class="column">
				<div class="card">
				<img src="images/global-icon-13.png" height="100px">
				  <h2>Our Footprints</h2>
				  <h3>Touchstone is Global with its footprints in India, Canada & France. Over 60 top-class campuses across
				  41+ cities fully equipped .</h3>
				  <button style="background:linear-gradient(to bottom right, #00cc99 1%, #006699 52%);border:none;"><h2><a href="contact.php">READ MORE</a></h2></button>
				</div>
			  </div>
			 </div>
			 <div class="row">
			  <div class="column">
				<div class="card">
				<img src="images/Rate-PNG-HD.png" height="100px">
				  <h2>High Success Rate</h2>
				  <h3>Impeccable Visa counselling and filing process with second-to-none student visa success rate for Canada,
				  Australia and New Zealand.</h3>
				  <button style="background:linear-gradient(to bottom right, #00cc99 1%, #006699 52%);border:none;"><h2><a href="study_abroad.php">READ MORE</a></h2></button>
				</div>
			  </div>

			  <div class="column">
				<div class="card">
				<img src="images/5527307.png" height="100px">
				  <h2>Extended Opportunity</h2>
				  <h3>Access to a state-of-the-art IELTS training App that helps students to improve their English proficiency,
				  even when they are not in the class.</h3>
				  <button style="background:linear-gradient(to bottom right, #00cc99 1%, #006699 52%);border:none;"><h2><a href="mobile_apps.php">READ MORE</a></h2></button>
				</div>
			  </div>
			  
			  <div class="column">
				<div class="card">
				<img src="images/7219b8450aa254b2d47645e0660295c1-video-camera-icon-or-logo.png" height="100px" >
				  <h2>EXCLUSIVE HIGHLIGHTS</h2>
				  <h3>Besides the outstanding global reputation for academic guidance, students get access to online training 
				  material and elite-class infrastructure.</h3>
				  <button style="background:linear-gradient(to bottom right, #00cc99 1%, #006699 52%);border:none;"><h2><a href="event.php">READ MORE</a></h2></button>
				</div>
			  </div>
			 </div>
		</div>
			
		</div><!--end of index4-->
		
		
		
		<!--index5 about partners-->
		<div class="index5">
		
			<h1 style="text-align:center; font-size:40;color: #006699;padding-bottom:30px;"><b><u>OUR EDUCATION PARTNERS</u></b></h1>
			<marquee behavior="scroll" scrollamount="5"   direction="left" onmouseover="this.stop()" onmouseout="this.start()">
            <img src="images/tologo.png" width="250" height="190"   style="margin-right: 20px;"  />
			<img src="images/idp.png" width="250" height="190"   style="margin-right: 20px;" />
			<img src="images/cert1.png" width="250" height="190" style="margin-right: 20px;"  />
			<img src="images/celpip.png" width="250" height="190"  style="margin-right: 20px;"  />
			<img src="images/ielogo.png" width="250" height="190"  style="margin-right: 20px;" />
			<img src="images/pearson.png" width="250" height="190"   style="margin-right: 20px;" />
			</marquee>
		</div><!--end of index5-->
		
		<div class="index6">
		<h1 style="text-align:center; font-size:40;color:white;padding-bottom:30px;"> <b><u>OUR PARTNER INSTITUITION</u></b> </h1>
          <marquee behavior="scroll" scrollamount="5"  direction="right" onmouseover="this.stop()" onmouseout="this.start()">
            <img src="images/acadia.png" width="150" height="110"   style="margin-right: 15px;"  />
			<img src="images/algo.jpg" width="150" height="110"   style="margin-right: 15px;" />
			<img src="images/caledonia.png" width="150" height="110" style="margin-right: 15px;"  />
			<img src="images/cambriam.png" width="150" height="110"  style="margin-right: 15px;"  />
			<img src="images/canador.png" width="150" height="110"  style="margin-right: 15px;" />
			<img src="images/capilano.png" width="150" height="110"   style="margin-right: 15px;" />
			<img src="images/lambton.jpg" width="150" height="110"   style="margin-right: 15px;" />
			<img src="images/lawrence.jpg" width="150" height="110"   style="margin-right: 15px;" />
            <img src="images/thomas.png" width="150" height="110"   style="margin-right: 15px;" />
            <img src="images/unbc.png" width="150" height="110"   style="margin-right: 15px;" />
            <img src="images/velley.png" width="150" height="110"   style="margin-right: 15px;" />
			<img src="images/nic.png" width="150" height="110"   style="margin-right: 15px;" />
		</marquee>
		</div><!--end of index6-->
		<!-- starting of index-review-->
		<div class="index-review">
		
		<h1 style="text-align:center; margin-top:2%; font-size:40;color:#006699;"><b><u>STUDENT’S STORY HIGHLIGHTS</u></b></h1>
		<h2 style="text-align:center; font-size:40;color:#black;padding-bottom:30px;">Better learning start here</h2>
		
		<div class="wrapper">		
		<i id="left" style="font-size:24px" class="fa">&#xf104;</i>
		
		<div class="carousel">
			<?php
			//$conn=connection();
			$sql_news="select * from `review_data` order by `date` desc ";
			$result_news=get_data($sql_news);
			$news=$result_news->fetchAll();
			foreach($news as $new)
			{
			?>
			<li class="card"> 
				<div class="img"><img src="images/review.gif" alt="" draggable="false"> </div> 
<!--"https://media.geeksforgeeks.org/wp-content/uploads/20240213150115/ppp.png"alt="" draggable="false"> </div> -->
				<h2> <?php echo $new['name'];?></h2>
				<h5> <?php echo $new['date'];?></h5>
				<h3><?php echo $new['review'];?></h3> 
				</li> 
		<?php 
			} 
			?>
		</div>
	
		<i id="right" style="font-size:24px" class="fa">&#xf105;</i>
		
	</div> 
		
	<script>
	document.addEventListener("DOMContentLoaded", function() { 
    const carousel = document.querySelector(".carousel"); 
    const arrowBtns = document.querySelectorAll(".wrapper i"); 
    const wrapper = document.querySelector(".wrapper"); 
  
    const firstCard = carousel.querySelector(".card"); 
    const firstCardWidth = firstCard.offsetWidth; 
  
    let isDragging = false, 
        startX, 
        startScrollLeft, 
        timeoutId; 
  
    const dragStart = (e) => {  
        isDragging = true; 
        carousel.classList.add("dragging"); 
        startX = e.pageX; 
        startScrollLeft = carousel.scrollLeft; 
    }; 
  
    const dragging = (e) => { 
        if (!isDragging) return; 
      
        // Calculate the new scroll position 
        const newScrollLeft = startScrollLeft - (e.pageX - startX); 
      
        // Check if the new scroll position exceeds  
        // the carousel boundaries 
        if (newScrollLeft <= 0 || newScrollLeft >=  
            carousel.scrollWidth - carousel.offsetWidth) { 
              
            // If so, prevent further dragging 
            isDragging = false; 
            return; 
        } 
      
        // Otherwise, update the scroll position of the carousel 
        carousel.scrollLeft = newScrollLeft; 
    }; 
  
    const dragStop = () => { 
        isDragging = false;  
        carousel.classList.remove("dragging"); 
    }; 
  
    const autoPlay = () => { 
      
        // Return if window is smaller than 800 
        if (window.innerWidth < 800) return;  
          
        // Calculate the total width of all cards 
        const totalCardWidth = carousel.scrollWidth; 
          
        // Calculate the maximum scroll position 
        const maxScrollLeft = totalCardWidth - carousel.offsetWidth; 
          
        // If the carousel is at the end, stop autoplay 
        if (carousel.scrollLeft >= maxScrollLeft) return; 
          
        // Autoplay the carousel after every 2500ms 
        timeoutId = setTimeout(() =>  
            carousel.scrollLeft += firstCardWidth, 2500); 
    }; 
  
    carousel.addEventListener("mousedown", dragStart); 
    carousel.addEventListener("mousemove", dragging); 
    document.addEventListener("mouseup", dragStop); 
    wrapper.addEventListener("mouseenter", () =>  
        clearTimeout(timeoutId)); 
    wrapper.addEventListener("mouseleave", autoPlay); 
  
    // Add event listeners for the arrow buttons to  
    // scroll the carousel left and right 
    arrowBtns.forEach(btn => { 
        btn.addEventListener("click", () => { 
            carousel.scrollLeft += btn.id === "left" ?  
                -firstCardWidth : firstCardWidth; 
        }); 
    }); 
}); 
</script>	
		
		
		
		
		
		
		
		
		
		
		
		
		</div><!--end of index-review-->
		<div class="maping"> <!--style="padding-left:15px;padding-right:10px;"-->
			<h1 style="text-align:center; font-size:40;color:#006699;padding-bottom:30px;"><b>LOCATE US AT<br>PHAGWARA<b></h1>
			<h3>OPPOSITE HANUMAN GARI MANDIR, GT ROAD, PHAGWARA, PUNJAB - 144401</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3411.
			957473228923!2d75.76545317559962!3d31.22190757435209!2m3!1f0!2f0!3f0!3m2!1i10
			24!2i768!4f13.1!3m3!1m2!1s0x391af5dbe5bfe0a7%3A0x61478e5b955580df!2sTouchstone%
			20Educationals%20LLP!5e0!3m2!1sen!2sin!4v1707897043912!5m2!1sen!2sin" width="100%" height="400px"
		    style="border:0;" allowfullscreen="" loading="normal"
			referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div><!--end map-->
		
	</div><!--end of index-->	

<?php
	include_once('footer.php');
?>