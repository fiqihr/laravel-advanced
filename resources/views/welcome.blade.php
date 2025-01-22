<x-app-layout>
    <div class="flex flex-col gap-4">
        <h1 class="text-4xl font-bold mb-4">Welcome,</h1>
        <p class="text-2xl">This is project karena gabut aja.</p>
        <a href="{{ route('product.index') }}" class="text-blue-500 underline">product page</a>
        <a href="{{ route('transaction.index') }}" class="text-blue-500 underline">transaction page</a>
        <a href="{{ route('kuesioner.index') }}" class="text-blue-500 underline">kuesioner</a>
    </div>
</x-app-layout>
