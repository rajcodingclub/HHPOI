
<?php
    $con=mysqli_connect('localhost','root','','history');
    if(isset($_POST['sb']))
    {
        $userid=$_POST['us'];
        $password=$_POST['ps'];
        $query="INSERT INTO logi(USERID,PASSWORD)VALUES('$userid','$password')";
        $run=mysqli_query($con,$query);
    }
    if($run)
{
    echo "Your data has been submitted successfully";
}
else
{
    echo "query failed...";
}
    
    ?>
