<?php 
require 'includes/header.php';
include 'includes/header-section.php';
?>  
    <div class="main-content">
    	<div class="form-container">
    		<form action="controllers/login_controller.php" method="post" id="login-form">
    			<fieldset>
    				<?php
						if (isset($_GET['error'])) {
						    echo '<p class="error">'.$_GET['error'].'</p>';
						} else {
						    // Fallback behaviour goes here
						}
                    ?>
    				<h4>Login Here</h4>
    				<div class="form-group">
    					<input id="username" type="text" name="username">
    			    </div>
    			    <div class="form-group">
    					<input id="password" type="password" name="password">
    			    </div>
    			    <input type="submit" class="btn" name="submit">
    			</fieldset>
    		</form>
    	</div>
    </div>
    <script>
	$(function() {

    $('#login-form').validate({ // initialize the plugin
    	wrapper: 'div',
        errorLabelContainer: "#messageBox",
        rules: {
            username: {
                required: true
            },
            password: {
                required: true,
                minlength: 6
            }
        },
        submitHandler: function (form) { // for demo
        	//console.log('done');
            //$('login-form').submit();
            return true; // for demo
        }
    });

	});
	</script>
<?php 
require 'includes/footer.php';
?>