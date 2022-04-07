<x-slot name="header">

</x-slot>
<div>
    
    {{-- Do your work, then step back. --}}
</div>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                CRUD
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Color</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pets as $pet )
                        <tr>
                            <td>$pet->id</td>
                            <td>$pet->name</td>
                            <td>$pet->age</td>
                            <td>$pet->color</td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
