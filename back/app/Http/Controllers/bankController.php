<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;

class bankController extends Controller
{
    public function __construct(Bank $bank){
        $this->bank = $bank;
    }

    public function create(Request $request)
    {
        $newBank=[
            'bank_name'=>$request->bank_name
        ];

        //$newBank = $this->bank->create($newBank);

        if($newBank!=null)
        {
            $data = $this->bank->create($newBank);
            return response()->json($data,200);
        } else {
            return response()->json(['error' => 'Bank is not added'], 404);
        }
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        $show=Bank::all();
        return $show;
    }

    public function getByID($id)
    {
        $bankId=Bank::find($id)->value('id');
        $data=Bank::find($id);

        return $data;
    }

    public function update(Request $request)
    {
        $updateBank=Bank::where('id', $request->id)->update([
            'bank_name'=>$request->bank_name
        ]);

        return $updateBank;
    }

    public function destroy($id)
    {
        Bank::where('id', $id)->delete();
    }
}
