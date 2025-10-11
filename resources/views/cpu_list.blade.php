<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>cpu_list</title>

        {{-- CSS 링크 --}}
        <link rel="stylesheet" href="{{ asset('default_main_inhanced.css') }}">
        <link rel="stylesheet" href="{{ asset('default_module_list_cpu.css') }}">
</head>
<body>
    <header>
        {{-- 헤더 내용 --}}
    </header>

    <main>
        <div class="modules_container">
            <div class="module_area">
                {{-- CPU 리스트 모듈 --}}
                @include('modules.box.cpu.module_box-cpu_list')
            </div>
        </div>
    </main>

    <footer>
        {{-- 푸터 내용 --}}
    </footer>
</body>
</html>
