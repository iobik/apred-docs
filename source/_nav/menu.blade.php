@php $level = $level ?? 0 @endphp

<ul class="my-0 @if($level === 0) pt-8 lg:sticky lg:top-0 @endif">
    @foreach ($items as $label => $item)
        @include('_nav.menu-item')
    @endforeach
</ul>
