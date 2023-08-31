@props(['userreview'])
<div class="flex gap-4">
    @if (!empty($userreview))
        <div class="w-11 h-11 aspect-square rounded-full overflow-hidden">
            <img src="{{ asset($userreview->avatar) }}" alt="user"
                class="pc-h-full pc-w-full pc-rounded-full pc-object-cover pc-object-center" />
        </div>
        <div class="space-y-1">
            <p class="text-neutral-900 text-base font-bold font-display">
                {{ $userreview->name }}
            </p>
            <p class="text-neutral-900/80 text-sm font-inter">{{ $userreview->type }}</p>
        </div>
    @endif
</div>
