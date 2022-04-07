<x-slot name="header">

</x-slot>
<x-app-layout>
    <div class="row">
     <div class="col-lg-12 margin-tb">
            <div clas="pull-left">
                <h1 class="text-center">Añadir Mascota<h1>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problems with your input.<br></br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach    
            </ul>
        </div>
    @endif
    <form action="{{ route('pet.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="block px-4 py-2">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <x-jet-input type="text" name="name" id="name" class="mt-1 block w-3/4" placeholder="Nombre de la mascota"/>
                </div>
            </div>
            <div class="block px-4 py-2">
                <div class="form-group">
                    <strong>Color:</strong>
                    <x-jet-input type="text" name="color" id="color" class="mt-1 block w-1/4" placeholder="Color de la mascota"/>
                </div>
            </div>
            <div class="block px-4 py-2">
                <div class="form-group">
                    <strong>Edad:</strong>
                    <x-jet-input type="number" name="age" id="age" class="mt-1 block w-1/4" placeholder="0"/>
                </div>
            </div>
            <div class="col-x2-12 col-sm-12 col-md-1 text-center">
                <x-jet-button type="submit" class="btn btn-dark">
                Guardar
                </x-jet-button>
                
            </div>
        </div>
    </form>

</x-app-layout>