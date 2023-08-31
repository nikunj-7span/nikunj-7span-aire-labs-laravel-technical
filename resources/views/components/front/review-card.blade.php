@props(['review'])
<div class="card border-2 h-fit border-neutral-900 p-8 w-full flex flex-col bg-white" data-rating={{ $review->ratings }}>
    <div class="mb-7 flex gap-1 star-rating"></div>
    <p class="text-neutral-900/80 mb-10 text-base font-body">
        {{ $review->body }}
    </p>
    <x-front.user-profile :userreview="$review->user" />
</div>
