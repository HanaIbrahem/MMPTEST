@props(['title', 'id'])

<li x-data="{ id: '{{ $id }}' }" 
    @mouseenter="setDropdown(id, 100)"
    @mouseleave="closeDropdown(200)"
    @click="openDropdown = (openDropdown === id ? null : id)">
  <details :open="openDropdown === id">
    <summary class="hover:text-primary">{{ $title }}</summary>
    <ul class="bg-base-100 rounded-t-none p-2" x-show="openDropdown === id" x-transition>
      {{ $slot }}
    </ul>
  </details>
</li>