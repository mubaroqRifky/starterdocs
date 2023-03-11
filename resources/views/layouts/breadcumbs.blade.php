<nav aria-label="breadcrumb">
    <ol class="breadcrumb"> 
        @foreach ($breadcumbs as $key => $item)
            <li class="breadcrumb-item fs-6"><a href="{{ $item['route'] ? route($item['route']) : '#' }}">{{ $item['name'] }}</a></li>
        @endforeach 
    </ol>
</nav>