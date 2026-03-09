@props(['field'])

<div class="h-1 mb-2 mt-0.5">
    @error($field)
    <p {{ $attributes->merge(['class' => 'text-error text-xs leading-tight']) }}>
        {{ $message }}
    </p>
    @enderror
</div>
