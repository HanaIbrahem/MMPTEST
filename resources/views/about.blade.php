<x-layout.app>

<section class="bg-base-200-to-b from-primary/5 to-white pt-40 pb-20">
  <div class="container mx-auto px-6 max-w-5xl">
    <!-- Heading -->
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
        {{ __('about.title') }}
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">
          {{ __('about.name') }}
        </span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        
          <span class="font-semibold text-primary">{{ __('common.education') }}</span>,
                            <span class="font-semibold text-secondary">{{ __('common.training') }}</span> &
                            <span class="font-semibold text-accent">{{ __('common.consultancy') }}</span>
                       
      </p>
    </div>

    <!-- Introduction -->
    <div class="bg-white shadow-xl rounded-xl p-8 space-y-6 text-gray-700 text-lg">
       {!! $setting->getValueTrAttribute(app()->getLocale())!!}
    </div>

    <!-- Core Values -->
    <div class="mt-16">
      <h3 class="text-2xl font-bold mb-6 text-gray-900 text-center">
        {{ __('about.core_values') }}
      </h3>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        <div class="bg-primary/10 rounded-xl p-6">
          <h4 class="text-xl font-semibold text-primary mb-2">{{ __('about.excellence.title') }}</h4>
          <p class="text-gray-600">{{ __('about.excellence.desc') }}</p>
        </div>
        <div class="bg-accent/10 rounded-xl p-6">
          <h4 class="text-xl font-semibold text-accent mb-2">{{ __('about.innovation.title') }}</h4>
          <p class="text-gray-600">{{ __('about.innovation.desc') }}</p>
        </div>
        <div class="bg-secondary/10 rounded-xl p-6">
          <h4 class="text-xl font-semibold text-secondary mb-2">{{ __('about.inclusion.title') }}</h4>
          <p class="text-gray-600">{{ __('about.inclusion.desc') }}</p>
        </div>
      </div>
    </div>
  </div>
</section>


</x-layout.app>
