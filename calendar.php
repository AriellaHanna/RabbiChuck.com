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
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                    	<strong>Calendar</strong>
                    </h2>
                    <hr>
                    <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=vdivui7lqsel202bqqc77ffps4%40group.calendar.google.com&amp;color=%23691426&amp;ctz=America%2FNew_York" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
        </div>
<?php
	include("include/footer.php");
?>
</body>
</html>

