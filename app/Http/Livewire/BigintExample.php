<?php

namespace App\Http\Livewire;

use App\Models\TestModel;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class BigintExample extends Component
{
    public $bigIntegerProp;

    public $modelProp;

    public $collectionProp;

    protected $rules = [
        'modelProp.big_integer' => 'required',
        'collectionProp.*.big_integer' => 'required'
    ];

    public function mount()
    {
        $this->bigIntegerProp = 2**53+1;

        $this->modelProp = new TestModel();
        $this->modelProp->big_integer = 2**53+2;

        $this->collectionProp = new Collection();
        for ($i=10; $i<=20; $i++) {
            $model = new TestModel();
            $model->big_integer = 2**53+$i;

            $this->collectionProp->put($i, $model);
        }
    }

    public function render()
    {
        return view('livewire.bigint-example');
    }
}
