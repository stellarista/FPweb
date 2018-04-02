<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class userController extends Controller
{
    public function __construct(User $user){
        $this->user = $user;
    }

    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        $newUser=[
            'account_name'=>$request->account_name,
            'email'=>$request->email,
            'address'=>$request->address,
            'password'=>Hash::make($request->password),
            'phone'=>$request->phone,
            'birth_date'=>$request->birth_date,
            'province'=>$request->province,
            'city'=>$request->city,
            'postal_code'=>$request->postal_code,
        ];

        $newUser = $this->user->create($newUser);

        if($newUser!=null){
            //var_dump($newUser);
            return response()->json("registered", 200);
        }
        else{
            echo "failed";
        }
    }

    public function show()
    {
        // $show=User::all();
        $user=User::all();
        $array =  Array();
        $array['data']= $user;
        return response()->json($array, 200); 

        // return $show;
    }

    public function getByID($id)
    {
        $userId=User::find($id)->value('id');
        $data["users"]=User::find($id);

        return $data;
    }

    public function update(Request $request)
    {
        $updateUser=User::where('id', $request->id)->update([
            'account_name'=>$request->account_name,
            'email'=>$request->email,
            'address'=>$request->address,
            'password'=>Hash::make($request->password),
            'phone'=>$request->phone,
            'birth_date'=>$request->birth_date,
            'province'=>$request->province,
            'city'=>$request->city,
            'postal_code'=>$request->postal_code
        ]);

        return $updateUser;
    }

    public function destroy(Request $request, $id)
    {
        User::where('id', $id)->delete();
    }
}
