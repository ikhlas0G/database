<?php

namespace App\Http\Controllers;

use App\Models\Chosenproduct;
use Illuminate\Http\Request;

class ChosenproductController extends Controller
{
    protected $item;
    function __construct()
    {
        $this->item = new Chosenproduct();
    }


    // index
    public function index(){
        return $this->item->all();
    }
    
    // store 
    public function store(Request $request)
    {
        return $this->item->create($request->all());
    }

    // destroy
    public function destroy(string $id)
    {
        return $this->item->find($id)->delete();
    }

    // update
    public function update(Request $request, $id)
    {
        return $this->item->find($id)->update($request->all());
    }
}
