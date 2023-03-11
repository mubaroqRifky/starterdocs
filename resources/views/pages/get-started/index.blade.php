@extends('layouts.main')

@section('breadcumbs')
    @php
        $breadcumbs = [
            [
                'name' => 'Home',
                'route' => 'home'
            ],
            [
                'name' => 'Getting Started',
                'route' => ''
            ],
        ];
    @endphp
    @include('layouts.breadcumbs', compact('breadcumbs'))
@endsection

@section('content')
<section class="d-flex flex-column-reverse flex-lg-row gap-3 align-items-lg-start">
    <div class="col-lg-9 p-4 card">
        <section class="d-grid gap-4">
            @include('pages.get-started._vue')
        </section>
    </div>
    
    <div class="flex-grow-1 p-4 card position-sticky top-0" style="min-width: 200px">
        <ul class="d-grid">
            <li class="py-2 border-bottom"><a href="#get_started" class="d-block">Get started</a></li>
            <li class="py-2 border-bottom"><a href="#router" class="d-block">Router</a></li>
            <li class="py-2 border-bottom"><a href="#tailwindcss" class="d-block">Tailwindcss</a></li>
            <li class="py-2 border-bottom"><a href="#bootstrap" class="d-block">Bootstrap</a></li>
            <li class="py-2 border-bottom"><a href="#sass" class="d-block">Sass</a></li>
            <li class="py-2 border-bottom"><a href="#plugins" class="d-block">Plugins</a></li>
            <li class="py-2 border-bottom"><a href="#state_management" class="d-block">State Management</a></li>
        </ul>
    </div>
</section>
@endsection

@push('scripts_body')
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
@endpush