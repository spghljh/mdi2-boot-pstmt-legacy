
<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi2/mdi_con.php';?>

<!--모듈-START-->
<div class="module_component">

    <div class="module_bar">
        <div class="module_bar_wrapper">
            <div class="module_symbol"><a class = "module_symbol-href">P</a></div>
            <div class="module_name"><a style="color : white; text-decoration: none">전체 디바이스</a></div>
            <div class="module_tool"><div class = "module_tool-href"></div></div>
        </div><!--module_bar_wrapper-->
    </div><!--module_bar-->

    <div class="module_content">
        <div class="module_content_start">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/mdi2/resources/views/modules/content/list/device_list.php';?>

        </div><!--module_content_start-->
    </div><!--module_content-->


</div><!--module_component -->
<!--모듈-END-->