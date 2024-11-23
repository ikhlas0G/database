<?php

namespace App\Http\Controllers;

use App\Models\Makeup;
use Illuminate\Http\Request;

class makeupController extends Controller
{

    protected $item;
    function __construct()
    {
        $this->item = new Makeup();
    }



    public function index()
    {
        return $this->item->all();
    }


    // store 
    public function store(Request $request)
    {
        return $this->item->create($request->all());
    }

    
    public function show(string $id)
    {
        //
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
