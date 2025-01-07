<x-app-layout>
    <a href="{{ route('product.index') }}" class="text-blue-500 underline">product</a>
    <h3 class="text-2xl font-bold text-center my-8">Transaction</h3>
    <div class="flex justify-end mb-4">
        <a href="{{ route('transaction.create') }}"
            class="rounded-md px-2 py-1 bg-green-500 text-white hover:bg-opacity-70">add
            transaction</a>
    </div>
    <table class="border-collapse border border-slate-800 w-full ">
        <thead>
            <tr>
                <th class="border border-gray-400 px-4 py-2 bg-gray-100">Transaction ID</th>
                <th class="border border-gray-400 px-4 py-2 bg-gray-100">Amount</th>
                <th class="border border-gray-400 px-4 py-2 bg-gray-100">Product</th>
                <th class="border border-gray-400 px-4 py-2 bg-gray-100">Count</th>
                <th class="border border-gray-400 px-4 py-2 bg-gray-100">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $transaction->id_transaction }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $transaction->amount }} IDR</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $transaction->product->name }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $transaction->count }}</td>
                    <td class="border border-gray-400 px-4 py-2 flex justify-center">
                        <a href="{{ route('transaction.edit', $transaction->id_transaction) }}"
                            class="rounded-md px-2 py-1 bg-yellow-500 text-white hover:bg-opacity-70">edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
