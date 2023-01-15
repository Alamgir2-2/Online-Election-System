
<?php
	if(!$bool){
?>

<div class="modal fade" id="edit_admin<?php  echo $user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Edit Admin</center>
						</div>    
					</div>
				</h4>
			</div>
			
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
					<input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>">
					
					<div class="form-group">
						<label>User Name</label>
							<input class="form-control" type ="text" name = "username" value = "<?php echo $row ['username']?>">
					</div>
	
				
					<div class="form-group">
						<label>Password</label>
							<input class="form-control" type ="password" name = "password" required="true" value = "<?php echo $row ['password']?>">
					</div>
					<div class="form-group">
						<label>Firstname</label>
							<input class="form-control"  type = "text" name = "firstname" value = "<?php echo $row ['firstname']?>">
					</div>
                    <div class="form-group">
						<label>Lasstname</label>
							<input class="form-control"  type = "text" name = "laststname" value = "<?php echo $row ['lastname']?>">
					</div>
					
					<div class="form-group">
						<label>Phone Number</label>
						    <input type="number" name="phone" class="form-control" value="<?php echo $row ['phone']?>">
							
					</div>

                    <div class="form-group">
						<label>E-mail</label>
						    <input type="email" name="email" class="form-control" value="<?php echo $row ['email']?>">
							
					</div>

					<button name = "update" type="submit" class="btn btn-primary">Save Data</button>
				</form>
			</div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
            </div>
		</div>
	</div>
</div>
<!-- /.modal-content -->
                               
	<?php 
		require 'dbcon.php';
		
		if(ISSET($_POST['update'])){
			$bool = true;
			$position=$_POST['username'];
            $password=$_POST['password'];
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$user_id=$_POST['user_id'];
		
			$conn->query("UPDATE user SET username = '$position',password =$password, firstname = '$firstname', lastname = '$lastname', phone = '$phone', email = '$email' WHERE user_id = '$user_id'")or die($conn->error);
			echo "<script> window.location='admin.php' </script>";
		}	
	?>
								
<?php
	}
?>