<footer class="bg-base-200/50 py-5">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- About Section -->
        <div>
            <div class="my-1">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="h-12">
            </div>
            <h2 class="text-xl font-bold mb-3">{{ __('footer.about_us') }}</h2>
            <p class="text-sm text-gray-400">
                <span class="font-semibold text-primary">{{ __('common.education') }}</span>,
                <span class="font-semibold text-secondary">{{ __('common.training') }}</span> &
                <span class="font-semibold text-accent">{{ __('common.consultancy') }}</span>         
            </p>
        </div>

        <!-- Useful Links -->
        <div>
            <h2 class="text-xl font-bold mb-3">{{ __('footer.quick_links') }}</h2>
            <ul class="space-y-2 text-sm">
                <x-nav.nav-link :active="request()->routeIs('webinars')" href="/webinars">{{ __('nav.webinars') }}</x-nav.nav-link>
                <x-nav.nav-link :active="request()->routeIs('services')" href="/services">{{ __('nav.services') }}</x-nav.nav-link>
                <x-nav.nav-link :active="request()->routeIs('products')" href="/products">{{ __('nav.products') }}</x-nav.nav-link>
                <x-nav.nav-link :active="request()->routeIs('about')" href="/about">{{ __('nav.about') }}</x-nav.nav-link>
            </ul>
        </div>

        <!-- Contact Info -->
        <div>
            <h2 class="text-xl font-bold mb-3">{{ __('footer.contact_us') }}</h2>
            <ul class="space-y-2 text-sm">
                <li>
                    <strong>{{ __('footer.location') }}:</strong>

                    {{ $settings['contact_address']->getValueTrAttribute(app()->getLocale()) }}
                </li>
                <li>
                    <strong>{{ __('footer.phone') }}:</strong>
                    {{ $settings['contact_phone']->getValueTrAttribute('en') ?? '' }}
                </li>
                <li>
                    <strong>{{ __('footer.email') }}:</strong>
                    {{ $settings['contact_email']->getValueTrAttribute('en') ?? '' }}
                </li>
            </ul>
            <div class="flex gap-4 mt-1">

                <a target="_blank" href="{{ $settings['social_fac']->getValueTrAttribute('en') }}"
                    class="btn btn-circle btn-ghost hover:bg-base-100/20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg>
                </a>
                <a href="{{ $settings['social_lin']->getValueTrAttribute('en') }}"
                    class="btn btn-circle btn-ghost hover:bg-base-100/20" target="_blank" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="fill-current" viewBox="0 0 24 24">
                        <path
                            d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM0 8h5v16H0V8zm7.5 0h4.7v2.2h.1c.6-1.1 2.1-2.2 4.3-2.2 4.6 0 5.4 3 5.4 6.9V24h-5v-7.3c0-1.7 0-3.9-2.4-3.9s-2.7 1.8-2.7 3.8V24h-5V8z" />
                    </svg>
                </a>

            </div>
        </div>

    </div>

    <div class="mt-5 text-center text-gray-500 text-sm">
        &copy; {{ date('Y') }} MMP. {{ __('footer.rights_reserved') }}
    </div>
</footer>
