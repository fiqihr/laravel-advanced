<x-app-layout>
    <div class="flex flex-col justify-center items-center py-56 container">
        <a href="{{ route('kuesioner.create') }}"
            class="bg-purple-500 px-8 py-4 text-white rounded-lg font-bold text-4xl">gass?
        </a>
        <table class="mt-8 table-column">
            <thead class="border">
                <tr class="border">
                    <th class="border">username</th>
                    <th class="border">score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kuesioner as $kuesioner)
                    <tr>
                        <td class="border">{{ $kuesioner->username ?? '-' }}</td>
                        <td class="border">{{ $kuesioner->score ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
