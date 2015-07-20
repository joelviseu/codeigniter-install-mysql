<!DOCTYPE HTML>
<html>
<head>
    <title>Xmanager - LOGIN</title>

	<!-- VENDOR COMPONENTS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/basic.css">	
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/basic.js"></script>  		
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">	
	<script src="http://crypto-js.googlecode.com/svn/tags/3.0.2/build/rollups/hmac-sha256.js"></script>
	<script src="http://crypto-js.googlecode.com/svn/tags/3.0.2/build/components/enc-base64-min.js"></script>
</head>
<body>
	<div class="container" style="background:#Fff">
        <h1  align="center"><span class="btn-success" style="padding:0 10px;font-size:46px;">X</span> Install </h1>
        <h4  align="center"><i class="fa fa-lock"></i> Instalar automático Xmanager</h4>
        <hr/>
            <form class="form-signin" action="<?php echo base_url();?>xinstall/exec" method="post" id="logar"> 
            
            <div class="col-sm-6" style="font-size:16px;">
            
               <div class="col-xs-4 " style="text-align:right;line-height:30px">
            	Hostname</div>
	            	<div class="col-xs-8"> 
	            		<input type="text" name="hostname" class="form-control" placeholder="default:'localhost'">
	            	</div>
            	<div class="col-xs-4 " style="text-align:right;line-height:30px">
            	Database</div>
	            	<div class="col-xs-8"> 
	            		<input type="text" name="database" class="form-control" placeholder="database_name">
	            	</div>
	            <div class="col-xs-4 " style="text-align:right;line-height:30px">
            	Username</div>
	            	<div class="col-xs-8"> 
	            		<input type="text" name="username" class="form-control" placeholder="database_username">
	            	</div>
	            <div class="col-xs-4 " style="text-align:right;line-height:30px">
	            Password</div>
	            	<div class="col-xs-8"> 
	            		<input type="text" name="password" class="form-control" placeholder="database_password">
	            	</div>	
	           <div class="col-xs-4 " style="text-align:right;line-height:30px">
	            Force OverWrite </div>
	            	<div class="col-xs-8"> 
	            		<input type="checkbox" name="force" > Yes
	            	</div>
	            	<div style="clear:both"></div>
	            <div class="col-xs-4 " style="text-align:right;line-height:30px">
	            Dummy Data </div>
	            	<div class="col-xs-8"> 
	            		<input type="checkbox" name="dummy" > Yes
	            	</div>
			</div>  
            <div class="col-sm-6">
            	<div class="col-xs-4"></div>
            	<div class="col-xs-8"></div>
            </div>
            <div style="clear:both"></div>
              <br/>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  >Instalar</button>
            </form>           
         <p align="center"> Desenvolvido por: <b>uxcriativo.com</b> </p>
    </div><!-- /container -->
    

</body>
</html>