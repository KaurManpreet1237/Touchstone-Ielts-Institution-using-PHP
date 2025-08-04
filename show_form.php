
<?php
	include_once('header.php');
?>
 

<head> 
	<!--<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, 
								initial-scale=1.0"> -->
	<title>Document</title> 
	<link rel="stylesheet" href="/style.css"> 
	<script src="/script.js" defer></script> 
	<link rel="stylesheet" href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" /> 
<style>
{ 
   
   /* font-family: 'Times New Roman', Times, serif; */
} 
  

  
.wrapper { 
   max-width: 90%;
   position: relative; 
	width:90%;
   display: inline-block;
   align-items: center; 
    justify-content: center; 
   /* min-height: 100vh; */
    margin-left:5%; 
    /*background: rgb(228, 220, 220);*/
  
} 
  
.wrapper i { 
    height: 50px; 
    width: 50px; 
    background: rgb(118, 233, 118); 
    text-align: center; 
    line-height: 50px; 
    border-radius: 50%; 
    cursor: pointer; 
    position: absolute; 
    top: 50%; 
    font-size: 1.25 rem; 
    transform: translateY(-50%); 
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23); 
  
} 
  
.wrapper i:first-child { 
    left: -60px; 
  
} 
  
.wrapper i:last-child { 
    right: -60px; 
  
} 
  
.wrapper .carousel { 
    display: grid; 
    grid-auto-flow: column; 
    grid-auto-columns: calc((100% / 3) - 12px); 
    gap: 16px; 
    overflow-x: auto; 
    scroll-snap-type: x mandatory; 
    scroll-behavior: smooth; 
    scrollbar-width: 0; 
} 
  .carousel::-webkit-scrollbar { 
    display: none; 
} 
  
.carousel :where(.card, .img) { 
   display: flex; 
    align-items: center; 
    justify-content: center; 
} 
  
.carousel.dragging { 
    scroll-snap-type: none; 
    scroll-behavior: auto; 
} 
  
.carousel.no-transition { 
    scroll-behavior: auto; 
} 
  
.carousel.dragging .card { 
    cursor: grab; 
    user-select: none; 
} 
  
.carousel .card { 
    scroll-snap-align: start; 
    height: 340px; 
    list-style: none; 
    background: #fff; 
    border-radius: 8px; 
    display: flex; 
    cursor: pointer; 
    width: 90%; 
    padding-bottom: 15px; 
    align-items: center; 
    justify-content: center; 
    flex-direction: column; 
	padding-left:-40px;
	background: rgb(228, 220, 220);
} 
  
.card .img { 
    background: green; 
    width: 145px; 
    height: 145px; 
    border-radius: 50%; 
  
} 
  
.card .img img { 
    width: 140px; 
    height: 140px; 
    object-fit: cover; 
    border-radius: 50%; 
    border: 4px solid #fff; 
} 
  
.card h2 { 
    font-weight: 500; 
    font-size: 1.56rem; 
    margin: 30px 0 5px; 
} 
  
.card span { 
    color: #6a6d78; 
    font-size: 1.31rem; 
  
} 
  
@media screen and (max-width: 900px) { 
    .wrapper .carousel { 
        grid-auto-columns: calc((100% / 2) - 9px); 
  
    } 
} 
  
/*@media screen and (max-width: 600px) { 
    .wrapper .carousel { 
        grid-auto-columns: 100%; 
  
    } */
}
</style>
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
</head> 

<body> 

	<div class="wrapper"> 
	<i id="left" class="fa-solid fas fa-angle-left"></i>
		<ul class="carousel">
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
			<!--<li class="card"> 
				<div class="img"><img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20240213150115/ppp.png"
									alt="" draggable="false"> </div> 
				<h2 style="color: green; font-weight:bold;">GeeksforGeeks</h2> 
				<span>Coding Platform</span> 
			</li> 
			<li class="card"> 
				<div class="img"><img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20240213150115/ppp.png"
									alt="" draggable="false"> </div> 
				<h2 style="color: green; font-weight:bold;">GeeksforGeeks</h2> 
				<span>Coding Platform</span> 
			</li> 
			<li class="card"> 
				<div class="img"><img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20240213150115/ppp.png"
									alt="" draggable="false"> </div> 
				<h2 style="color: green; font-weight:bold;">GeeksforGeeks</h2> 
				<span>Coding Platform</span> 
			</li> 
			<li class="card"> 
				<div class="img"><img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20240213150115/ppp.png"
									alt="" draggable="false"> </div> 
				<h2 style="color: green; font-weight:bold;">GeeksforGeeks</h2> 
				<span>Coding Platform</span> 
			</li> 
			<li class="card"> 
				<div class="img"><img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20240213150115/ppp.png"
									alt="" draggable="false"> </div> 
				<h2 style="color: green; font-weight:bold;">GeeksforGeeks</h2> 
				<span>Coding Platform</span> 
			</li> -->
		</ul> 
		<i id="right" class="fa-solid fas fa-angle-right"></i> 
	</div> 

</body> 


<?php
	include_once('footer.php');
?>