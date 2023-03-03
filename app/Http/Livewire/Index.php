<?php

namespace App\Http\Livewire;

use App\Models\Shopping;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search, $status = 'All';
    public $shoppingId, $shoppingDelete;
    public function loadShopping()
    {
        $query = Shopping::orderBy('customer_name', 'asc')
        ->search($this->search);

        if ($this->status != 'All') {
            $query->where('status', $this->status);
        }

        $shoppings = $query->paginate(5);

        return compact('shoppings');
    }
    public function delete($shoppingId)
    {
        $this->shoppingDelete = $shoppingId;
    }
    public function deleted()
    {
        Shopping::find($this->shoppingDelete)->delete();
        return redirect('/shopping')->with('message', 'ID # ' . $this->shoppingDelete . ' is now deleted to list.');
    }
    public function render()
    {
        return view('livewire.index', $this->loadShopping());
    }
}
