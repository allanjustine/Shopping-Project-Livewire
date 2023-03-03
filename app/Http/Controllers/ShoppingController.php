<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function index() {
        return view('pages.shopping');
    }
    public function edit($id) {
        return view('pages.edit', compact('id'));
    }
    public function view($id) {
        return view('pages.view', compact('id'));
    }
    public function create() {
        return view('pages.create');
    }
}
