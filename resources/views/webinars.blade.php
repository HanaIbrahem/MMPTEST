<x-layout.app>
    <section class="bg-base-200-to-b from-primary/5 to-white pt-40 pb-10">
        <div class="container mx-auto px-6">
            <!-- Page Heading -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">

                    {!! __('webinar.title') !!}
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    {{ __('webinar.subtitle') }}
                </p>
            </div>
        </div>
    </section>

    <section class="bg-white pt-2 pb-12 px-20">
        <div class="container mx-auto px-4">
            <!-- Filters on Top -->
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 mb-10">
                <div class="w-full lg:w-1/3">
                    <input type="text" id="search-box" placeholder="{{ __('webinar.search_placeholder') }}" class="input input-bordered w-full" />
                </div>
                <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">
                    <select id="year-filter" class="w-full sm:w-48">
                        <option value="">{{ __('webinar.all_years') }}</option>
                        @foreach ($years as $year)
                        <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>
                            {{ $year }}
                        </option>
                        @endforeach
                    </select>
                    <select id="branch-filter" class="w-full sm:w-64">
                        <option value="">{{ __('webinar.all subjects') }}</option>
                        @foreach ($branches as $branche)
                        <option value="{{ $branche->id }}">
                            {{ $branche->getTranslatedAttribute('title') }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <!-- Webinar Cards Grid -->
            
                <div id="webinar-cards-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @include('partials.webinar-cards', ['webinars' => $webinars])
                </div>
                
         
        </div>
    </section>
    
    @push('scripts')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    function loadWebinars(filters = {}) {
        $.ajax({
            url: "{{ route('webinars.filter') }}",
            data: filters,
            success: function (data) {
                $('#webinar-cards-container').html(data.html);
            }
        });
    }

    $(document).ready(function () {
        const debounce = (fn, delay) => {
            let timer;
            return function (...args) {
                clearTimeout(timer);
                timer = setTimeout(() => fn.apply(this, args), delay);
            };
        };

        $('#year-filter, #branch-filter').on('change', function () {
            loadWebinars({
                year: $('#year-filter').val(),
                branch: $('#branch-filter').val(),
                search: $('#search-box').val()
            });
        });

        $('#search-box').on('input', debounce(function () {
            loadWebinars({
                year: $('#year-filter').val(),
                branch: $('#branch-filter').val(),
                search: $(this).val()
            });
        }, 300));

        // Pagination link click
        $(document).on('click', '.pagination a', function (e) {
            e.preventDefault();
            let url = $(this).attr('href');
            let params = {
                year: $('#year-filter').val(),
                branch: $('#branch-filter').val(),
                search: $('#search-box').val()
            };
            let queryString = $.param(params);
            loadWebinars(`${url}&${queryString}`);
        });
    });
</script>
    @endpush



</x-layout.app>