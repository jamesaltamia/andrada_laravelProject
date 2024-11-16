<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="mb-6">
                    <h3 class="text-lg font-medium mb-4 bg-blue-500" style="text-align: center; font-family: 'Times New Roman', Times, serif;">Add New Student</h3>
                    <form method="POST" action="#">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-gray-700">Name</label>
                                <input type="text" id="name" name="name" class="mt-1 block
                                w-full border-gray-300 rounded-md shadow-sm">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700">Email</label>
                                <input type="email"id="name" name="name" class="mt-1 block
                                w-full border-gray-300 rounded-md shadow-sm">
                            </div>
                            <div>
                                <label for="phone" class="block text-gray-700">Phone</label>
                                <input type="text"id="name" name="name" class="mt-1 block
                                w-full border-gray-300 rounded-md shadow-sm">
                            </div>
                            <div>
                                <label for="address" class="block text-gray-700">Address</label>
                                <input type="text"id="name" name="name" class="mt-1 block
                                w-full border-gray-300 rounded-md shadow-sm">
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-red-700
                            text-white font-bold py-2 px-4 rounded">
                                Add Student
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Student List Table -->
                <div class="mt-8">
                    <h3 class="text-lg font- mb-4 bg-blue-500" style="text-align: center; font-family: 'Times New Roman', Times, serif;">Student List</h3>
                    <table class="min-w-full bg-white border">
                        <thead>
                            <tr>
                                <th class="py-2 border-b">#</th>
                                <th class="py-2 border-b">Name</th> 
                                <th class="py-2 border-b">Email</th>
                                <th class="py-2 border-b">Phone</th>
                                <th class="py-2 border-b">Address</th>
                                <th class="py-2 border-b">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="py-2 border-b px-4">1</td>
                                <td class="py-2 border-b px-4">Rave Laurenz Altavas</td>
                                <td class="py-2 border-b px-4">ravepogi123.com</td>
                                <td class="py-2 border-b px-4">09821012345</td>
                                <td class="py-2 border-b px-4">Panay</td>
                                <td class="py-2 border-b px-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <a href="#" class="text-red-500 hover:text-red-700">Delete</a>
                                </td>
                            </tr>
                    </table>
                </div>
              
            </div>
        </div>
    </div>
</x-app-layout>
