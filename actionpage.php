<?php
$firstname=filter_input(INPUT_POST, 'firstname');
$lastname=filter_input(INPUT_POST, 'lastname');
$email=filter_input(INPUT_POST, 'email');
$password=filter_input(INPUT_POST,'password');
$gender=filter_input(INPUT_POST, 'gender');
$dob=filter_input(INPUT_POST, 'dob');
$course=filter_input(INPUT_POST, 'course');
$worker=filter_input(INPUT_POST, 'worker');
$roomno=filter_input(INPUT_POST, 'roomno');
$complain=filter_input(INPUT_POST, 'complain');

$conn=mysqli_connect("fdb20.your-hosting.net", "2749070_comp", "tac12345", "2749070_comp");
        
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
    $sql="INSERT INTO complaint (firstname,lastname,email,password,gender,dob,course,worker,roomno,complain)
    values('$firstname','$lastname','$email','$password','$gender','$dob','$course','$worker','$roomno','$complain')";
    if($conn->query($sql)){
        echo "Your complaint has been registered.";
    }
    
    else
        echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
?>
