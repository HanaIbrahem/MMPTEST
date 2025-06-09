<x-layout.app>
  
<!-- FAQ Section -->
<section class="bg-base-200-to-b pt-40 pb-20 from-primary/5 to-white">
  <div class="container mx-auto px-6">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">
        {{ __('question.title') }} 
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">
          {{ __('question.highlight') }}
        </span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        {{ __('question.description') }}
      </p>
    </div>

    <div x-data="{ openFaq: null }" class="max-w-4xl mx-auto space-y-4">
  
      <!-- FAQ Items-->
      @foreach ($questions as $question )
         <div class="bg-white border border-gray-200 rounded-xl">
        <div 
          @click="openFaq === 1 ? openFaq = null : openFaq = 1" 
          class="flex justify-between items-center cursor-pointer px-6 py-4"
        >
          <div class="text-xl font-medium text-gray-900">
           {{ $question->getTranslatedAttribute('title') }}
          </div>
          <div class="text-2xl text-primary font-bold">
            <span x-show="openFaq !== 1">+</span>
            <span x-show="openFaq === 1">−</span>
          </div>
        </div>
        
        <div x-show="openFaq === 1" x-transition class="px-6 pb-4 text-gray-600">
                     {{ $question->getTranslatedAttribute('content') }}

        </div>
      </div>
      @endforeach
    </div>

    <!-- Still have questions? -->
    <div class="text-center mt-16">
      <div class="bg-primary/10 rounded-xl p-8 max-w-4xl mx-auto">
        <h3 class="text-2xl font-bold mb-3 text-gray-900">{{ __('question.still_have') }}</h3>
        <p class="text-gray-600 mb-6">{{ __('question.contact_info') }}</p>
        <a href="{{ route('contact') }}" class="btn btn-primary rounded-full px-8">
          {{ __('question.contact_button') }}
        </a>
      </div>
    </div>
  </div>
</section>

</x-layout.app>
