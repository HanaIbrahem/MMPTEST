@php
  $locale = app()->getLocale();
  $targetLocale = $locale === 'ku' ? 'en' : 'ku';
@endphp

<a 
  href="{{ route('language.switch', $targetLocale) }}" 
  class="p-1 rounded-full hover:bg-gray-200 transition"
>
  @if ($locale === 'ku')
    <img src="{{ asset('images/flag-en.png') }}" alt="Switch to English" class="w-6 h-6">
  @else
    <img src="{{ asset('images/flag-ku.png') }}" alt="Switch to Kurdish" class="w-6 h-6">
  @endif
</a>
