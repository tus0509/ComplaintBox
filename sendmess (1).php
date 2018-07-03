<?php
$n=filter_input(INPUT_POST, 'n');
$e=filter_input(INPUT_POST, 'e');
$msg=filter_input(INPUT_POST, 'msg');


$conn=mysqli_connect("fdb20.your-hosting.net", "2749070_comp", "tac12345", "2749070_comp");
        
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
    $sql="INSERT INTO message (n,e,msg)
    values('$n','$e','$msg')";
    if($conn->query($sql)){
        echo "Thank you for your feedback. Means a lot!.";
    }
    
    else
        echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
?>
