<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Add Admin</center>
						</div>    
					</div>
				</h4>
			</div>
										
										
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
                <div class="form-group">
						<label>User Name</label>
							<input class="form-control" type ="text" name = "username" placeholder="Please enter username" required="true">
					</div>
                    <div class="form-group">
						<label>Password</label>
							<input class="form-control" type ="password" name = "password" placeholder="Please enter password" required="true">
					</div>
										
					<div class="form-group">
						<label>Firstname</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please enter firstname" required="true">
					</div>
					<div class="form-group">
						<label>Lastname</label>
							<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
					</div>
											
					<div class="form-group">
						<label>Phone</label>
						    <input type="number" class="form-control" name="Phone">

					</div>
					<div class="form-group">
						<label>E-mail</label>
						    <input type="email" class="form-control" name="email">

					</div>	
						<button name = "save" type="submit" class="btn btn-primary">Save Data</button>
				</form>  
			</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
										
										
										
										
			<?php 
				require_once 'dbcon.php';
				
				if (isset ($_POST ['save'])){
					$username=$_POST['username'];					
					$password=$_POST['password'];
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$phone=$_POST['Phone'];
					$email=$_POST['email'];
					
					
					$conn->query("INSERT INTO user(username,password,firstname,lastname,phone,email)values('$username','$password','$firstname','$lastname','$phone','$email')")or die($conn->error);
				}						
			?>					
        </div>
                                   
<!-- /.modal-content -->
                                
	</div>
                               
<!-- /.modal-dialog -->
								
</div>