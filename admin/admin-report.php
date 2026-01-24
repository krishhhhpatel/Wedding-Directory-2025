<?php
 require './class/atclass.php';
?>
<html>
<body>
    <!--<center><h3>E-SERVICE</h3></center>-->
    <hr/>
    <center> <h3>Admin Report</h3> </center>
    <hr/>
    <?php
    echo "Date & Time:".date('d-m-y-h:i:s a');
    ?>
    <form method="get">
        <?php
        $sql=mysqli_query($connection,"select * from tbl_admin")or die(mysqli_error($con));
        echo "<select name='admin_id'>";
        while($row=mysqli_fetch_array($sql))
        {
            echo "<option value='{$row['admin_id']}'>{$row['admin_name']}</option>";
        }
        echo "</select>";
?>
<input type="submit" value="search"/>
    </form>
    <a href="#" onclick="window.print();">print</a>
    <?php
    if(isset($_GET['admin_id']))
    {
    $admin_id=$_GET['admin_id'];
    $admin=mysqli_query($connection,"select * from tbl_admin where admin_id='{$admin_id}'");
    $count=mysqli_num_rows($admin);
    echo"<br/>$count Records Found";
    echo "<table border='1' align='center'>";
    echo "<tr>";
    echo "<th>admin_id</th>";
    echo "<th>admin_name</th>";
    echo "<th>admin_email</th>";
    echo "<th>admin_password</th>";
    echo "</tr>";
    while($adminrow=mysqli_fetch_array($admin))
								{
									echo "<tr>";
                                    echo "<td>{$adminrow['admin_id']}</td>";
									echo "<td>{$adminrow['admin_name']}</td>";
									echo "<td>{$adminrow['admin_email']}</td>";
									echo "<td>{$adminrow['admin_password']}</td>";	
									echo "</tr>";
								}
                                echo "</table>";
                            }
                            ?>
                            </html>