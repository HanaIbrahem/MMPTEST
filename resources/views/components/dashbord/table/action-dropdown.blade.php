@props([
    'editUrl' => '#',
    'deleteUrl' => '#',
    'toggleUrl' => '#',
    'isActive' => false,
    'showUrl'=>'#',
])

<div class="relative inline-block text-left" x-data="{ open: false }">
    <button @click="open = !open" class="btn btn-sm btn-primary">
        Actions
        <svg class="ml-1 w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div
        x-show="open"
        @click.away="open = false"
        class="absolute right-0 mt-2 w-40 bg-white border rounded shadow z-10"
        x-transition
        style="display: none;"
    >
        <a href="{{ $editUrl }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            Edit
        </a>

        <form action="{{ $deleteUrl }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                Delete
            </button>
        </form>

        <a href="{{ $showUrl }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            Show
        </a>

        <form action="{{ $toggleUrl }}" method="POST">
            @csrf
            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                {{ $isActive ? 'Deactivate' : 'Activate' }}
            </button>
        </form>
    </div>
</div>
