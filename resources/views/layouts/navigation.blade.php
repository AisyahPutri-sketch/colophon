<x-nav-link :href="route('shelf.index')"
    :active="request()->routeIs('shelf.*')">
    Rak Buku
</x-nav-link>

<x-nav-link :href="route('search.index')"
    :active="request()->routeIs('search.*')">
    Cari Buku
</x-nav-link>