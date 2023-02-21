<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
        >
            {{ __("Dashboard") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h5 class="text-gray-500 dark:text-gray-400 m-5">
                <a href="">Master Barang</a> /
                <a href="{{ route('barang') }}">Index</a>
            </h5>
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
            >
                <div class="flex justify-center mt-5">
                    <div class="min-w-full flex items-center mt-3">
                        <table
                            class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                        >
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                            >
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Kode Barang
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Barang
                                    </th>
                                    <th scope="col" class="px-6 py-3">Brand</th>
                                    <th scope="col" class="px-6 py-3">UOM</th>
                                    <th scope="col" class="px-6 py-3">Price</th>
                                    <th scope="col" class="px-6 py-3">Stock</th>
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
                                    <td class="px-6 py-4">Silver</td>
                                    <td class="px-6 py-4">LCD 14 INCH</td>
                                    <td class="px-6 py-4">Samsung</td>
                                    <td class="px-6 py-4">Unit</td>
                                    <td class="px-6 py-4">Rp. 1.500.000</td>
                                    <td
                                        class="px-6 py-4 flex justify-center items-center"
                                    >
                                        <button
                                            type="button"
                                            class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900"
                                        >
                                            Edit Satuan
                                        </button>
                                        <button
                                            type="button"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
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
</x-app-layout>
