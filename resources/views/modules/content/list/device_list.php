<div class="target_list_container">

<?php
$result = mysqli_query($con, "SELECT * FROM mdl ORDER BY id_device ASC");
$sql = "SELECT * FROM MDL ORDER BY id_device ASC";

if (!$result) {
    die("<pre>" . mysqli_error($con) . "\n$sql</pre>");
}

$total_record = mysqli_num_rows($result);
for ($i = 0; $i < $total_record; $i++) {
    mysqli_data_seek($result, $i);
    $row = mysqli_fetch_assoc($result);

    $id_device = $row["id_device"];
    $type_device = $row["type_device"];
    $name_device = $row["name_device"];
    $manf_device = $row["manf_device"];
    $release_device = $row["release_device"];
    $cpu_device = $row["cpu_device"];

?>
    <div class="target_item_row">

        <div class="target_item_row_top hide_rate_4">
            <div class="device_item ">디바이스</div>
            <div  class="arrow">></div>
            <div class="device_type "><?= $type_device ?></div>
            <div  class="arrow">></div>
            <div class="device_release2 "><?= $release_device ?></div>
            <div class="device_release "></div>
        </div>

        <div class="target_item_row_bottom">
            <div class="device_manf">
                <div class="brand_symbol">
                    <div class="brand_inner">
                        <?php include $_SERVER['DOCUMENT_ROOT'].'/mdi2/resources/views/modules/content/symbol/perBrand.php'; ?>
                    </div>
                </div>
            </div>


            <div class="device_name">
                <?= $name_device ?>
            </div>

  

            <?php
                $cpu_device = $row["cpu_device"]; // 이미 값이 있음
                $cpu_query = mysqli_query($con, "SELECT manf_cpu FROM mcl WHERE name_cpu = '$cpu_device'");
                $cpu_info = mysqli_fetch_assoc($cpu_query);
                $manf_cpu = $cpu_info['manf_cpu'];
            ?>
            <div class="cpu_info_section hide_rate_2">
                <div class="cpu_brand_for_device">
                    <div class="brand_inner">
                        <?php include $_SERVER['DOCUMENT_ROOT'].'/mdi2/resources/views/modules/content/symbol/percpuBrandForDevice.php'; ?>
                    </div>
                </div>
               
            </div>

            <div class="cpu_device hide_rate_1">
                <a class="highlight"><?= $cpu_device ?></a>
            </div>
        </div>

    </div>
<?php
}
mysqli_close($con);
?>
</div>
