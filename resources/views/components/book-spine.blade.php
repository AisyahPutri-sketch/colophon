@props(['book'])

@php
// hai aku icha
    // Ketebalan dipetakan berdasarkan jumlah halaman
    $widthClass = 'w-8';
    if ($book->pages > 400) {
        $widthClass = 'w-16';
    } elseif ($book->pages > 200) {
        $widthClass = 'w-12';
    }

    // Ambil warna genre pertama (default abu-abu jika kosong)
    $genreColor = $book->genres->first()->color ?? '#6b7280';
@endphp

<a href="{{ route('books.show', $book) }}" 
   class="group relative inline-block transition-transform duration-200 hover:-translate-y-3"
   title="{{ $book->title }} - {{ $book->author }}">
    <div class="{{ $widthClass }} h-64 rounded-t-md flex items-center justify-center p-2 border-r border-black/20 shadow-md cursor-pointer"
         style="background-color: {{ $genreColor }};">
        <span class="text-white font-bold text-xs tracking-wider writing-mode-vertical truncate rotate-180">
            {{ $book->title }}
        </span>
    </div>
</a>