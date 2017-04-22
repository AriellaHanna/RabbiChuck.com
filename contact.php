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
                        <strong>Contact Form</strong>
                    </h2>
                    <hr>
                    <p>Have any questions or comments for Rabbi Chuck?  Leave them here!</p>

                    <form role="form" action="include/form-handler-nodb.php" method="post">
                        <div class="row">
                        	<p id="returnmessage"></p>
                            <div class="form-group col-lg-4">
                                <label>Name (required)</label>
                                <input type="text" id="name" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address (required)</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" id="phone" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message (required)</label>
                                <textarea id="message" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="button" id="submit" value="Submit" class="btn btn-default">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
<?php
	include("include/footer.php");	
?>
	<script src="js/contact.js"></script>
     <!-- Ajax -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</body>
</html>
