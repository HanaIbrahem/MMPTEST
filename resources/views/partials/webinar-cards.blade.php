@foreach($webinars as $webinar)
    <div class="bg-base-100 shadow-md rounded-xl p-5 hover:shadow-lg transition">
        <h3 class="text-xl font-semibold mb-1">{{ $webinar->getTranslatedAttribute('title') }}</h3>
        <p class="text-sm text-gray-500 mb-1">
            {{ __('webinar.subject') }}: {{ $webinar->branch->getTranslatedAttribute('title') }}
        </p>
        <p class="text-sm text-gray-500 mb-3">
            {{ __('webinar.date', ['date' => $webinar->date->format('d-m-Y')]) }}
        </p>
        <a href="{{ route('webinar.show', $webinar->id) }}" class="btn btn-sm btn-primary">
            {{ __('webinar.view_details') }}
        </a>
    </div>
@endforeach

<!-- Pagination -->
<div class="mt-6 col-span-1 sm:col-span-2 lg:col-span-3">
    {{ $webinars->withQueryString()->links() }}
</div>
