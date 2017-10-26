<html>
<head>
    <title>Login page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="World Payment Corp">
	<meta name="author" content="World Payment Corp">
    <link id="bs-css" href="<?php echo $this->url->getStatic('backend/template/'); ?>css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href='<?php echo $this->url->getStatic('backend/'); ?>css/backend.css' rel='stylesheet'>
	<link href="<?php echo $this->url->getStatic('backend/template/'); ?>css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo $this->url->getStatic('backend/template/'); ?>css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo $this->url->getStatic('backend/template/'); ?>css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo $this->url->getStatic('backend/template/'); ?>css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo $this->url->getStatic('backend/template/'); ?>css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo $this->url->getStatic('backend/template/'); ?>css/chosen.css' rel='stylesheet'>
	<link href='<?php echo $this->url->getStatic('backend/template/'); ?>css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo $this->url->getStatic('backend/template/'); ?>css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo $this->url->getStatic('backend/template/'); ?>css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo $this->url->getStatic('backend/template/'); ?>css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo $this->url->getStatic('backend/template/'); ?>css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo $this->url->getStatic('backend/template/'); ?>css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo $this->url->getStatic('backend/template/'); ?>css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo $this->url->getStatic('backend/template/'); ?>css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo $this->url->getStatic('backend/template/'); ?>css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo $this->url->getStatic('backend/template/'); ?>css/uploadify.css' rel='stylesheet'>
    
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?php echo $this->url->getStatic('backend/template/'); ?>img/favicon.ico">
    
	<!-- jQuery -->
	<script src="<?php echo $this->url->getStatic('backend/template/'); ?>js/jquery-1.7.2.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		var cloudSourceURL = '<?php echo $this->url->getStatic('backend/template/');?>';
	</script>
	<!-- L validate util -->
	<script src="<?php echo $this->url->getStatic('shared/js/l-validate-util.js'); ?>"></script>
    <script type="text/javascript">
		$(document).ready(function() {
			var loginEmail = $("#email");
			var loginEmailMsg = loginEmail.next();
			var loginPassword = $("#password");
			var loginPasswordMsg = loginPassword.next();
			var validLoginEmail = true;
			var validLoginPassword = true;
			loginEmail.on("keyup", function(){
				var self = $(this);
				var email = self.prop("value");
				if(LValidator.validEmail(email)==false)
				{
					loginEmailMsg.text("Enter a valid email!");
					validLoginEmail = false;
					return;
				}
				loginEmailMsg.text("");
				validLoginEmail = true;
			});
			loginPassword.on("keyup", function(){
				var self = $(this);
				var password = self.prop("value");
				if(password.length<1)
				{
					loginPasswordMsg.text("We need your password!");
					validLoginPassword = false;
					return;
				}
				loginPasswordMsg.text("");
				validLoginPassword = true;
			});
			var validateLoginForm = function(){
				loginEmail.trigger("keyup");
				loginPassword.trigger("keyup");
			};
			var submitLoginForm = function(){
				validateLoginForm();
				if(validLoginEmail && validLoginPassword)
				{
					$("#login-form").submit();
				}
			};
			$("#login-form").on("keyup", "input", function(event){
				if (event.which == 13)//Enter
				{
					submitLoginForm();
				}
			});
			$("#btn-login").on("click", function(event){
				submitLoginForm();
			});
		});
	</script>
    <div class="container-fluid">
		<div class="row-fluid">
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to World Payment Corp</h2>
				</div><!--/span-->
			</div><!--/row-->
			<div class="row-fluid">
				<div class="well span5 center login-box">
                <?php
					if(isset($message)) 
					{
				?>
					<div class="alert alert-danger">
						<?php echo $message; ?>
					</div>
                <?php
					}
				?>
					<?php echo Phalcon\Tag::form(array('dashboard/login?action=login', 'method'=> 'post', "class"=> "form-horizontal bin-login-form", "id" => "login-form")); ?>
						<fieldset>
							<div class="input-prepend" title="Email" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span>
                                <input autofocus class="input-large span10" name="email" id="email" type="text" placeholder="Enter your email" />
                                <div style="text-align: left;margin: 2px 0px 0px 30px;color: #bd4247"></div>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span>
                                <input class="input-large span10" name="password" id="password" type="password" placeholder="Enter your password" />
                                <div style="text-align: left;margin: 2px 0px 0px 30px;color: #bd4247"></div>
							</div>
							
							<div class="clearfix"></div>
                            
							<div class="input-prepend">
								<label for="remember">
                                <input type="checkbox" id="remember" name="remember-me" />Remember me</label>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<input id="btn-login" type="button" class="btn btn-primary" value="Login" />
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
		</div><!--/fluid-row-->
	</div><!--/.fluid-container-->
	<!-- external javascript
</body>
</html>
<!--==========-->
<img align="center" width="400px" src="http://image2.tin247.com/pictures/2016/05/18/vsr1463506393.jpg" alt="">