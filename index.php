<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BDI Plus</title>
      <!-- Bootstrap  -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <!-- Font Awesome  -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/demo.css">
  
  </head>
  <body>
 <main>
    <article>
        <div class="container">
           <p>BDI PLUS Assignment</p>
        </div>
    </article>
</main>

<div id="login-btn">
  <button type="button" class="login" data-toggle="modal" data-target="#loginModal">
    Popup
      </button>       
</div>

<div class="col-md-6 col-md-offset-3">
				<table class="table table-bordered" style="margin-top:30px;width:65%;margin-top:15%">
					<thead style="background: linear-gradient(blue, pink);">
						<th>FirstName</th>
						<th>LastName</th>
						<th>Contact</th>
					</thead>
					<tbody class="tbody">
						
					</tbody>
				</table>
			</div>
<?php
//Inserting Data into Database...
error_reporting(0);
$submit=$_POST['submit'];
if(isset($submit))
{
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
$conn=mysqli_connect("localhost","root","","registration");
if($conn)
{
    $query="INSERT INTO details VALUES('$name','$lname','$contact')";
    $result=mysqli_query($conn,$query); 
}
else{
    print "DB not Connected";
}
}
?>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
           <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
          <h4>Credentials popup</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form action="" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="name" id="name"placeholder="Enter firstName..." required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter LastName..."required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter Contact..."required>
            </div>
            <button type="submit" class="btn btn-info btn-block btn-round" name="submit">Submit</button>
          </form>
          </div>
          </div>
          </div>
          </div>
          </div>

  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <script src="jquery/jquery.min.js"></script>
	<script src="js/main.js"></script>
      
 <!-- script for popup  -->
  <script>
    $(document).ready(function() {            
   $('#loginModal').modal('show');
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
  </script>
</body>
</html>