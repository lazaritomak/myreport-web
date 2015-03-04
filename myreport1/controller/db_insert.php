<?php 
function InsertData()
{include "db_connect.php";

$sql = "INSERT INTO `my_report`.`web_report`
(`user_id`,`agency_id`,`report_content`,`report_content_path`,`report_status`,`report_coordinates`) 
VALUES (1,'1','test',null,'recent','0,0')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
}

InsertData();
include "include.php";



?>