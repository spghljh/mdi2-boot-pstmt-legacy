<div class="target_list_container">

<?php
$result = mysqli_query($con, "SELECT * FROM mcl ORDER BY id_cpu ASC");
$sql = "SELECT * FROM MCL ORDER BY id_cpu ASC";

if (!$result) {
    die("<pre>" . mysqli_error($con) . "\n$sql</pre>");
}

$total_record = mysqli_num_rows($result);
for ($i = 0; $i < $total_record; $i++) {
    mysqli_data_seek($result, $i);
    $row = mysqli_fetch_assoc($result);

    $id_cpu = $row["id_cpu"];
    $name_cpu = $row["name_cpu"];
    $manf_cpu = $row["manf_cpu"];
    $core_cpu = $row["core_cpu"];
    $thread_cpu = $row["thread_cpu"];
    $maxghz_cpu = $row["maxghz_cpu"];
    $minghz_cpu = $row["minghz_cpu"];
    $release_cpu = $row["release_cpu"];
    $type_cpu = $row["type_cpu"];
?>
    <div class="target_item_row">

        <div class="target_item_row_top hide_rate_4">
                <div class="cpu_item ">프로세서</div>
                <div  class="arrow">></div>
                <div class="cpu_type "><?= $type_cpu ?></div>
                <div  class="arrow">></div>
                <div class="cpu_release2 "><?= $release_cpu ?></div>
                <div class="cpu_release "></div>
        </div>
        <div class="target_item_row_bottom">
            <div class="cpu_manf">
                <div class="brand_symbol">
                    <div class="brand_inner">
                        <?php include $_SERVER['DOCUMENT_ROOT'].'/mdi2/resources/views/modules/content/symbol/percpuBrand.php'; ?>
                    </div>
                </div>
            </div>


            <div class="cpu_name">
                <?= $name_cpu ?>
            </div>

            <div class="cpu_core hide_rate_3">
                <a class="highlight"><?= $core_cpu ?></a>
            </div>
            <div class="cpu_core_text hide_rate_3">
                코어
            </div>
            <div class="slash hide_rate_2">
            /
            </div>
            <div class="cpu_thread hide_rate_2">
                <a class="highlight"><?= $thread_cpu ?></a>
            </div>
            <div class="cpu_thread_text hide_rate_2">
                스레드
            </div>

            <div class="cpu_speed_div hide_rate_1">

                <div class="cpu_speed_div_top">
                    <div class="cpu_speed_div_top_left">기본</div>
                    <div class="cpu_speed_div_top_center ">
                        <a class="highlight2" ><?= $minghz_cpu ?></a>
                    </div>
                    <div class="cpu_speed_div_top_right">GHz</div>
                    
                </div>

            </div><!--cpu_speed_div-->


        </div>
    </div>
<?php
}
mysqli_close($con);
?>
</div>

