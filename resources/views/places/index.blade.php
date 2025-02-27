<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __($tag) }}
        </h2>
    </x-slot>

    

    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($places as $place)
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('storage/'.$place['image']) }}" alt="{{ $place['name'] }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">{{ $place['name'] }}</h3>
                        <p class="text-gray-300 mb-4">{{ $place['description'] }}</p>
                        <div class="text-gray-400">
                            <p class="mb-2"><i class="fas fa-map-marker-alt mr-2"></i>{{ $place['location'] }}</p>
                        </div>
                        <a href="{{ route('places.show', $place['id']) }}"
                            class="inline-block mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                            View Details
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Pagination -->
            @if ($places->hasPages())
            <div class="mt-6">
                <nav class="flex justify-end">
                    <ul class="flex items-center space-x-1">
                        {{-- Previous Page --}}
                        @if ($places->onFirstPage())
                        <li class="px-2 py-1 text-gray-400 cursor-not-allowed">
                            <span>&lt;</span>
                        </li>
                        @else
                        <li>
                            <a href="{{ $places->previousPageUrl() }}"
                                class="px-2 py-1 text-gray-300 hover:text-white transition-colors">
                                &lt;
                            </a>
                        </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($places->getUrlRange(1, $places->lastPage()) as $page => $url)
                        @if ($page == $places->currentPage())
                        <li>
                            <span class="px-4 py-2 bg-blue-600 text-white rounded-lg">
                                {{ $page }}
                            </span>
                        </li>
                        @else
                        <li>
                            <a href="{{ $url }}"
                                class="px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg transition-colors">
                                {{ $page }}
                            </a>
                        </li>
                        @endif
                        @endforeach

                        {{-- Next Page --}}
                        @if ($places->hasMorePages())
                        <li>
                            <a href="{{ $places->nextPageUrl() }}"
                                class="px-2 py-1 text-gray-300 hover:text-white transition-colors">
                                &gt;
                            </a>
                        </li>
                        @else
                        <li class="px-2 py-1 text-gray-400 cursor-not-allowed">
                            <span>&gt;</span>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
            @endif
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
