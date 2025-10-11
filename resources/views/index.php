<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>default</title>
    <!-- <link rel="stylesheet" href="/default_css/default_main.css">
    <link rel="stylesheet" href="/default_css/default_module_title.css">
    <link rel="stylesheet" href="/default_css/default_module_design.css">  -->
    <link rel="stylesheet" href="/default_css/default_main_inhanced.css"> 
    <link rel="stylesheet" href="/default_css/cpu_tool.css"> 

    <link rel="stylesheet" href="/default_css/default_module_list_cpu.css">
    <link rel="stylesheet" href="/default_css/default_module_list_device.css">
    </head>
<body>
    <header>
    </header>
    <div class="modules_container">
        <!--default_module_title.css-->
        
        <!-- <div class="module_area">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/modules/content/text/label_index_cpu.php';?>
        </div> -->

        <!--default_module_design.css-->
        <div class="module_area" style="margin-top: 80px;">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/modules/box/index/module_box-index-to-cpu.php';?>
        </div>

        <!--default_module_title.css-->
        <!-- <div class="module_area">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/modules/content/text/label_index_device.php';?>
        </div> -->

        <!--default_module_design.css-->
        <div class="module_area" style="margin-bottom: 200px;">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/modules/box/index/module_box-index-to-device.php';?>
        </div>


    </main>
    <footer>

    </footer>
</body>
</html>
