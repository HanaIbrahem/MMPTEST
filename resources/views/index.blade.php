<x-layout.app>





    <section class="min-h-screen bg-base-100 flex items-center justify-center relative overflow-hidden pt-20">

        <!-- Animated background elements -->
        <div class="absolute inset-0 overflow-hidden z-0">
            <!-- Geometric shapes -->
            <div class="absolute top-20 left-10 w-40 h-40 rounded-full bg-primary/10 blur-xl animate-float"></div>
            <div
                class="absolute bottom-1/4 right-20 w-60 h-60 rounded-3xl bg-secondary/10 blur-xl animate-float animation-delay-2000">
            </div>
            <div
                class="absolute top-1/3 right-1/4 w-32 h-32 rounded-lg bg-accent/10 blur-xl animate-float animation-delay-4000">
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10 py-6">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <!-- Text content -->
                <div class="lg:w-1/2 space-y-8 text-center lg:text-left">
                    <div class="overflow-hidden">
                        <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6 animate-slide-up">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">
                                {{ __('common.mmp') }} {{ __('common.academic') }}

                            </span>
                        </h1>
                    </div>

                    <div class="overflow-hidden my-3">
                        <p class="text-xl md:text-2xl text-gray-600 mb-8 animate-slide-up animation-delay-200">
                            {{ __('common.Excellence in') }}
                            <span class="font-semibold text-primary">{{ __('common.education') }}</span>,
                            <span class="font-semibold text-secondary">{{ __('common.training') }}</span> &
                            <span class="font-semibold text-accent">{{ __('common.consultancy') }}</span>
                       
                        </p>
                    </div>

                    <div class="overflow-hidden">
                        <p
                            class="text-lg text-gray-500 mb-10 max-w-2xl mx-auto lg:mx-0 animate-slide-up animation-delay-400">

                            {{ __('home.Empowering Minds') }}
                        </p>
                    </div>

                    <div
                        class="flex mt- flex-col sm:flex-row gap-4 justify-center lg:justify-start animate-fade-in animation-delay-600">
                        <a href="{{ route('contact') }}"
                            class="btn btn-primary px-8 py-4 rounded-full hover:shadow-lg transition-all">
                            {{ __('nav.contact us') }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="{{ route('services') }}"
                            class="btn btn-outline-secondary px-8 py-4 rounded-full border-2  transition-all">
                            {{ __('nav.Our Services') }}
                        </a>
                    </div>
                </div>

                <!-- Abstract illustration -->
                <div class="lg:w-1/2 animate-float">
                    <div class="relative">
                        <div
                            class="w-full h-80 lg:h-96 bg-gradient-to-br from-primary/20 to-accent/20 rounded-3xl flex items-center justify-center overflow-hidden">
                            <!-- You can replace this with your logo or an SVG illustration -->
                            <div class="text-9xl font-bold text-primary/30">MMP</div>
                        </div>
                        <!-- Decorative elements -->
                        <img src="/images/logo.png" alt="Logo"
                            class="absolute -top-6 -right-6 w-24 h-24 rounded-2xl opacity-70 rotate-12 object-contain" />

                        <img src="/images/logo.png" alt="Logo"
                            class="absolute -top-6 -right-6 w-24 h-24 rounded-2xl opacity-70 rotate-12 object-contain" />

                        <div class="absolute -bottom-6 -left-6 w-20 h-20 rounded-full bg-accent/20 -rotate-12"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats bar -->
        <div class=" absolute bottom-10 left-0 right-0 animate-fade-in animation-delay-800">
            <div class="container mx-auto px-6">
                <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-sm p-6 max-w-4xl mx-auto">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary">15+</div>
                            <div class="text-gray-500">{{ __('common.years experience') }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-secondary">10,000+</div>
                            <div class="text-gray-500">{{ __('common.students trained') }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent">100+</div>
                            <div class="text-gray-500">{{ __('common.courses offered') }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary">99%</div>
                            <div class="text-gray-500">{{ __('common.satisfaction') }}</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-b from-base-100 to-primary/5 ">
        <div class="container mx-auto px-6">
            <div class="flex flex-col-reverse lg:flex-row items-center gap-12">
                <!-- Left Column - Image/Illustration -->
                <div class="lg:w-1/2 animate-float">
                    <div class="relative">
                        <div style="background-image: url('./images/mmp-building.jpg')"
                            class="w-full h-80 lg:h-96 bg-gradient-to-br from-primary/20 to-accent/20 rounded-3xl flex items-center justify-center overflow-hidden shadow-xl  opacity-60 animate-spin-slow">
                            <!-- Replace with your about image -->
                            <div class="text-black font-bold text-center p-8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <h3 class="text-2xl font-bold mb-2">{{ __('common.mega mind plas') }}</h3>
                                <p class="text-primary  font-bold">{{ __('common.education') }} •
                                    {{ __('common.training') }} • {{ __('common.consultancy') }}</p>
                            </div>
                        </div>

                        <div class="absolute -bottom-6 -left-6 w-20 h-20 rounded-full bg-accent/20 -rotate-12"></div>
                    </div>
                </div>


                <!-- Right Column - Content -->
                <div class="lg:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900 ">
                        {{ __('nav.about') }} <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">
                            {{ __('common.Our Academy') }}
                        </span>
                    </h2>

                    <div class="space-y-4 text-gray-600 ">


                        <p>
                            {{ __('home.premier provider') }}
                        </p>

                   


                        <div class="bg-primary/5  p-4 rounded-lg border-l-4 border-primary">
                            <h4 class="font-semibold text-primary  mb-2">{{ __('common.Our Approach') }}</h4>
                            <p>
                                {{ __('home.experienced team') }}
                                .
                            </p>
                        </div>
                    </div>

                    <!-- Key Services Preview -->
                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="flex items-center p-3 bg-base-100  rounded-lg shadow-sm">
                            <div
                                class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <span class="text-sm font-medium">{{ __('home.education_programs') }}</span>
                        </div>

                        <div class="flex items-center p-3 bg-base-100 rounded-lg shadow-sm">
                            <div
                                class="w-10 h-10 rounded-full bg-secondary/10 text-secondary flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <span class="text-sm font-medium">{{ __('home.test_preparation') }}</span>
                        </div>

                        <div class="flex items-center p-3 bg-base-100  rounded-lg shadow-sm">
                            <div
                                class="w-10 h-10 rounded-full bg-accent/10 text-accent flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <span class="text-sm font-medium">{{ __('home.professional_training') }}</span>
                        </div>

                        <div class="flex items-center p-3 bg-base-100  rounded-lg shadow-sm">
                            <div
                                class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <span class="text-sm font-medium">{{ __('common.consultancy') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- our programs --}}
    <section class="py-20 bg-base-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">

                    @if (app()->getLocale() == 'en')
                        Our <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-secondary to-accent">Programs</span>
                    @else
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-secondary to-accent">
                            پڕۆگرامەکانمان </span>
                    @endif
                </h2>

                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    {{ __('home.Comprehensive educational') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Education Programs -->
                <div
                    class="bg-gradient-to-b from-base-100 to-primary/5 rounded-xl border border-gray-100 hover:border-primary/30 transition-all duration-300 p-6">
                    <div
                        class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">
                        {{__('home.Education Programs')}}
                    </h3>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2 mt-0.5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>{{__('home.Science courses')}}</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2 mt-0.5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>{{__('home.Language studies')}}</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2 mt-0.5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>{{__('home.Creative writing')}}</span>
                        </li>
                    </ul>
                    <a
                    href="{{route('services')}}"
                        class="w-full btn btn-outline border-primary text-primary hover:bg-primary hover:text-white rounded-full">
                        {{__('home.Our Services')}}
                </a>
                </div>

                <!-- Test Preparation -->
                <div
                    class="bg-gradient-to-b from-base-100 to-secondary/5 rounded-xl border border-gray-100 hover:border-secondary/30 transition-all duration-300 p-6">
                    <div
                        class="w-16 h-16 rounded-2xl bg-secondary/10 text-secondary flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">
                        {{__('home.Test Preparation')}}
                    </h3>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary mr-2 mt-0.5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>{{__('home.IELTS preparation')}}</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary mr-2 mt-0.5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>
                                {{__('home.PTE Academic')}}
                            </span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary mr-2 mt-0.5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>
                                {{__('home.Custom test prep')}}
                            </span>
                        </li>
                    </ul>
                    <a
                    href="{{route('services')}}"
                        class="w-full btn btn-outline border-secondary text-secondary hover:bg-secondary hover:text-white rounded-full">
                        {{__('home.Our Services')}}
                </a>
                </div>

                <!-- Professional Training -->
                <div
                    class="bg-gradient-to-b from-base-100 to-accent/5 rounded-xl border border-gray-100 hover:border-accent/30 transition-all duration-300 p-6">
                    <div class="w-16 h-16 rounded-2xl bg-accent/10 text-accent flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">
                        {{__('home.Professional Training')}}
                    </h3>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2 mt-0.5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>
                                {{__('home.Leadership development')}}
                            </span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2 mt-0.5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>
                                {{__('home.Project management')}}
                            </span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2 mt-0.5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>{{__('home.Communication skills')}}</span>
                        </li>
                    </ul>
                    <a
                    href="{{route('services')}}"
                        class="w-full btn btn-outline border-accent text-accent hover:bg-accent hover:text-white rounded-full">
                        {{__('home.Our Services')}}
                </a>
                </div>
            </div>
        </div>
    </section>


   

    <!-- Academic Products Section -->
    <section class="py-10 bg-base-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">
                {!! __('home.our acadminic products') !!}
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                {{__('home.our acadimic products des')}}
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
               
                @foreach ($products as $product)
                         <div
                    class="bg-white rounded-xl overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-r from-blue-50 to-indigo-50 flex items-center justify-center p-4">
                        <img 
                        src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->getTranslatedAttribute('title') }}"
                            class="h-40 object-contain drop-shadow-md">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-900">
                        {{ $product->getTranslatedAttribute('title') }}

                        </h3>
                      
                      
                    </div>
                </div>
                @endforeach
           

            

              

              
            </div>

            <!-- View All Button -->
            <div class="text-center mt-12">
                <a 
                href="{{route('products')}}"
                class="btn btn-outline btn-primary rounded-full px-8">
                    {{__('home.View All Products')}}
                </a>
            </div>
        </div>
    </section>

    {{-- <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">Featured Webinars</h2>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <!-- Webinar Card -->
                <div class="bg-gray-50 p-6 rounded-xl shadow">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Professional Communication Skills</h3>
                    <p class="text-sm text-gray-500 mb-1">by Mr. Syako Sulaiman Shekho</p>
                    <p class="text-sm text-gray-500 mb-3">Date: 06-05-2023</p>
                    <a href="/webinars/professional-communication" class="btn btn-outline btn-primary btn-sm">View
                        Details</a>
                </div>
                <!-- Repeat for other featured webinars -->
            </div>
        </div>
    </section> --}}



</x-layout.app>
