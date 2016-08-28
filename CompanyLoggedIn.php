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
  <script>
	$(document).ready(function(){
		$("#eligible_no_btn").click(function(){
			var hsmarks = $("#hs_marks").val();
			var ssmarks = $("#ss_marks").val();
			var graduationmarks = $("#graduation_marks").val();
			console.log(hsmarks);
			console.log(ssmarks);
			console.log(graduationmarks);
			$("#eligible_no_result").load("fetch_no_of_students.php", {hs_marks: hsmarks, ss_marks: ssmarks, graduation_marks: graduationmarks });
		});
	});
	
  </script>
	
 </head>

<body style="background-color:#1abc9c">
	


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

      <div class="col-md-9 col-sm-9" style="padding:10px">
        <div class="postnewjob" >
            <form class="form-horizontal" >
			<div class="panel panel-primary" >
				<div class="panel-heading">General</div>
				<div class="panel-body" style="background-color:#ffdd00"> 
		
              <div class="form-group">
				<div class="col-sm-2"></div>
                <label for="profilename" class="col-sm-2 control-label">Profile </label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="profile" >
                </div>
              </div>
              <div class="form-group">
					<div class="col-sm-2"></div>
                    <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" id="profile_description" rows="5" cols="20"></textarea>
                     </div>
                    
              </div>
			  <div class="form-group">
					<div class="col-sm-2"></div>
                    <label for="ctc" class="col-sm-2 control-label">CTC(Annum)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="ctc" >
                     </div>
                    
              </div>
		</div>
		</div>
			  <div class="panel panel-primary" >
				<div class="panel-heading">Educational Qualifications</div>
				<div class="panel-body" style="background-color:#ffdd00">
			  <div class="form-group">
					<div class="col-sm-2"></div>
                    <label for="hs_marks" class="col-sm-2 control-label" >10<sup>th<sup></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="hs_marks" >
                     </div>
                    
              </div>
			  <div class="form-group">
					<div class="col-sm-2"></div>
                    <label for="ss_marks" class="col-sm-2 control-label">12<sup>th<sup></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="ss_marks" >
                     </div>
                    
              </div>
			  <div class="form-group">
					<div class="col-sm-2"></div>
                    <label for="graduation_marks" class="col-sm-2 control-label">Graduation</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="graduation_marks" >
                     </div>
                    
              </div>
		</div>
		</div>
			  <br><br><br>
			  <div class="form-group">
                    <div class="col-sm-1"></div>
					<div class="col-sm-5">
						<button class="btn btn-primary" style="width:300px" id="eligible_no_btn" >View Number of Eligible Students</button>
					</div>
					<div class="col-sm-5">
						<button class="btn btn-primary"  style="width:300px" id="eligible_details_btn">View Eligible Students Details</button>
					</div>
                    <div class="col-sm-1"></div>
              </div>
			  <div  class= "alert alert-success"  ><p id="eligible_no_result"></p></div>
			  
			  <div id="eligible_details_result"></div>
			  
              <div class="col-sm-4"></div>
              <div class="col-sm-6"><button type="submit" class="btn btn-danger" style="width:200px">Post</button></div>
                <div class="col-sm-3"></div>
				
			  <br><br><br>
          </form>
        </div>
      </div>
    </div>
  </div>


</div>


</body>
</html>
