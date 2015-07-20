<!DOCTYPE HTML>
<html>
<head>
    <title>Codeigniter Install Mysql Database</title>

	<!-- VENDOR COMPONENTS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
         <p align="center"> Desenvolvido por: <b>joelferreira.eu</b> </p>
    </div><!-- /container -->   

</body>
</html>