 <?php
$this->load->helper('currency');
?>
<script src="<?php echo base_url() . 'content/jquery.js'; ?>" type="text/javascript"></script>



<style>
    
    
#slideshow #slideshowWindow {
	width:500px;
	height:257px;
	margin:0;
	padding:0;
	position:relative;
	overflow:hidden;
}

#slideshow #slideshowWindow .slide {
	margin:0;
	padding:0;
	width:500px; 
	height:300px;
	float:left;
	position:relative;
}


#slideshow #slideshowWindow {
	width:500px;
	height:257px;
	margin:0;
	padding:0;
	position:relative;
	overflow:hidden;
}

#slideshow #slideshowWindow .slide {
	margin:0;
	padding:0;
	width:675px; 
	height:257px;
	position:relative;
}

#slideshow #slideshowWindow .slide .slideText {
	//position:absolute;
        position: relative;
	//top:100px;
	//left:00px;
	//width:100%;
	//height:130px;
	//background-image:url(greyBg.png);
	//background-repeat:repeat;
	margin:0;
	padding:0;
	color:#ffffff;
	font-family:Myriad Pro, Arial, Helvetica, sans-serif;
}

#slideshow #slideshowWindow .slide .slideText a:link, 
#slideshow #slideshowWindow .slide .slideText a:visited {
	color:#ffffff;
	text-decoration:none;
}

#slideshow #slideshowWindow .slide .slideText h2, 
#slideshow #slideshowWindow .slide .slideText p {
	margin:10px 0 0 10px;
	padding:0;
}

//This code puts in a couple of span tags which then get replaced by our button images:

.nav {
	display:block;
	text-indent:-10000px;
	position:absolute;
	cursor:pointer;
}

#leftNav {
	//top:223px;
	left:10px;
	//width:94px;
	//height:34px;
	position: relative;
	//background-repeat:no-repeat;
	z-index:999;
}

#rightNav {
	//top:225px;
	left:400px;
	//width:53px;
	//height:26px;
	position: relative;
	//background-repeat:no-repeat;
	z-index:999;
}
</style>



<script type="text/javascript">
	$(document).ready(function() {
             //adding item to the cart...
        $(".addToCart").click(function() {
           $(this).parent().parent().css({ opacity: 0.3 });
            var id = $(this).val();
            var dataString = 'itemid=' + id;
            $.ajax({
                type: "POST",
                url: base_url + 'index.php/view/add',
                data: dataString,
                success: function(msgs)
                {
                   
                    $("#shopping_cart").html(msgs);


                },
                complete: function() {
                  $(".contentContainerBox").css({ opacity: 1 });
                }
            });
            
        });
            // end of add to cart
            
            slider();
		var currentPosition = 0;
		var slideWidth = 675;
		var slides = $('.slide');
		var numberOfSlides = slides.length;
		var slideShowInterval;
		var speed = 3000;

		//Assign a timer, so it will run periodically
		slideShowInterval = setInterval(changePosition, speed);
		
		slides.wrapAll('<div id="slidesHolder"></div>')
		
		//slides.css({ 'float' : 'left' });
		
		//set #slidesHolder width equal to the total width of all the slides
		$('#slidesHolder').css('width', slideWidth * numberOfSlides);
		
		$('#slideshow')
			.append('<span class="nav" id="leftNav">Move Left</span>')
			.append('<span class="nav" id="rightNav">Move Right</span>');
		
		manageNav(currentPosition);
		
		//tell the buttons what to do when clicked
		$('.nav').bind('click', function() {
			
			//determine new position
			currentPosition = ($(this).attr('id')=='rightNav')
			? currentPosition+1 : currentPosition-1;
										
			//hide/show controls
			manageNav(currentPosition);
			clearInterval(slideShowInterval);
			slideShowInterval = setInterval(changePosition, speed);
			moveSlide();
		});
		
		function manageNav(position) {
			//hide left arrow if position is first slide
			if(position==0){ $('#leftNav').hide() }
			else { $('#leftNav').show() }
			//hide right arrow is slide position is last slide
			if(position==numberOfSlides-1){ $('#rightNav').hide() }
			else { $('#rightNav').show() }
		}

		
		/*changePosition: this is called when the slide is moved by the 
        timer and NOT when the next or previous buttons are clicked*/
		function changePosition() {
			if(currentPosition == numberOfSlides - 1) {
				currentPosition = 0;
				manageNav(currentPosition);
			} else {
				currentPosition++;
				manageNav(currentPosition);
			}
			moveSlide();
		}
		
		
		//moveSlide: this function moves the slide 
		function moveSlide() {
				$('#slidesHolder')
                  .animate({'marginLeft' : slideWidth*(-currentPosition)});
		}

});
</script>




<script>
    
    function slider()
    {
           var i = 0;
       
        var base_url = "http://localhost/smartaservice/";
          var sliderJson = <?php echo $slider_json ?>;
           

   
     var tbl = "";
for (i = 0; i < sliderJson.length; i++) 
{
     var ftbl = '<div class="slide"><table  border="0" width="100%">';
 tbl = '<tr><td rowspan="3"><img src=' +
          base_url + 'content/images/' +
          sliderJson[i].image1 + ' height=340 width=300></td><td height="40"><h2>' +
          sliderJson[i].name + '</h2></td></tr><tr><td height="80"><p>' +
          sliderJson[i].summary + '</p></td></tr><tr><td><div class="contentContainerFooterLeft" style="width:90px;"><h4>' +
          sliderJson[i].price + '</h4></div><div class="redColouredDiv" id="contentContainerFooterRight" style="width: 8px;"><input type="button" value="' + sliderJson[i].id + '"' +
          'class="addToCart" id="addToCartBtn"></div></td></tr>';
  var ltbl = '</table></div>';
    $("#slideshowWindow").append(ftbl + tbl + ltbl);
}
 


    }
 
    
   
</script>




            
            
            
            <div class="slider_main">
            <div class='contentHeader'>
                <h3>Featured products</h3>
            </div>
            <div class='contentContainer'>
                <div id="slideshow">
     <div id="slideshowWindow">
                <!-- from here the details starts and it must be replaced by slider-->
             
                <!-- here the details ends-->
                  
                
     </div></div>
            </div>  </div>
