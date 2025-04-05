<?Php
$conn =  mysqli_connect("localhost","root","","testing");

$name =$_POST['name'];
$contact =$_POST['contact'];
$city=$_POST['city'];

$sql ="INSERT INTO student(stud_name,stud_contact,stud_city) VALUES('$name','$contact','$city')";

$result = mysqli_query($conn,$sql);
if($result)
{
    echo"<script>alert('data inserted sucessfully');</script>";
}
else{
    echo "data not inserted!";
}

?>