<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "land";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
	die('Could not Connect My Sql:' . mysql_error());
}
$query = mysqli_query($conn,"SELECT AVG(rating) as AVGRATE from rating_data");
$row = mysqli_fetch_array($query);
$AVGRATE=$row['AVGRATE'];
$query = mysqli_query($conn,"SELECT count(rating) as Total from rating_data");
$row = mysqli_fetch_array($query);
$Total=$row['Total'];
$query = mysqli_query($conn,"SELECT count(remark) as Totalreview from  rating_data");
$row = mysqli_fetch_array($query);
$Total_review=$row['Totalreview'];
$review = mysqli_query($conn,"SELECT remark,rating from rating_data where order by id desc limit 4 ");
$rating = mysqli_query($conn,"SELECT count(*) as Total,rating from rating_data group by rating order by rating desc");
?>