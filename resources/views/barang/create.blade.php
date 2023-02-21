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
                <a href="{{ route('barang.add') }}">Create</a>
            </h5>
            <form
                class="w-full max-w-lg p-4 shadow-md bg-white dark:bg-gray-800 rounded-md text-gray-800 dark:text-gray-500"
            >
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label
                            class="block uppercase tracking-wide text-xs font-bold mb-2 text-gray-500"
                            for="grid-password"
                        >
                            Nama Barang
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-password"
                            type="text"
                        />
                        <p class="text-gray-600 text-xs italic">
                            Input Barang Dengan Lengkap
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-xs font-bold mb-2 text-gray-500"
                            for="grid-first-name"
                        >
                            Brand
                        </label>
                        <!-- <input
                            class="appearance-none block w-full bg-gray-200 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="text"
                            placeholder="Jane"
                        />
                        <p class="text-red-500 text-xs italic">
                            Please fill out this field.
                        </p> -->
                        <div class="relative">
                            <select
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-state"
                            >
                                <option>Pilih Brand</option>
                                <option>BRND/20230214/001 - Kawasaki</option>
                            </select>
                            <!-- <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                            >
                                <svg
                                    class="fill-current h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                    />
                                </svg>
                            </div> -->
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label
                            class="block uppercase tracking-wide text-xs font-bold mb-2 text-gray-500"
                            for="grid-last-name"
                        >
                            UOM
                        </label>
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                        >
                            <option>Pilih Satuan</option>
                            <option>UOM/20230214/001 - Unit</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-xs font-bold mb-2 text-gray-500"
                            for="price"
                        >
                            Harga
                        </label>
                        <div class="relative">
                            <input
                                class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="price"
                                type="text"
                            />
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label
                            class="block uppercase tracking-wide text-xs font-bold mb-2 text-gray-500"
                            for="stock"
                        >
                            Jumlah Stock
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="stock"
                            type="text"
                        />
                    </div>
                </div>
                <!-- <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-xs font-bold mb-2"
                            for="grid-city"
                        >
                            City
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-city"
                            type="text"
                            placeholder="Albuquerque"
                        />
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-xs font-bold mb-2"
                            for="grid-state"
                        >
                            State
                        </label>
                        <div class="relative">
                            <select
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-state"
                            >
                                <option>New Mexico</option>
                                <option>Missouri</option>
                                <option>Texas</option>
                            </select>
                            <!-- <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                            >
                                <svg
                                    class="fill-current h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                    />
                                </svg>
                            </div> 
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-zip"
                        >
                            Zip
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-zip"
                            type="text"
                            placeholder="90210"
                        />
                    </div>
                </div> -->
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <button
                            class="bg-transparent hover:bg-blue-400 dark:text-white text-blue-500 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                        >
                            Simpan Stock
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
