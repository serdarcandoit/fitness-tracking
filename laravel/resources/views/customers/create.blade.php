<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            New Customer
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <h3>Create a New Customer</h3>

                    <form method="POST" action="{{ route('customers.store') }}">
                        @csrf
                        Name: <input type="text" name="name" style="color: black;" /><br />
                        Surname: <input type="text" name="surname" style="color: black;" /><br />
                        birthYear: <input type="text" name="birthYear" style="color: black;" /><br />
                        Gender: <input type="text" name="gender" style="color: black;" /><br />
                        Address: <input type="text" name="address" style="color: black;" /><br />
                        <br />
                        <input type="submit" value="Save Customer" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>