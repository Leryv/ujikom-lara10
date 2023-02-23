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
            <h5 class="text-gray-500 dark:text-gray-400 m-5 flex px-12">
                <a href="">Master Data</a> /
                <a href="{{ route('brand') }}">Edit Brand</a>
            </h5>
            <div class="flex gap-10">
                <div
                    class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg w-1/3 flex justify-center items-center"
                >
                    <div class="w-full px-5">
                        <label
                            class="block uppercase tracking-wide font-bold mb-2 text-gray-500"
                            for="brand"
                        >
                            Brand
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="brand"
                            type="text"
                        />
                    </div>
                </div>

                <div
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-2/3"
                >
                    <div class="flex justify-center mt-5">
                        <div class="max-w-5xl flex items-center mt-3">
                            <table
                                class="text-left text-gray-500 dark:text-gray-400"
                            >
                                <thead
                                    class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                                >
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Kode Brand
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nama Brand
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Option
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            KTG/20220403/001
                                        </th>
                                        <td class="px-6 py-4">LCD 14 INCH</td>
                                        <td
                                            class="px-6 py-4 flex justify-center items-center"
                                        >
                                            <button
                                                type="button"
                                                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium roundemax-w-6xl px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900"
                                            >
                                                Edit Satuan
                                            </button>
                                            <button
                                                type="button"
                                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium roundemax-w-6xl px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                            >
                                                Hapus Satuan
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
