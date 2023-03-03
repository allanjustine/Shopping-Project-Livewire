<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Shopping;

class View extends Component
{
    public $shoppingId, $customer_name, $address, $mobile_number, $product_name, $price, $quantity, $product_stock, $status;

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
    public function viewShopping()
    {
        $shoppings = Shopping::where('customer_name', $this->customer_name)->get();

        return compact('shoppings');
    }
    public function getShoppingProperty()
    {
        return Shopping::find($this->shoppingId);
    }

    public function render()
    {
        return view('livewire.view', $this->viewShopping());
    }
}
