<!-- Css and head tag data-->
<?php include('index_header.php'); ?>
			<!-- communicate with database-->
			<?php include('functions/dbcon.php'); ?>

    <body>
        
            <section>				
			
                <div id="container_demo" >
				
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                    	<!-- Form in seperate files-->
                        <div id="login" class="animate form">
								<?php include('login_form.php'); ?>
                        </div>
                        <div id="register" class="animate form">
								<?php include('sign_up_form.php'); ?> <!-- used a css from animate customs-->
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>