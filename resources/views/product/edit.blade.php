<x-app-layout>
  <a href="{{ route('product.index') }}" class="text-blue-500 underline">return</a>
    <h3 class="text-2xl font-bold text-center my-8">Update Product</h3>
    <form action="{{ route('product.update', $product->id_product) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-4 flex flex-col w-1/2 mx-auto gap-4">
            <input value="{{ $product->name }}" type="text" name="name" placeholder="product name" class="text-gray-400 border p-2 rounded-md">
            <input value="{{ $product->quantity }}" type="number" name="quantity" placeholder="quantity" class=" text-gray-400 border p-2 rounded-md">
            <button type="submit"
                class="bg-blue-500 text-white p-2 rounded-md hover:bg-opacity-70 transition-all">Update</button>
        </div>
</x-app-layout>
