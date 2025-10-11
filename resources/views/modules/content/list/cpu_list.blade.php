{{-- resources/views/modules/content/list/cpu_list.blade.php --}}
<div class="target_list_container">
    @foreach ($cpus as $cpu)
        <div class="target_item_row">
            <div class="target_item_row_top hide_rate_4">
                <div class="cpu_item">프로세서</div>
                <div class="arrow">></div>
                <div class="cpu_type">{{ $cpu->type_cpu }}</div>
                <div class="arrow">></div>
                <div class="cpu_release2">{{ $cpu->release_cpu }}</div>
                <div class="cpu_release"></div>
            </div>

            <div class="target_item_row_bottom">
                <div class="cpu_manf">
                    <div class="brand_symbol">
                        <div class="brand_inner">
                            @include('modules.content.symbol.percpuBrand', ['cpu' => $cpu])
                        </div>
                    </div>
                </div>

                <div class="cpu_name">
                    {{ $cpu->name_cpu }}
                </div>

                <div class="cpu_core hide_rate_3">
                    <a class="highlight">{{ $cpu->core_cpu }}</a>
                </div>
                <div class="cpu_core_text hide_rate_3">
                    코어
                </div>

                <div class="slash hide_rate_2">/</div>

                <div class="cpu_thread hide_rate_2">
                    <a class="highlight">{{ $cpu->thread_cpu }}</a>
                </div>
                <div class="cpu_thread_text hide_rate_2">
                    스레드
                </div>

                <div class="cpu_speed_div hide_rate_1">
                    <div class="cpu_speed_div_top">
                        <div class="cpu_speed_div_top_left">기본</div>
                        <div class="cpu_speed_div_top_center">
                            <a class="highlight2">{{ $cpu->minghz_cpu }}</a>
                        </div>
                        <div class="cpu_speed_div_top_right">GHz</div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
