<!-- css reference file-->
<?php include('headers/css_ref.php'); ?> 
<!-- is user logged in-->   
<?php include('session.php'); ?>    
<!--data that will be needed-->
<?php $search = $_POST['search']; ?>
    <body>
	<?php include('navbar.php'); ?>
			<div id="masthead">  
				<div class="container">
					<?php include('headers/heading.php'); ?><!--main data stuff-->
				</div><!--clsoning of container1-->
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="top-spacer"> </div>
					</div>
					</div> 
				</div><!-- cllosing of container2-->
			</div>
<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <div class="panel">
        <div class="panel-body">
      
          <div class="row">    
            <br>
	<?php
	//search function search user with siginifcant data
	$query = $conn->query("select  * from members where firstname LIKE '%$search%' or lastname  LIKE '%$search%'");
	$count = $query->rowcount();
	if ($count > 0){ 
	while($row = $query->fetch()){
	$posted_by = $row['firstname']." ".$row['lastname'];
	$posted_image = $row['image'];
	$friend_id = $row['member_id'];
	?>
            <div class="col-md-2 col-sm-3 text-center">
             <img  src="<?php echo $posted_image; ?>" style="width:100px;height:100px" class="img-circle"></a>
            </div>
            <div class="col-md-10 col-sm-9">
             	<div class="alert"><?php echo $posted_by; ?></div>
        
              </div>
              <br><br>
            </div>
	<?php } }else{ ?> &nbsp;&nbsp;&nbsp;&nbsp; No Comrade appeared.  <?php } ?><!--if no siginficant data is found printed this-->		
          </div>
          <hr>
        </div>
      </div>
   	</div>
  </div>
</div>
<?php include('footer.php'); ?>
    </body>
</html>