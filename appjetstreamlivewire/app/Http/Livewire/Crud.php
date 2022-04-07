<?php

namespace App\Http\Livewire;
use App\Models\Pet;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class Crud extends Component
{
    Public $pets, $name, $age, $color, $pet_id;

    public function index()
    {
        $pets = Pet::all();
        return view('livewire.crud', compact('pets'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'color'=>'required'
        ]);
        Pet::create($request->all());
        $pets = Pet::latest()->paginate(5);

        return view('livewire.crud', compact('pets'));
    }
    public function create(){
        return view('livewire.create');
    }
}
