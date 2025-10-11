<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi2/mdi_con.php';?>
<?php
        $sql = "SELECT * FROM mdl";
        $result = mysqli_query($con, $sql);
        $total_record = mysqli_num_rows($result);
        echo $total_record;
        echo "</br>";
?>
