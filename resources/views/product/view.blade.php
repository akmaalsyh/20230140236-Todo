<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- Header --}}
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex items-center gap-3">
                            <a href="{{ route('product.index') }}"
                                class="p-1.5 rounded-md text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </a>
                            <div>
                                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 tracking-tight">Product Detail</h2>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-0.5">Viewing product #{{ $product->id }}</p>
                            </div>
                        </div>

                        {{-- Action Buttons --}}
                        <div class="flex items-center gap-2">
                            @can('update', $product)
                                <x-edit-product url="{{ route('product.edit', $product->id) }}" name="Product" />
                            @endcan
                            @can('delete', $product)
                                <x-delete-product url="{{ route('product.delete', $product->id) }}" name="Product" />
                            @endcan
                        </div>
                    </div>

                    {{-- Detail Card --}}
                    <div class="rounded-xl border border-gray-200 dark:border-gray-700 divide-y divide-gray-200 dark:divide-gray-700">

                        {{-- Name --}}
                        <div class="flex items-center px-6 py-5">
                            <div class="w-40 shrink-0 text-base font-semibold text-gray-500 dark:text-gray-400">Product Name</div>
                            <div class="text-base font-bold text-gray-900 dark:text-gray-100">{{ $product->name }}</div>
                        </div>

                        {{-- Quantity --}}
                        <div class="flex items-center px-6 py-5">
                            <div class="w-40 shrink-0 text-base font-semibold text-gray-500 dark:text-gray-400">Quantity</div>
                            <div>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-bold {{ $product->qty > 10 ? 'bg-green-100 text-green-800 dark:bg-green-900/40 dark:text-green-400' : 'bg-red-100 text-red-800 dark:bg-red-900/40 dark:text-red-400' }}">
                                    {{ $product->qty }} {{ $product->qty > 10 ? 'In Stock' : 'Low Stock' }}
                                </span>
                            </div>
                        </div>

                        {{-- Price --}}
                        <div class="flex items-center px-6 py-5">
                            <div class="w-40 shrink-0 text-base font-semibold text-gray-500 dark:text-gray-400">Price</div>
                            <div class="text-base font-bold text-indigo-600 dark:text-white">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </div>
                        </div>

                        {{-- Owner --}}
                        <div class="flex items-center px-6 py-5">
                            <div class="w-40 shrink-0 text-base font-semibold text-gray-500 dark:text-gray-400">Owner</div>
                            <div class="flex items-center gap-3">
                                <div class="h-8 w-8 rounded-full bg-indigo-100 dark:bg-indigo-900/50 flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-sm font-bold">
                                    {{ substr($product->user->name ?? '?', 0, 1) }}
                                </div>
                                <span class="text-base font-medium text-gray-900 dark:text-gray-100">{{ $product->user->name ?? '-' }}</span>
                            </div>
                        </div>

                        {{-- Created At --}}
                        <div class="flex items-center px-6 py-5">
                            <div class="w-40 shrink-0 text-base font-semibold text-gray-500 dark:text-gray-400">Created At</div>
                            <div class="text-base font-medium text-gray-900 dark:text-gray-200">
                                {{ $product->created_at->format('d M Y, H:i') }}
                            </div>
                        </div>

                        {{-- Updated At --}}
                        <div class="flex items-center px-6 py-5">
                            <div class="w-40 shrink-0 text-base font-semibold text-gray-500 dark:text-gray-400">Updated At</div>
                            <div class="text-base font-medium text-gray-900 dark:text-gray-200">
                                {{ $product->updated_at->format('d M Y, H:i') }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>