@php
    $brand = strtolower($cpu->manf_cpu ?? 'default');
@endphp

<img class="percpuBrand" src="{{ \App\Helpers\ImageHelper::cpuBrandImage($cpu->manf_cpu) }}" width="100%" height="100%">

