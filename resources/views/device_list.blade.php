<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>device_list</title>

        {{-- CSS 링크 --}}
        <link rel="stylesheet" href="{{ asset('default_main_inhanced.css') }}">
        <link rel="stylesheet" href="{{ asset('default_module_list_device.css') }}">
</head>
<body>
    <header>
        {{-- 헤더 내용 --}}
    </header>

    <main>
        <div class="modules_container">
            <div class="module_area">
                {{-- DEVICE 리스트 모듈 --}}
                @include('modules.box.cpu.module_box-device_list')
            </div>
        </div>
    </main>

    <footer>
        {{-- 푸터 내용 --}}
    </footer>
</body>
</html>
