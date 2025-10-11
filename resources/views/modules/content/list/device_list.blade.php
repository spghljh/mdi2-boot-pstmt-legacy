{{-- resources/views/modules/content/list/device_list.blade.php --}}
<div class="target_list_container">
    @foreach ($devices as $device)
        <div class="target_item_row">
            <div class="target_item_row_top hide_rate_4">
                <div class="device_item">디바이스</div>
                <div class="arrow">></div>
                <div class="device_type">{{ $device->type_device }}</div>
                <div class="arrow">></div>
                <div class="device_release2">{{ $device->release_device }}</div>
                <div class="device_release"></div>
            </div>

            <div class="target_item_row_bottom">
                <div class="device_manf">
                    <div class="brand_symbol">
                        <div class="brand_inner">
                            @include('modules.content.symbol.perBrand', ['device' => $device])
                        </div>
                    </div>
                </div>

                <div class="device_name">
                    {{ $device->name_device }}
                </div>

                {{-- CPU 정보 --}}
                <div class="cpu_info_section hide_rate_2">
                    <div class="cpu_brand_for_device">
                        <div class="brand_inner">
                            @include('modules.content.symbol.percpuBrandForDevice', ['cpu_name' => $device->cpu_device])
                        </div>
                    </div>
                </div>

                <div class="cpu_device hide_rate_1">
                    <a class="highlight">{{ $device->cpu_device }}</a>
                </div>
            </div>

        </div>
    @endforeach
</div>
