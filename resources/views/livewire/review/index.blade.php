<div>
    <div class="flex items-center justify-center h-full mx-auto max-w-7xl">
        <div
            class="grid w-full grid-cols-1 mx-auto overflow-y-auto place-content-evenly sm:grid-cols-2 lg:grid-cols-3 gap-7">
            @if ($reviews->isNotEmpty())
                @foreach ($reviews as $review)
                    <x-front.review-card :review="$review" />
                @endforeach
            @endif
        </div>
    </div>
</div>


@push('scripts')
    <script>
        function renderStarRating(rating, container) {
            const starRatingContainer = container.querySelector(".star-rating");
            starRatingContainer.innerHTML = "";

            const maxStars = 5;

            const filledStarPath = "{{ url('/svg/star_filled.svg') }}";
            const emptyStarPath = "{{ url('/svg/star_empty.svg') }}";

            for (let i = 1; i <= maxStars; i++) {
                const starImg = document.createElement("img");
                starImg.src = i <= rating ?
                    filledStarPath : emptyStarPath;
                starImg.alt = "rating";
                starRatingContainer.appendChild(starImg);
            }
        } // Apply star ratings to each review card
        const reviewCards = document.querySelectorAll(".card");
        reviewCards.forEach((card) => {
            const rating = parseInt(card.getAttribute("data-rating"));
            renderStarRating(rating, card);
        });
    </script>
@endpush
