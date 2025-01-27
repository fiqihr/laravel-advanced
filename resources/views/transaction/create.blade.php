<x-app-layout>
    <a href="{{ route('transaction.index') }}" class="text-blue-500 underline">return</a>
    <h3 class="text-2xl font-bold text-center my-8">Create Transaction</h3>
    @if ($errors->any())
        <div class="bg-red-200 text-red-500 p-4 rounded-md mb-4 w-1/2 mx-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('transaction.store') }}" method="POST">
        @csrf
        <div class="mb-4 flex flex-col w-1/2 mx-auto gap-4">
            <input type="number" name="amount" placeholder="amount" class="text-gray-400 border p-2 rounded-md">
            {{-- <input type="number" name="id_product" placeholder="product" class="border p-2 rounded-md"> --}}
            <select class="border p-2 rounded-md text-gray-400" name="id_product">
                <option selected disabled>choose product</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id_product }}">{{ $product->name }}</option>
                @endforeach
            </select>
            <input type="number" name="count" placeholder="count" class=" text-gray-400 border p-2 rounded-md">
            <button type="submit"
                class="bg-blue-500 text-white p-2 rounded-md hover:bg-opacity-70 transition-all">save</button>
        </div>
</x-app-layout>
