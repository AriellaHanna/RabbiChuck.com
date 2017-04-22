<?php
function createNavBar(){
	$page = array("index.php"=>"Home", "blog.php"=>"Blog", "photos.php"=>"Photos", "calendar.php"=>"Calendar", "donate.php"=>"Donate", "contact.php"=>"Contact");
	echo "<nav class=\"navbar navbar-default\" role=\"navigation\">";
    	echo "<div class=\"container\">";
    		echo "<div class=\"navbar-header\">";
    			echo "<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">";
                	echo "<span class=\"sr-only\">Toggle navigation</span>";
                	echo "<span class=\"icon-bar\"></span>";
                	echo "<span class=\"icon-bar\"></span>";
                	echo "<span class=\"icon-bar\"></span>";
            	echo "</button>";
            	echo "<a class=\"navbar-brand\" href=\"index.php\">Business Casual</a>";
        	echo "</div>";
        	echo "<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">";
            	echo "<ul class=\"nav navbar-nav\">";
                	foreach($page as $x => $x_value) {
                		echo "<li>";
                		echo "<a href=\"" . $x . "\">" . $x_value . "</a>";
                		echo "</li>";
                	}
            	echo "</ul>";
        	echo "</div>";
    	echo "</div>";
	echo "</nav>";
}
?>