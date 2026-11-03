<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4">
        <h1 class="text-2xl font-bold mb-6">Rak Buku Komunitas</h1>

        <!-- Tampilan Rak Buku Visual -->
        <div class="flex flex-wrap items-end gap-2 p-6 bg-amber-900/10 rounded-lg border-b-8 border-amber-900">
            @forelse($books as $book)
                <x-book-spine :book="$book" />
            @empty
                <p>Belum ada buku di rak.</p>
            @endforelse
        </div>

        <div class="mt-6">
            {{ $books->links() }}
        </div>
    </div>
</x-app-layout>