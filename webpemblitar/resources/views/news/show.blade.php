<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-4xl font-bold mb-4">{{ $news->title }}</h1>
                    <p class="text-gray-600 mb-6">{{ $news->published_at->format('M d, Y') }} by {{ $news->user->name }}</p>

                    <div class="prose max-w-none">
                        {!! $news->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
