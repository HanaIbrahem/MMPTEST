<x-layout.app>
    <section class="bg-base-200-to-b from-primary/5 to-white pt-40 pb-20">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
            {!! __('common.our Services') !!}
          </h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
           {{__('common.Services description')}}
          </p>
        </div>
  
        <!-- Services grid -->
       <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach ($services as $service)
        <div class="card bg-base-100 shadow-md hover:shadow-xl transition-all rounded-lg border border-gray-200">
            <figure class="relative h-48 overflow-hidden rounded-t-lg">
                <img src="{{ asset('storage/' . $service->image) }}"
                     alt="{{ $service->getTranslatedAttribute('title') }}"
                     class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                  
            </figure>

            <div class="card-body space-y-2">
                <h3 class="card-title text-lg font-semibold text-gray-800">
                    {{ $service->getTranslatedAttribute('title') }}
                </h3>

                <p class="text-gray-600 text-sm">
                    {{ Str::limit(strip_tags($service->getTranslatedAttribute('content')), 100) }}
                </p>

                <div class="card-actions justify-between items-center mt-4">
                    <a href="{{ route('service.show', $service->id) }}" class="btn btn-sm btn-outline btn-primary">
                        {{ __('common.View Details') }}
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>

      </div>
    </section>
  </x-layout.app>
  