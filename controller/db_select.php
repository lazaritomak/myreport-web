<!DOCTYPE html>
<?php
function SelectData($status)
{include ("db_connect.php");
//$sql="SELECT * FROM my_report.web_report";
$sql = "SELECT * FROM my_report.web_report where report_status=".$status." order by report_id desc";
//echo $sql;
//$result = $conn->query($sql);
$result=mysqli_query($conn,$sql);
$resultsize=count($result);
//$numrows=mysqli_num_rows($result);
//echo $numrows."<br>";
//echo $status;
if (mysqli_num_rows($result) > 0) {
//prepare array
//$report_content($resultsize);
//populate
// for($i=0;$i<$resultsize;$i++)
// {$row = mysqli_fetch_assoc($result);
	// $report_content($i)=$row["report_content"];
// }
  
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>
          	
		 <div class="timeline-row">
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
					<?php if ($row["report_content_path"]!=null){ ?>
					<img class="img-reText Here.sponsive" src="<?php echo $row["report_content_path"]; ?>" width="420" height="256"  />
					<?php } ?>
				<p>
					<?php echo $row["report_content"]; ?>
				</p> 
				<p align = "right">
				
				<input type="button" name="button" id="button" value="Dispatch" onclick="self.location='http://localhost/myreport/controller/login.php'"> 
				<input type="button" name="button2" id="button2" value="Reject" onclick="self.location='http://localhost/myreport/controller/reject.php'">
				</p>
				
            
          </div>
          </div>
    </div>
		 
    <?php } 
	
}	
 else {
    
	}
	$conn->close();
}
//SelectData();
?>