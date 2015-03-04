<?php 

function UpdateReport()
{include "db_connect.php";

$sql = "UPDATE my_report.web_report SET report_status='dispatch' WHERE report_id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
}

UpdateReport();
?> 


