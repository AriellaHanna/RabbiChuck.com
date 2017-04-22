<!DOCTYPE html>
<html lang="en">
<?php
	include("include/functions.php");
	include("include/header.php");
?>
    <style>
    div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
	}

	div.img:hover {
    border: 1px solid #777;
	}

	div.img img {
    width: 100%;
    height: auto;
	}

	div.desc {
    padding: 15px;
    text-align: center;
	}
	</style>

</head>

<body>

    <div class="brand">Rabbi Chuck Diamond</div>
    <?php
		createNavBar();
	?>

<div class="container">

        <div class="row">
            <div class="box">
            	<div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Photo Album</strong>
                    </h2>
                    <hr>
                </div>
            	<a data-flickr-embed="true"  href="https://www.flickr.com/gp/doublediamondz/9Lo02w" title="RabbiChuck.com">
            		<img class="img-big img-responsive img-center img-border" src="https://c1.staticflickr.com/4/3792/33066758301_b3a5b0445b_c.jpg" alt="RabbiChuck.com">
            	</a>
            	<div class="col-lg-12">
                    <hr>
                    <h5 class="intro-text text-center">
						Click the photo to be taken to Rabbi Chuck's Flickr album
                    </h5>
                    <hr>
                </div>
            </div>
        </div>c      	
</div>
<?php
	include("include/footer.php");
?>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    
    <!-- Flickr -->
    <script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>

</body>

</html>
