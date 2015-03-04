
<?php
include  "includes.php";
?>

<html lang="en">

<head>

    

    <title>MyReport: Mobile Community Reporting</title>

    <!-- Bootstrap Core CSS -->
   
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" media="all" rel="stylesheet">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" media="all" rel="stylesheet">
<link href="css/styles.css" media="all" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.1/modernizr.min.js"></script>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <!-- Javascript --> 
  
	
</head>

<body>

    <div id="wrapper">

       <!-- Sidebar -->
         <div id="sidebar-wrapper">
        </div> 
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->    
        
  
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    
                    
                    
                                
                  
         <form id = "form1"  >              
    <div class="timeline animated">
	<?php include "controller/db_select.php";
	 SelectData("'recent'"); ?> 
	
	 <!-- start of panel -->
	<!-- <div class="timeline-row">
	  <div class="timeline-time">
          <small>Oct 30</small>4:53 PM
          </div>
          <div class="timeline-icon">
          <div class="bg-danger">
            <i class="fa fa-fire"></i>
          </div>
         </div>
         <div class="panel timeline-content">
				<div class="panel-body">
          
				<h2>
              Subject of report
				</h2>
				<img class="img-responsive" src="#" />
				<p>
				Text Here.
				</p> 
				<input type="button" name="button2" id="button2" value="Dispatch">
                <input type="button" name="button" id="button" value="Reject">
            
          </div>
          </div>
    </div> -->
	<!-- end of panel -->
	
    </form>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>                      
                  </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
   

</body>

</html>
