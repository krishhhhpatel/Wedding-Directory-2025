<?php
 require './class/atclass.php';
?>
<html>
<body>
    <!--<center><h3>E-SERVICE</h3></center>-->
    <hr/>
    <center> <h3>Booking Report</h3> </center>
    <hr/>
    <?php
    echo "Date & Time:".date('d-m-y-h:i:s a');
    ?>
    <form method="get">
        <?php
        $sql=mysqli_query($connection,"select * from tbl_vendor")or die(mysqli_error($con));
        echo "<select name='vendor_id'>";
        while($row=mysqli_fetch_array($sql))
        {
            echo "<option value='{$row['vendor_id']}'>{$row['vendor_name']}</option>";
        }
        echo "</select>";
?>
<input type="submit" value="search"/>
    </form>
    <a href="#" onclick="window.print();">print</a>
    <?php
    if(isset($_GET['vendor_id']))
    {
    $vendor_id=$_GET['vendor_id'];
    $booking=mysqli_query($connection,"select * from tbl_booking where vendor_id='{$vendor_id}'");
    $count=mysqli_num_rows($booking);
    echo"<br/>$count Records Found";
    echo "<table border='1' align='center'>";
    echo "<tr>";
    echo "<th>booking_id</th>";
    echo "<th>vendor_id</th>";
    echo "<th>user_id</th>";
    echo "<th>booking_date</th>";
    echo "<th>booking_status</th>";
    echo "<th>booking_address</th>";
    echo "</tr>";
    while($bookingrow=mysqli_fetch_array($booking))
								{
								    $sq=mysqli_query($connection,"select * from tbl_user where user_id='{$bookingrow['user_id']}'") or die(mysqli_error($con));
									$userrow=mysqli_fetch_array($sq);
									$bc=mysqli_query($connection,"select * from tbl_vendor where vendor_id='{$bookingrow['vendor_id']}'") or die(mysqli_error($con));
									$vendorrow=mysqli_fetch_array($bc);
									echo "<tr>";
                                    echo "<td>{$bookingrow['booking_id']}</td>";
									echo "<td>{$vendorrow['vendor_id']}</td>";
									echo "<td>{$bookingrow['user_id']}</td>";
									echo "<td>{$bookingrow['booking_date']}</td>";	
									echo "<td>{$bookingrow['booking_status']}</td>";	
									echo "<td>{$bookingrow['booking_address']}</td>";
									echo "</tr>";
								}
                                echo "</table>";
                            }
                            ?>
                            </html>