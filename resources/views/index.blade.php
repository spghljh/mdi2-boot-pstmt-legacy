<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>default</title>

    <link rel="stylesheet" href="{{ asset('cpu_tool.css') }}">
    <link rel="stylesheet" href="{{ asset('default_main_inhanced.css') }}">
    <link rel="stylesheet" href="{{ asset('default_module_list_cpu.css') }}">
    <link rel="stylesheet" href="{{ asset('default_module_list_device.css') }}">
</head>
<body>
    <header></header>

    <div class="modules_container">
        <div class="module_area" style="margin-top: 80px;">
            @include('modules.box.index.module_box-index-to-cpu')
            
        </div>

        <div class="module_area" style="margin-bottom: 200px;">
            @include('modules.box.index.module_box-index-to-device')
        </div>

    </div>
    {{ asset('cpu_tool.css') }}

    <footer></footer>
</body>
</html>
