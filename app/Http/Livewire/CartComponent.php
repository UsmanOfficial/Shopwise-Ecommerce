<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{

    public function IncreaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }

    public function DecreaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
    }

    public function destroy($rowId){
        Cart::remove($rowId);
        session()->flash('success_message','Item deleted successfully') ;
    }

    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.frontend');
    }
}
