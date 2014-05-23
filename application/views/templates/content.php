<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId: '798589833503780',
            status: true, // check login status
            cookie: true, // enable cookies to allow the server to access the session
            xfbml: true  // parse XFBML
        });

        // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
        // for any authentication related change, such as login, logout or session refresh. This means that
        // whenever someone who was previously logged out tries to log in again, the correct case below 
        // will be handled. 
        FB.Event.subscribe('auth.authResponseChange', function(response) {
            // Here we specify what we do with the response anytime this event occurs. 
            if (response.status === 'connected') {
                // The response object is returned with a status field that lets the app know the current
                // login status of the person. In this case, we're handling the situation where they 
                // have logged in to the app.
                testAPI();
            } else if (response.status === 'not_authorized') {
                // In this case, the person is logged into Facebook, but not into the app, so we call
                // FB.login() to prompt them to do so. 
                // In real-life usage, you wouldn't want to immediately prompt someone to login 
                // like this, for two reasons:
                // (1) JavaScript created popup windows are blocked by most browsers unless they 
                // result from direct interaction from people using the app (such as a mouse click)
                // (2) it is a bad experience to be continually prompted to login upon page load.
                FB.login();
            } else {
                // In this case, the person is not logged into Facebook, so we call the login() 
                // function to prompt them to do so. Note that at this stage there is no indication
                // of whether they are logged into the app. If they aren't then they'll see the Login
                // dialog right after they log in to Facebook. 
                // The same caveats as above apply to the FB.login() call here.
                FB.login();
            }
        });
    };

    // Load the SDK asynchronously
    (function(d) {
        var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement('script');
        js.id = id;
        js.async = true;
        js.src = "//connect.facebook.net/en_US/all.js";
        ref.parentNode.insertBefore(js, ref);
    }(document));

    // Here we run a very simple test of the Graph API after login is successful. 
    // This testAPI() function is only called in those cases. 
    function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
            console.log('Good to see you, ' + response.name + '.');
        });
    }
</script>
<?php
$this->load->helper('currency');
?>
<style>

 .contentContainerFooterLeft
    {
        float: left;
       
      
    }
    .contentContainerFooterRight
    {
        
        float: left;
    }
    .sliderTable
    {
        border: 0px solid #000;
    }
    #sliderImage
    {
        width: 300px;
        float: left;
        margin-right: 10px;
    }
    
    #slideshow #slideshowWindow {
        width:100%;
        margin:0;
        padding:0;
        position:relative;
        overflow:hidden;
    }

    #slideshow #slideshowWindow .slide {
        margin:0;
        padding:0;
        float:left;
        position:relative;
    }

    #slideshow #slideshowWindow .slide .slideText {
        position: relative;
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

    .nav {
        display:block;
        text-indent:-10000px;
        position:absolute;
        cursor:pointer;
    }

    #leftNav {
        top:223px;
        left:10px;
        position: relative;
        z-index:999;
    }

    #rightNav {
        left:400px;      
        position: relative;      
        z-index:999;
    }

</style>



<script type="text/javascript">
    $(document).ready(function() {

        //adding item to the cart...

        $(".addToCarts").live('click', function() {

            $('.slide').css({opacity: 0.3});
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
                    $('.slide').css({opacity: 1});
                }
            });

        });
        // end of add to cart

        slider();
        var currentPosition = 0;
        var slideWidth = 800;
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
            currentPosition = ($(this).attr('id') == 'rightNav')
                    ? currentPosition + 1 : currentPosition - 1;

            //hide/show controls
            manageNav(currentPosition);
            clearInterval(slideShowInterval);
            slideShowInterval = setInterval(changePosition, speed);
            moveSlide();
        });

        function manageNav(position) {
            //hide left arrow if position is first slide
            if (position == 0) {
                $('#leftNav').hide()
            }
            else {
                $('#leftNav').show()
            }
            //hide right arrow is slide position is last slide
            if (position == numberOfSlides - 1) {
                $('#rightNav').hide()
            }
            else {
                $('#rightNav').show()
            }
        }


        /*changePosition: this is called when the slide is moved by the 
         timer and NOT when the next or previous buttons are clicked*/
        function changePosition() {
            if (currentPosition == numberOfSlides - 1) {
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
                    .animate({'marginLeft': slideWidth * (-currentPosition)});
        }

    });
