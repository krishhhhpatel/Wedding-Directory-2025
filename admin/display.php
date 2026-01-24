<?php
 $connection=mysqli_connect("localhost","root","","db_project");

 $q=mysqli_query($connection,"select * from tbl_vendor");

 echo  "<table boder='1'>";
 while($data=mysqli_fetch_array($q))
 {
    $cq=mysqli_qyery($connection,"select * from tbl_category where category_id='{$data['category_id']}");
    $crow=mysqli_fetch_array($cq);
    echo "<tr>";
    echo "<td>{$date['vendor_id']}</td>";
    echo "<td>{$date['vendor_name']}</td>";
    echo "<td>{$date['vendor_price']}</td>";

    echo"<td>{$crow['category_name']}</td>";

    echo "<td><img width='100' src='uploadss/{$data['vendor_photo']}</td>";
    echo "</tr>";
 }

 echo "</table>";