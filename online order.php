<?php
$con=mysqli_connect("localhost","root","");
$db1=mysqli_select_db($con,"hotel2");
$ooname=$_POST["ordername"];
$ooaddress=$_POST["orderadd"];
$ooemail=$_POST["ordermail"];
$oofoodchoice=$_POST["orderchoice"];
$qry1="insert into online order(oname,oaddress,oemail,ofoodchoice) values('$ooname', '$ooaddress', '$ooemail','$oofoodchoice')";
$qry2=mysqli_query($con, $qry1);
if($qry2)
{
    echo "data added";
}
else
{
    echo "data not added";
}

?>