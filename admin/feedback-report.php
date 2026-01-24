<?php
 require './class/atclass.php';
?>
<html>
<body>
    <!--<center><h3>E-SERVICE</h3></center>-->
    <hr/>
    <center> <h3>Feedback Report</h3> </center>
    <hr/>
    <?php
    echo "Date & Time:".date('d-m-y-h:i:s a');
    ?>
    <form method="get">
        <?php
        $sql=mysqli_query($connection,"select * from tbl_feedback")or die(mysqli_error($con));
        echo "<select name='feedback_id'>";
        while($row=mysqli_fetch_array($sql))
        {
            echo "<option value='{$row['feedback_id']}'>{$row['user_id']}</option>";
        }
        echo "</select>";
?>
<input type="submit" value="search"/>
    </form>
    <a href="#" onclick="window.print();">print</a>
    <?php
    if(isset($_GET['feedback_id']))
    {
    $feedback_id=$_GET['feedback_id'];
    $feedback=mysqli_query($connection,"select * from tbl_feedback where feedback_id='{$feedback_id}'");
    $count=mysqli_num_rows($feedback);
    echo"<br/>$count Records Found";
    echo "<table border='1' align='center'>";
    echo "<tr>";
    echo "<th>feedback_id</th>";
    echo "<th>user_id</th>";
    echo "<th>feedback_details</th>";
    echo "<th>feedback_date</th>";
    echo "<th>vendor_id</th>";
    echo "</tr>";
    while($feedbackrow=mysqli_fetch_array($feedback))
								{
								    $sq=mysqli_query($connection,"select * from tbl_user where user_id='{$feedbackrow['user_id']}'") or die(mysqli_error($con));
									$userrow=mysqli_fetch_array($sq);
									$bc=mysqli_query($connection,"select * from tbl_vendor where vendor_id='{$feedbackrow['vendor_id']}'") or die(mysqli_error($con));
									$vendorrow=mysqli_fetch_array($bc);
									echo "<tr>";
                                    echo "<td>{$feedbackrow['feedback_id']}</td>";
									echo "<td>{$feedbackrow['user_id']}</td>";
									echo "<td>{$feedbackrow['feedback_details']}</td>";
									echo "<td>{$feedbackrow['feedback_date']}</td>";	
									echo "<td>{$feedbackrow['vendor_id']}</td>";	
									//echo "<td>{$feedbackrow['booking_address']}</td>";
									echo "</tr>";
								}
                                echo "</table>";
                            }
                            ?>
                            </html>