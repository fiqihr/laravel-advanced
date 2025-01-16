<x-app-layout>
    <div class="container ">
        <form action="{{ route('kuesioner.store') }}" method="POST">
            @csrf
            <section id="username" class="mb-2">
                <p>Username:</p>
                <input type="text" placeholder="masukkan username" class="rounded-md" name="username">
            </section>
            <hr>
            <section id="q1" class="mt-4">
                <p class="mb-2">1. Prosedur pelayanan di BAA tidak berbelit-belit</p>
                <div class="flex items-center">
                    <input id="q1_1" type="radio" value="30" name="q1"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="q1_1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sangat Tidak
                        Setuju</label>
                </div>
                <div class="flex items-center">
                    <input id="q1_2" type="radio" value="50" name="q1"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="q1_2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak
                        Setuju</label>
                </div>
                <div class="flex items-center">
                    <input id="q1_3" type="radio" value="75" name="q1"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="q1_3"
                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Setuju</label>
                </div>
                <div class="flex items-center">
                    <input id="q1_4" type="radio" value="100" name="q1"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="q1_4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sangat
                        Setuju</label>
                </div>
            </section>
            <hr>
            <section id="q2" class="mt-4">
                <p class="mb-2">2. Proses pelayanan di BAA cepat dan tepat </p>
                <div class="flex items-center">
                    <input id="q2_1" type="radio" value="30" name="q2"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="q2_1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sangat Tidak
                        Setuju</label>
                </div>
                <div class="flex items-center">
                    <input id="q2_2" type="radio" value="50" name="q2"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="q2_2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak
                        Setuju</label>
                </div>
                <div class="flex items-center">
                    <input id="q2_3" type="radio" value="75" name="q2"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="q2_3"
                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Setuju</label>
                </div>
                <div class="flex items-center">
                    <input id="q2_4" type="radio" value="100" name="q2"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="q2_4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sangat
                        Setuju</label>
                </div>
            </section>
            <hr>
            <section id="q3" class="mt-4">
                <p class="mb-2">3. Staff BAA memberikan pelayanan yang memuaskan sesuai kebutuhan mahasiswa </p>
                <div class="flex items-center">
                    <input id="q3_1" type="radio" value="30" name="q3"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="q3_1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sangat Tidak
                        Setuju</label>
                </div>
                <div class="flex items-center">
                    <input id="q3_2" type="radio" value="50" name="q3"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="q3_2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak
                        Setuju</label>
                </div>
                <div class="flex items-center">
                    <input id="q3_3" type="radio" value="75" name="q3"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="q3_3"
                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Setuju</label>
                </div>
                <div class="flex items-center">
                    <input id="q3_4" type="radio" value="100" name="q3"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="q3_4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sangat
                        Setuju</label>
                </div>
            </section>
            <hr>
            <div class="flex justify-center mt-4 ">
                <button type="submit"
                    class="bg-green-500 text-white rounded-md hover:opacity-70 px-4 py-2">Selesai</button>
            </div>

        </form>
    </div>
</x-app-layout>
