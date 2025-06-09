<x-layout.app>
    <section class="bg-base-50 pt-40 pb-10">
        <div class="container mx-auto px-4 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-primary">{!! __('contact.title') !!}</h2>
                <p class="text-lg text-base-content/80 max-w-2xl mx-auto">{{ __('contact.subtitle') }}</p>
            </div>

            <!-- Equal Split Layout -->
            <div class="flex flex-col lg:flex-row gap-8 max-w-6xl mx-auto mb-4">
                <!-- Left Side: Contact Form -->
                <div class="lg:w-1/2">
                    <div class="bg-base-100 shadow-lg rounded-box p-8 h-full">
                        <h3 class="text-2xl font-bold mb-6 text-primary">{{ __('contact.get_in_touch') }}</h3>
                        <form class="space-y-6" method="POST" action="{{ route('contact.store') }}">
                          
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="label">
                                        <span class="label-text font-medium">{{ __('contact.first_name') }}</span>
                                    </label>
                                    <input type="text" name="firstname" placeholder="{{ __('contact.first_name') }}"
                                     required   class="input input-bordered w-full focus:ring-2 focus:ring-primary" />
                                     <x-dashbord.form.error field="firstname" />
                           
                                    </div>
                                <div>
                                    <label class="label">
                                        <span class="label-text font-medium">{{ __('contact.last_name') }}</span>
                                    </label>
                                    <input required type="text" name="lastname" placeholder="{{ __('contact.last_name') }}"
                                        class="input input-bordered w-full focus:ring-2 focus:ring-primary" />
                                     <x-dashbord.form.error field="lastname" />

                                    </div>
                            </div>

                            <div>
                                <label class="label">
                                    <span class="label-text font-medium">{{ __('contact.email') }}</span>
                                </label>
                                <input  required type="email" name="email" placeholder="{{ __('contact.email') }}"
                                    class="input input-bordered w-full focus:ring-2 focus:ring-primary" />
                                     <x-dashbord.form.error field="email" />
                         
                                </div>

                            <div>
                                <label class="label">
                                    <span class="label-text font-medium">{{ __('contact.message') }}</span>
                                </label>
                                <textarea name="message" rows="5" placeholder="{{ __('contact.message here') }}"
                                   required class="textarea textarea-bordered w-full focus:ring-2 focus:ring-primary"></textarea>
                                     <x-dashbord.form.error field="message" />
                         
                                </div>

                            <div>
                                <button type="submit" class="btn btn-primary w-full">
                                    {{ __('contact.send') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right Side: Contact Info -->
                <div class="lg:w-1/2">
                    <div class=" bg-primary/10 text-secondary shadow-lg rounded-box p-8 h-full">
                        <div class="space-y-8 h-full flex flex-col">
                            <div>
                                <h3 class="text-2xl font-bold mb-6">{{ __('contact.our_office') }}</h3>

                                <div class="space-y-6">
                                    <div class="flex items-start gap-4">
                                        <div class="mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-lg">{{ __('contact.address') }}</h4>
                                            <p> {{ $settings['contact_address']->getValueTrAttribute(app()->getLocale()) }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-4">
                                        <div class="mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-lg">{{ __('contact.phone') }}</h4>

                                            <p> {{ $settings['contact_phone']->getValueTrAttribute('en') }}</p>


                                        </div>
                                    </div>

                                    <div class="flex items-start gap-4">
                                        <div class="mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-lg">{{ __('contact.email') }}</h4>
                                            <p> {{ $settings['contact_email']->getValueTrAttribute('en') }}</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Links -->
                            <div class="mt-auto">
                                <h4 class="font-bold text-lg mb-4">{{ __('contact.follow') }}</h4>
                                <div class="flex gap-4">

                                    <a target="_blank" href="{{ $settings['social_fac']->getValueTrAttribute('en') }}"
                                        class="btn btn-circle btn-ghost hover:bg-base-100/20">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" class="fill-current">
                                            <path
                                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a href="{{ $settings['social_lin']->getValueTrAttribute('en') }}"
                                        class="btn btn-circle btn-ghost hover:bg-base-100/20" target="_blank"
                                        aria-label="LinkedIn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM0 8h5v16H0V8zm7.5 0h4.7v2.2h.1c.6-1.1 2.1-2.2 4.3-2.2 4.6 0 5.4 3 5.4 6.9V24h-5v-7.3c0-1.7 0-3.9-2.4-3.9s-2.7 1.8-2.7 3.8V24h-5V8z" />
                                        </svg>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="max-w-6xl mx-auto bg-base-100 shadow-lg rounded-box overflow-hidden">
                <div class="h-96 w-full">
                    <iframe src="{{ $settings['contact_link']->getValueTrAttribute('en') }}" width="100%"
                        height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>


        </div>
    </section>
</x-layout.app>
