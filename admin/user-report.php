<?php
 require './class/atclass.php';
?>
<html>
<body>
    <!--<center><h3>E-SERVICE</h3></center>-->
    <hr/>
    <center><h3>User Report</h3></center>
    <hr/>
    <?php
    echo "Date & Time:".date('d-m-y-h:i:s a');
    ?>
    <form method="get">
        <?php
        $sql=mysqli_query($connection,"select * from tbl_user")or die(mysqli_error($con));
        echo "<select name='user_id'>";
        while($row=mysqli_fetch_array($sql))
        {
            echo "<option value='{$row['user_id']}'>{$row['user_name']}</option>";
        }
        echo "</select>";
?>
<input type="submit" value="search"/>
    </form>
    <a href="#" onclick="window.print();">print</a>
    <?php
    if(isset($_GET['user_id']))
    {
    $user_id=$_GET['user_id'];
    $user=mysqli_query($connection,"select * from tbl_user where user_id='{$user_id}'");
    $count=mysqli_num_rows($user);
    echo"<br/>$count Records Found";
    echo "<table border='1' align='center'>";
    echo "<tr>";
    echo "<th>user_id</th>";
    echo "<th>user_name</th>";
    echo "<th>user_gender</th>";
    echo "<th>user_email</th>";
    echo "<th>user_password</th>";
    echo "<th>user_mobile</th>";
    echo "<th>user_address</th>";
    echo "</tr>";
    while($userrow=mysqli_fetch_array($user))
								{
									echo "<tr>";
                                    echo "<td>{$userrow['user_id']}</td>";
									echo "<td>{$userrow['user_name']}</td>";
									echo "<td>{$userrow['user_gender']}</td>";
									echo "<td>{$userrow['user_email']}</td>";	
									echo "<td>{$userrow['user_password']}</td>";	
									echo "<td>{$userrow['user_mobile']}</td>";
                                    echo "<td>{$userrow['user_address']}</td>";
									echo "</tr>";
								}
                                echo "</table>";
                            }
                            ?>
                            </html>