<x-layout.app>
    <section class="pt-40 pb-20 bg-base-200-to-b from-primary/5 to-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
         
          {!! __('common.our products') !!}
          </h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">

          {{ __('common.products description') }}
          </p>
        </div>
  
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Product Card -->

          @foreach ($products as $product )
              <div class="card rounded-lg p-2 bg-base-100 shadow-xl hover:shadow-2xl transition">
            <figure>
              <img src="{{asset('storage/'.$product->image) }}" alt="Course Image" class="w-full h-48 object-cover" />
            </figure>
            <div class="card-body">
              
              <h3 class="card-title text-xl">{{$product->getTranslatedAttribute('title')}}</h3>
             <p>{{Str::limit(strip_tags($product->getTranslatedAttribute('content')), 100)}}</p>
              <div class="card-actions justify-end">
                <a href="{{ route('product.show',$product->id) }}" 
                class="btn btn-sm btn-primary"> {{__('common.View Details')}}
               </a>
              </div>
            </div>
          </div>
          @endforeach

  
     
        </div>
      </div>
    </section>
  </x-layout.app>
  