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
</script><?php
$this->load->helper('currency');
?>




<script type="text/javascript">
	$(document).ready(function() {
           
             //adding item to the cart...
             
        $(".addToCarts").live('click',function() {
           
           $('.slide').css({ opacity: 0.3 });
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
                  $('.slide').css({ opacity: 1 });
                }
            });
            
        });
            // end of add to cart
            
           
		
		

});
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
    
    
    <!-- the slider ends here-->
    
<div class='contentHeader'>
    <h3><?php if(!empty($categoryId)){ foreach ($categoryId as $pages){ $pageTitle = $pages->category_name; echo $pages->category_name;} }
    else{
        echo "<h3>The product you are searching is not found! </h3>";
    }?></h3>

</div>
<div id="itemContent">
    <?php foreach ($product as $product_list) {
        ?>
        <div class='contentContainerBox'>

            <div class='contentContainerHeader'><a href='<?php echo base_url() . "index.php/view/details/" . $product_list->id ?>'><h3><?php echo $product_list->name; ?></h3>
            <?php if ($product_list->like == "enabled") { ?>
                            <div class="fb-like" data-href="<?php echo base_url() . "/index.php/view/" . $product_list->id; ?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
                        <?php
                        } else {
                            
                        }
                        ?> 
                        <?php if ($product_list->share == "enabled") { ?>
                            <div class="fb-share-button" data-href="<?php echo base_url() . "/index.php/view/" . $product_list->id; ?>" data-type="button_count"></div>
                            <script src="//connect.facebook.net/en_US/all.js"></script>
                        <?php
                        } else {
                            
                        }
                        ?> 
            </div>
            <div class='contentContainerImage'>
                <img src="<?php echo base_url() . "content/uploads/images/" . $product_list->image1; ?>" alt="No images" height="150" width="130"/>   
            </div></a>

          <div class="contentContainerBottom"> 
                    <div class='contentContainerFooterLeft'><h4><?php get_currency($product_list->price); ?></h4></div>
                    <div class="redColouredDiv" class='contentContainerFooterRight'>

                        <input type="button" value="<?php echo $product_list->id ?>" class="addToCart" id="addToCartBtn">  

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