</script>




<script>

    function slider()
    {
        var i = 0;

        var base_url = '<?php echo base_url(); ?>';
        var sliderJson = <?php echo $slider_json ?>;
        var currencyTag = '<?php echo get_currency(""); ?>';


        var tbl = "";
        for (i = 0; i < sliderJson.length; i++)
        {
            var ftbl = '<div class="slide"><table class="sliderTable">';
            tbl = '<tr><td rowspan="3"><img src=' +
                    base_url + 'content/uploads/images/' +
                    sliderJson[i].image1 + ' id="sliderImage" ></td><td style=" vertical-align: top;" ><div class="slideContents"><h2>' +
                    sliderJson[i].name + '</h2><p>' +
                    sliderJson[i].summary + '</p> <div class="sliderContent"><div class="contentContainerFooterLeft"><h4>' +
                    currencyTag + sliderJson[i].price + ' /-</h4></div><div  id="contentContainerFooterRight" ><input style="background-size:30%; height:53px" type="button" value="' + sliderJson[i].id + '"' +
                    'class="addToCarts" id="addToCartBtn"></div></div></div></td></tr>';
            var ltbl = '</table></div>';
            $("#slideshowWindow").append(ftbl + tbl + ltbl);
        }

    }

</script>

<script>
    var base_url = '<?php echo base_url(); ?>';
    $(document).ready(function() {
        //adding item to the cart...
        $(".addToCart").click(function() {
           $(this).parent().parent().parent().css({opacity: 0.3});
           
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
                    $(".contentContainerBox").css({opacity: 1.0});
                    $(".contentContainerBottom").css({opacity: 1.0})
                }
            });

        });

    });

</script>



<div id='content'>
    <!-- from slider starts-->

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

    <!-- the slider ends here-->

    <div class='contentHeader'>
        <h3>Recent products</h3>

    </div>
    <!-- <div id="loading"> <img width="30" src="<?php // echo base_url().'content/uploads/images/page-loader.gif' ;   ?>" alt="loading.."/><br><b>Loading...</b></div>-->   
    <div id="itemContent">
        <?php foreach ($product_info as $product) {
    
            ?>
            <div class='contentContainerBox'>

                <div class='contentContainerHeader'><a href='<?php echo base_url() . "index.php/view/details/" . $product->id ?>'><h3><?php echo $product->name; ?></h3>
                        <?php if ($product->like == "enabled") { ?>
                            <div class="fb-like" data-href="<?php echo base_url() . "/index.php/view/" . $product->id; ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                        <?php
                        } else {
                            
                        }
                        ?> 
                        <?php if ($product->share == "enabled") { ?>
                            <div class="fb-share-button" data-href="<?php echo base_url() . "/index.php/view/" . $product->id; ?>" data-type="button_count"></div>
                            <script src="//connect.facebook.net/en_US/all.js"></script>
                        <?php
                        } else {
                            
                        }
                        ?> 
                </div>
                <div class='contentContainerImage'>
                    <img src="<?php echo base_url() . "content/uploads/images/" . $product->image1; ?>" alt="No images" height="150" width="130"/>   
                </div></a>

                <div class="contentContainerBottom"> 
                    <div class='contentContainerFooterLeft'><h4><?php get_currency($product->price); ?></h4></div>
                    <div class="redColouredDiv" class='contentContainerFooterRight'>

                        <input type="button" value="<?php echo $product->id ?>" class="addToCart" id="addToCartBtn">  

                    </div>
                </div>

            </div>



        <?php } ?>
    </div>
</div>
<!-- left side content closed here -->

<div id='sidebar'>
    <div class="redColouredDiv" id='sidebarContent'>
        <div id="sideBarImage"><img src="<?php echo base_url() . "content/uploads/images/shopping-cart-icon-614x460.png"; ?>"/> </div>   
        <h3>Shopping Cart</h3>
    </div>
    <div class='cartItems' id="shopping_cart">
