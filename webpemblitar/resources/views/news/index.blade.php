<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold mb-6">News</h1>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($news as $item)
                            <div class="bg-gray-100 p-4 rounded-lg">
                                <a href="{{ route('news.show', $item->slug) }}">
                                    <img src="{{ $item->getFirstMediaUrl('news') }}" alt="{{ $item->title }}" class="w-full h-48 object-cover rounded-t-lg">
                                    <div class="p-4">
                                        <h2 class="font-bold text-lg">{{ $item->title }}</h2>
                                        <p class="text-gray-600 text-sm">{{ $item->published_at->format('M d, Y') }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-6">
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
