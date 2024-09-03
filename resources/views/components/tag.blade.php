@props(['tag'])
<div {{ $attributes(['class' => 'text-sm font-bold text-red-500']) }}>
      {{ strtoupper($tag->name) }}
</div>
