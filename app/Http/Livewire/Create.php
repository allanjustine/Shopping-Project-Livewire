<?php

namespace App\Http\Livewire;

use App\Models\Shopping;
use Livewire\Component;

class Create extends Component
{
    public $customer_name, $address, $mobile_number, $product_name, $price, $quantity, $status, $product_stock;


    public function addToList()
    {
        $this->validate([
            'customer_name'                       =>          ['required', 'string', 'max:255'],
            'address'                =>          ['required', 'string', 'max:255'],
            'mobile_number'                   =>          ['required', 'string', 'max:255'],
            'product_name'                   =>          ['required', 'string', 'max:255'],
            'price'                   =>          ['required', 'string', 'max:255'],
            'quantity'                   =>          ['required', 'string', 'max:255'],
            'status'                   =>          ['required', 'string', 'max:255'],
            'product_name'                   =>          ['required', 'string', 'max:255']
        ]);

        Shopping::create([
            'customer_name'                =>          $this->customer_name,
            'address'         =>          $this->address,
            'mobile_number'            =>          $this->mobile_number,
            'product_name'            =>          $this->product_name,
            'price'            =>          $this->price,
            'quantity'            =>          $this->quantity,
            'status'            =>          $this->status,
            'product_stock'            =>          $this->product_stock
        ]);
        return redirect('/shopping')->with('message', $this->customer_name . ' order is added to list.');
    }

    public function render()
    {
        return view('livewire.create');
    }
}
