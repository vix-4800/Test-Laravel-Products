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
                    <div class="flex flex-col overflow-x-auto min-w-full align-middle">
                        <div class="overflow-hidden border rounded-lg border-gray-300">
                            <table class=" min-w-full rounded-xl">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize">Name</th>
                                        <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize">Price</th>
                                        <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize">Category</th>
                                        <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr class="odd:bg-white even:bg-gray-50">
                                        <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                            {{ $product->name }}
                                        </td>
                                        <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">
                                            {{ $product->price }}
                                        </td>
                                        <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">
                                            {{ $product->category->name }}
                                        </td>
                                        <td class="p-5 flex gap-4 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">
                                            <a href="{{ route('products.edit', $product->id) }}" class="text-blue-600">Edit</a>
                                            <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
