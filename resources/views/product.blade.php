<x-layout.app>

    <section class="bg-base-200-to-b from-primary/5 to-white pt-20 pt-40 md:pb-20">
        <div class="container mx-auto px-6 max-w-5xl">
            <!-- Heading -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">
                        {{ $product->getTranslatedAttribute('title') }}

                    </span>
                </h2>

            </div>

            <!-- Introduction -->
            <div class="bg-white shadow-xl rounded-xl md:p-8 space-y-6 text-gray-700 text-lg">


                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->getTranslatedAttribute('title') }}"
                    class="w-full max-w-[600px] min-w-[200px] max-h-[300px] object-cover rounded-lg mx-auto mb-6" />

                {!! $product->getTranslatedAttribute('content') !!}


            </div>


        </div>
    </section>

</x-layout.app>
