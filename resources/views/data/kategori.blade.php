<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
        >
            {{ __("Dashboard") }}
        </h2>
    </x-slot>

    <div class="p-12 text-base">
        <div class="min-w-full min-h-full mx-auto sm:px-6 lg:px-8">
            <h5
                class="text-gray-500 dark:text-gray-400 mb-5 flex px-12 text-xl"
            >
                <a href="">Master Data</a> /
                <a href="{{ route('kategori') }}">Edit kategori</a>
            </h5>
            <div class="flex gap-5">
                <div
                    class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg w-1/3 flex justify-center items-center"
                >
                    <div class="w-full px-5">
                        <label
                            class="block uppercase tracking-wide font-bold mb-2 text-gray-500"
                            for="kategori"
                        >
                            kategori
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="kategori"
                            type="text"
                        />
                    </div>
                </div>

                <div
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-2/3"
                >
                    <div class="flex justify-center mt-5">
                        <div
                            class="col-span-2 flex items-center mt-3 py-6 max-w-5xl"
                        >
                            <table
                                class="w-full text-left text-gray-500 dark:text-gray-400"
                            >
                                <thead
                                    class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                                >
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Kode kategori
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nama
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Option
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-xl">
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            KTG/20230214/001
                                        </th>
                                        <td class="px-6 py-4">
                                            Part Sport Kawasaki
                                        </td>
                                        <td
                                            class="px-6 py-4 flex justify-center items-center"
                                        >
                                            <button
                                                type="button"
                                                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900"
                                            >
                                                Edit kategori
                                            </button>
                                            <button
                                                type="button"
                                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                            >
                                                Hapus kategori
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
