

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
          <input type="text" placeholder="{{ __('webinar.search_placeholder') }}" class="input input-bordered w-full" />
        </div>

        <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">
          <select class="select select-bordered w-full sm:w-48">
            <option>{{ __('webinar.all_years') }}</option>
            <option>2025</option>
            <option>2024</option>
            <option>2023</option>
          </select>
          <select class="select select-bordered w-full sm:w-64">
            <option>{{ __('webinar.all_speakers') }}</option>
            <option>Mr. Syako Sulaiman Shekho</option>
            <option>Dr. Jane Doe</option>
          </select>
        </div>
      </div>

      <!-- Webinar Cards Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Webinar Card -->
        <div class="bg-base-100 shadow-md rounded-xl p-5 hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-1">Professional Communication Skills</h3>
          <p class="text-sm text-gray-500 mb-1">
            {{ __('webinar.by', ['speaker' => 'Mr. Syako Sulaiman Shekho']) }}
          </p>
          <p class="text-sm text-gray-500 mb-3">
            {{ __('webinar.date', ['date' => '06-05-2023']) }}
          </p>
          <a href="/webinars/professional-communication" class="btn btn-sm btn-primary">
            {{ __('webinar.view_details') }}
          </a>
        </div>

        <!-- More static webinar cards -->
        <div class="bg-base-100 shadow-md rounded-xl p-5 hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-1">Leadership in Tech</h3>
          <p class="text-sm text-gray-500 mb-1">
            {{ __('webinar.by', ['speaker' => 'Dr. Jane Doe']) }}
          </p>
          <p class="text-sm text-gray-500 mb-3">
            {{ __('webinar.date', ['date' => '14-01-2024']) }}
          </p>
          <a href="/webinars/leadership-tech" class="btn btn-sm btn-primary">
            {{ __('webinar.view_details') }}
          </a>
        </div>

        <!-- Add more webinar cards as needed -->
      </div>
    </div>
  </section>

</x-layout.app>
