<!DOCTYPE html>
<html lang="en">
<?php
	include("include/functions.php");
	include("include/header.php");
?>
</head>
<body>
	<div class="brand">Rabbi Chuck Diamond</div>
	<?php
		createNavBar();
	?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <img class="img-med" src="img/bench.jpg" alt="Rabbi Chuck on a bench in Florida">
                    <h2 class="brand-before">
                        <small>Hi, I'm</small>
                    </h2>
                    <h1 class="brand-name">Rabbi Chuck</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">About Me
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left img-small" src="img/intro-pic.jpg" alt="Rabbi Chuck">
                    <hr class="visible-xs">
                    <p>There are so many things to know about me.  This is where I will put them.</p>
                </div>
            </div>
        </div>
<?php
	include("include/footer.php");
?>
</body>
</html>
