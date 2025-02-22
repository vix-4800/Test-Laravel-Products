<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 font-sans overflow-x-auto">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100 whitespace-nowrap">
                            <tr>
                                <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Price
                                </th>
                                <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Category
                                </th>
                                <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
                            @foreach($products as $product)
                            <tr>
                                <td class="px-4 py-4 text-sm text-gray-800">
                                    {{ $product->name }}
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-800">
                                    {{ $product->price }}
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-800">
                                    {{ $product->category->name }}
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-800 flex gap-4">
                                    <a href="{{ route('products.edit', $product->id) }}" class="text-blue-600 block">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
