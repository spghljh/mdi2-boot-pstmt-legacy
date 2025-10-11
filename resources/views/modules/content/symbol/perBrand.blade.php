@php
    $brand = strtolower($device->manf_device ?? 'default');
@endphp

<img class="perBrand" src="{{ \App\Helpers\ImageHelper::deviceBrandImage($device->manf_device) }}" width="100%" height="100%">
