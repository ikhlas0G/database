<?php

namespace App\Http\Controllers;

use App\Models\Skincare;
use Illuminate\Http\Request;

class skincareController extends Controller
{
    protected $item;
    function __construct()
    {
        $this->item = new Skincare();
    }
    

    public function index(){
        return $this->item->all();
    }
    public function store(Request $request){
        return $this->item->create($request->all());
    }
    public function destroy(string $id)
    {
        return $this->item->find($id)->delete();
    }
    public function update(Request $request, $id)
    {
        return $this->item->find($id)->update($request->all());
    }
}
