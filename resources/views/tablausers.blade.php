<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tabla de Doctores') }}
        </h2>
    </x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-7xl mx-auto mt-6">
        <div class="pb-4 bg-gray-100 dark:bg-gray-900 p-4 sm:rounded-t-lg">
            <label for="table-search" class="sr-only">Buscar</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 start-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="table-search" class="block w-full max-w-xs pl-10 p-2 text-sm text-black border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar por doctores">
            </div>
        </div>
        <table class="w-full text-sm text-left text-black bg-white shadow-lg sm:rounded-lg">
            <thead class="text-xs text-black uppercase bg-gray-200 border-b">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">First Name</th>
                    <th scope="col" class="px-6 py-3">Last Name</th>
                    <th scope="col" class="px-6 py-3">Password</th>
                    <th scope="col" class="px-6 py-3">City</th>
                    <th scope="col" class="px-6 py-3">State</th>
                    <th scope="col" class="px-6 py-3">Zip</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">
                        Jane
                    </th>
                    <td class="px-6 py-4">Doe</td>
                    <td class="px-6 py-4">**********</td>
                    <td class="px-6 py-4">Albuquerque</td>
                    <td class="px-6 py-4">New Mexico</td>
                    <td class="px-6 py-4">90210</td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
