@props([
    'id'=> '',
    'title' => 'Default Title',
    'subtitle' => '',
    'subtitle1' => '',
    'subtitle2' => '',
    'code' => '',
    'code1' => '',
    'code2' => ''
])

<section {{ $attributes->merge(['class' => 'd-grid align-content-start gap-2 mb-3']) }}>
    <h4 id="{{ $id }}" class="fs-5 border-bottom pb-2">{{ $title }}</h4>
    {{ $subtitle }}

    @if ($code)
        <div class="code-container">
            <pre class="terminal">
                {{ $code }}
            </pre>
            <button class="btn position-absolute top-0 end-0" title="Copy to Clipboard"><i class="bi bi-files"></i></button>
        </div>
    @endif

    {{ $subtitle1 }}

    @if ($code1)
        <div class="1-container">
            <pre class="terminal">
                {{ $code1 }}
            </pre>
            <button class="btn position-absolute top-0 end-0" title="Copy to Clipboard"><i class="bi bi-files"></i></button>
        </div>
    @endif
</section>