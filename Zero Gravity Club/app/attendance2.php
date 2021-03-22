<?php
require_once('config3.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="attendance2.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <title>Attendance Form</title>
</head>
<body>

<div>
	<?php
	
	?>	
</div>

<!--HEADER-->    
<header class="header">
    <div class="container">
        <h2 class="heading">ZERO GRAVITY CLUB</h2>
    </div>
    
</header>   



<!--Navbar-->
<div class="container-bg">        
<div class="container">
    <nav class="navbar navbar-bg">
        <a href="index.html" class="nav-links">Home</a>
        <a href="events.html" class="nav-links">Events</a>
        <a href="http://localhost//CSS-Responsive/Zero%20Gravity%20Club//app/attendance2.php" class="nav-links">Attendance</a>
        <a href="achievements.html" class="nav-links">Achievements</a>
        <a href="committee.html" class="nav-links">Committee</a>       
    </nav>
</div>
</div>

<!--Attendance-section-->

<section class="attendance text-center">
    <div class="container">
    <h2>
        <strong> Already a participant or a member of the ZERO GRAVITY CLUB ?</strong>
        
    </h2>        
     <p>
        <i> Submit your attendance here.</i>
    </p>
    

    <form class="row g-3 needs-validation mg-top" action="attendance2.php" method="post">
        
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">First Name</label>
          <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter your First Name..." required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your Last Name..." required>
          <div class="invalid-feedback">
            Please select a valid state.
          </div>
        </div>

        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Course</label>
          <input type="text" class="form-control" id="course" name="course" placeholder="Enter your Course..." required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>


        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label" >Roll Number</label>
          <div class="input-group has-validation">
            
            <input type="text" class="form-control" name="rollno" id="rollno" 
            aria-describedby="inputGroupPrepend" placeholder="Eg: TDIT025A" required>
            <div class="invalid-feedback">
                Please select a valid state.
              </div>
            
          </div>
        </div>
           
        
        <div class="col-12">
          <button class="submit" type="submit" id="register" name="create">Submit Attendance</button>
        </div>
        </div>
      </form>

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" 
integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" 
integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var course 		= $('#course').val();
			var rollno 	= $('#rollno').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process3.php',
					data: {firstname: firstname,lastname: lastname,course: course,rollno: rollno},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>