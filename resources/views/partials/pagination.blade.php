@if ($paginator->hasPages())
    <div class="flex justify-center">
        <div class="join">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button class="join-item btn btn-disabled">«</button>
            @else
                <button class="join-item btn" onclick="loadPage('{{ $paginator->previousPageUrl() }}')">«</button>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
                @if ($page == $paginator->currentPage())
                    <button class="join-item btn btn-active">{{ $page }}</button>
                @else
                    <button class="join-item btn" onclick="loadPage('{{ $url }}')">{{ $page }}</button>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <button class="join-item btn" onclick="loadPage('{{ $paginator->nextPageUrl() }}')">»</button>
            @else
                <button class="join-item btn btn-disabled">»</button>
            @endif
        </div>
    </div>

    <script>
        function loadPage(url) {
            const urlParams = new URLSearchParams(url.split('?')[1]);
            const page = urlParams.get('page');

            const webinarComponent = Alpine.$data(document.querySelector('[x-data]'));
            webinarComponent.filters.page = page;
            webinarComponent.filterWebinars();
        }
    </script>
@endif
