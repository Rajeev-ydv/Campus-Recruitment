<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Campus Recruitment System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>

<body>

<div class="container">
  	<div class="row">		
  		<!-- used to place the image -->
  		<img class="col-sm-12 col-md-12 col-xs-12" src="images/eCampus_Banner_local.jpg" height="175px" width="auto">
  	</div>
  	
  	<nav class="navbar navbar-default">
  		<div class="container-fluid">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="	#bs-example-navbar-collapse-1" aria-expanded="false">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
      		<a class="navbar-brand" href="#">E-Campus</a>
    	</div>

    	<!-- Collect the nav links, forms, and other content for toggling -->
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	<ul class="nav navbar-nav navbar-right">
        	<li><a href="#">Link <span class="sr-only">(current)</span></a></li>
        	<li><a href="#">Link</a></li>
        	<li id="loginbox" class="lbtn"><a id="loginopen" data-target="#login" data-toggle="modal" href="#">Login</a></li>
      	</ul>
     

     	<ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">About us</a></li>
            <li><a href="#">Developers</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
	<!-- Login page -->

  <div class="container-fluid" >
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <div class="side">
          <ul class="sidebar_nav nav nav_list">
            <li><a href="#">Student Login</a></li>
            <li><a href="#">Company Login</a></li>
            <li><a href="#">Admin Login</a></li>
            
          </ul>
        </div>
      </div>

      <div class="col-md-9 col-sm-9">
        <div class="currentjobopenings">
            <table class="table table-stripped">
				<?php
					$conn = new mysqli("localhost", "root", "", "campusfinale");

					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
						echo "<p> Failed to connect</p>";
					} 
					else
					{
						$sql = "select * from currentjob;";
						$result = $conn->query($sql);
						echo " <thead>
							<tr>
							<th>Company</th>
							<th>Profile</th>
							<th>Description</th>
							<th>CTC(per annum)</th>
							<th>Posted On </th>
							<th>Last Date</th>
						</tr>
						</thead>
						<tbody>";
					
						if($result->num_rows > 0)
						{
							while($row = $result->fetch_assoc())
							{
								echo "<tr><td>".$row["NAME"]."</td><td>".$row["PROFILE"]."</td><td>".$row["DESCRIPTION"]."</td><td>".$row["CTC"].
								 "</td><td>".$row["POST_DATE"]."</td><td>".$row["LAST_DATE"]."</td></tr>";
							}
						}
						else
							echo $conn->error;
						echo "</tbody>";
						
					}

					
				?>
				
			</table>
			
        </div>
      </div>
    </div>
  </div>


</div>


</body>
</html>
