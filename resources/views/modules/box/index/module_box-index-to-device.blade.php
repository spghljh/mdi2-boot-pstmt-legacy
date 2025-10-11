<!--모듈-START-->
<div class="module_component">

    <div class="module_bar">
        <div class="module_bar_wrapper">
            <div class="module_symbol"><a class="module_symbol-href">D</a></div>
            <div class="module_name"><a style="color: white; text-decoration: none">디바이스 탐색</a></div>
            <div class="module_tool">
                <div class="module_tool-href">
                    <a href="{{ config('app.url') . '/device_list' }}" style="color: white; text-decoration: none">자세히</a>
                </div>
            </div>
        </div>
    </div>

    <div class="module_content">
        <div class="module_content_start">
            <div class="module_content_start-cpu">
                <div class="total_cpu_count hide_rate_1_index">
                    <div class="total_cpu_count_num">
                        <a href="{{ config('app.url') . '/device_list' }}">
                            @include('modules.content.text.count_total_device')
                        </a>
                    </div>
                    <div class="total_cpu_count_processor">
                        디바이스
                    </div>
                </div>

                <div class="total_cpu_by_manf">
                    <!-- 제조사별 디바이스 표시 영역 -->
                </div>
            </div>
        </div>
    </div>

</div>
<!--모듈-END-->
