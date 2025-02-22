<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product') . ' ' . $product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 font-sans overflow-x-auto">
                    <form action="{{route('products.update', $product->id)}}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="flex gap-4">
                            <div class="relative mb-6 w-1/2">
                                <label class="flex items-center mb-2 text-gray-600 dark:text-gray-200 text-sm font-medium">Name</label>
                                <input name="name" type="text" class="block rounded-lg w-full h-11 px-5 py-2.5 leading-7 text-base font-normal shadow-xs text-gray-900 dark:text-gray-100 bg-transparent border border-gray-300 placeholder-gray-400 focus:outline-none " placeholder="{{$product->name}}" required>
                            </div>
                            <div class="relative mb-6 w-1/2">
                                <label class="flex items-center mb-2 text-gray-600 dark:text-gray-200 text-sm font-medium">Price</label>
                                <input name="price" type="number" step="0.01" min="0" class="block rounded-lg w-full h-11 px-5 py-2.5 leading-7 text-base font-normal shadow-xs text-gray-900 dark:text-gray-100 bg-transparent border border-gray-300 placeholder-gray-400 focus:outline-none " placeholder="{{$product->price}}" required>
                            </div>
                        </div>

                        <div class="relative mb-6">
                            <label class="flex items-center mb-2 text-gray-600 dark:text-gray-200 text-sm font-medium">Description</label>
                            <div class="flex">
                                <div class="relative w-full">
                                    <textarea name="description" class="block w-full rounded-lg h-40 px-4 py-2.5 text-base leading-7 font-normal shadow-xs dark:text-gray-100 text-gray-900 bg-transparent border border-gray-300 placeholder-gray-400 focus:outline-none resize-none" placeholder="Description of the product..." required></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="w-full px-4 py-2 rounded-lg h-12 bg-gray-600 dark:bg-gray-200 hover:bg-gray-300 transition-all duration-700shadow-xs text-white dark:text-gray-800 text-base font-semibold leading-6">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
