<x-app-layout>
    <a href="{{ route('transaction.index') }}" class="text-blue-500 underline">transaction</a>
    <h3 class="text-2xl font-bold text-center my-8">Product</h3>
    <div class="flex justify-end mb-4">
        <a href="{{ route('product.create') }}"
            class="rounded-md px-2 py-1 bg-green-500 text-white hover:bg-opacity-70">add
            product</a>
    </div>
    <table class="border-collapse border border-slate-800 w-full ">
        <thead>
            <tr>
                <th class="border border-gray-400 px-4 py-2 bg-gray-100">#</th>
                <th class="border border-gray-400 px-4 py-2 bg-gray-100">Name</th>
                <th class="border border-gray-400 px-4 py-2 bg-gray-100">Quantity</th>
                <th class="border border-gray-400 px-4 py-2 bg-gray-100">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $product->name }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $product->quantity }}</td>
                    <td class="border border-gray-400 px-4 py-2 flex justify-center gap-2">
                        <a href="{{ route('product.edit', $product->id_product) }}"
                            class="rounded-md px-2 py-1 bg-yellow-500 text-white hover:bg-opacity-70">edit</a>
                        <form action="{{ route('product.destroy', $product->id_product) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="rounded-md px-2 py-1 bg-red-500 text-white hover:bg-opacity-70">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
