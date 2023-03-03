<?php

namespace App\Http\Livewire;

use App\Models\Shopping;
use Livewire\Component;

class Edit extends Component
{
    public $shoppingId;
    public $customer_name, $address, $mobile_number, $product_name, $price, $quantity, $product_stock, $status = 'All';
    public function mount()
    {
        $this->customer_name = $this->shopping->customer_name;
        $this->address = $this->shopping->address;
        $this->mobile_number = $this->shopping->mobile_number;
        $this->product_name = $this->shopping->product_name;
        $this->price = $this->shopping->price;
        $this->quantity = $this->shopping->quantity;
        $this->status = $this->shopping->status;
        $this->product_stock = $this->shopping->product_stock;
    }
    public function loadShopping()
    {
        $shoppings = Shopping::where('product_name', $this->product_name)->get();

        return compact('shoppings');
    }

    public function editFromList()
    {
        $this->validate([
            'customer_name'             =>          ['required', 'string', 'max:255'],
            'address'      =>          ['required', 'string', 'max:255'],
            'mobile_number'         =>          ['required', 'string', 'max:255'],
            'product_name'         =>          ['required', 'string', 'max:255'],
            'price'         =>          ['required', 'string', 'max:255'],
            'quantity'         =>          ['required', 'string', 'max:255'],
            'status'         =>          ['required', 'string', 'max:255'],
            'product_stock'         =>          ['required', 'string', 'max:255']
        ]);

        $this->shopping->update([
            'customer_name'             =>      $this->customer_name,
            'address'      =>      $this->address,
            'mobile_number'         =>      $this->mobile_number,
            'product_name'         =>      $this->product_name,
            'price'         =>      $this->price,
            'quantity'         =>      $this->quantity,
            'status'         =>      $this->status,
            'product_stock'         =>      $this->product_stock
        ]);

        return redirect('/shopping')->with('message', $this->product_name . ' is now updated.');
    }
    public function getShoppingProperty()
    {
        return Shopping::find($this->shoppingId);
    }
    public function render()
    {
        return view('livewire.edit', $this->loadShopping());
    }
}
