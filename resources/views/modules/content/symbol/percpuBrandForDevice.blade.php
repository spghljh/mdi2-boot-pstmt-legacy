@php
    $brand = DB::table('mcl')
        ->where('name_cpu', $cpu_name)
        ->value('manf_cpu') ?? 'default';
@endphp

<img class="percpuBrand" src="{{ \App\Helpers\ImageHelper::cpuBrandImage($brand) }}" width="100%" height="100%">
