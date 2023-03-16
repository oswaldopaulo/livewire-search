<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\List1;

class Livesearch extends Component
{

    public $search = "";
    public $result;


    public function updatedSearch()
    {


            $this->result = List1::where('desc', 'like', '%' . $this->search . '%')->get();

    }

    public function selected($id){
        $this->result=[];

        $r = List1::find($id);

        if($r){
            $this->search = $r->desc ?? "";
        }

    }
    public function render()
    {
        return view('livewire.livesearch');
    }
}
