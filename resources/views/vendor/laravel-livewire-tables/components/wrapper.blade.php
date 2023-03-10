@props(['component'])

@php
    $refresh = $this->getRefreshStatus();
    $theme = $component->getTheme();
@endphp

<div {{ $attributes->merge($this->getComponentWrapperAttributes()) }}
    @if ($component->hasRefresh()) wire:poll{{ $component->getRefreshOptions() }} @endif
    @if ($component->isFilterLayoutSlideDown()) wire:ignore.self x-data="{ filtersOpen: $wire.filterSlideDownDefaultVisible }" @endif>
    @include('livewire-tables::includes.offline')

    {{ $slot }}

    @include('livewire-tables::includes.debug')

</div>
