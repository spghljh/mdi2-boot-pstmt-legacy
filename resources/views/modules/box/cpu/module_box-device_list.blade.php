{{-- resources/views/modules/box/cpu/module_box-device_list.blade.php --}}
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>전체 디바이스</title>

    {{-- Laravel의 asset() 함수로 CSS 경로 처리 --}}
        <link rel="stylesheet" href="{{ asset('default_main_inhanced.css') }}">
        <link rel="stylesheet" href="{{ asset('default_module_list_device.css') }}">
</head>
<body>
    <header>
        {{-- 필요 시 헤더 내용 추가 --}}
    </header>

    <main>
        <div class="modules_container">
            <div class="module_area">
                <div class="module_component">
                    <div class="module_bar">
                        <div class="module_bar_wrapper">
                            <div class="module_symbol">
                                <a class="module_symbol-href">D</a>
                            </div>
                            <div class="module_name">
                                <a style="color: white; text-decoration: none">전체 디바이스</a>
                            </div>
                            <div class="module_tool">
                                <div class="module_tool-href"></div>
                            </div>
                        </div>
                    </div>

                    <div class="module_content">
                        <div class="module_content_start">
                            {{-- 디바이스 리스트 출력 --}}
                            @include('modules.content.list.device_list')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        {{-- 필요 시 푸터 내용 추가 --}}
    </footer>
</body>
</html>