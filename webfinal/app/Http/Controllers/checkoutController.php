<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\check_out;
use DB;

class checkoutController extends Controller
{
    public function __construct(check_out $checkout){
        $this->checkout = $checkout;
        // $this->middleware('auth:api', ['except' => ['index']]);
    }

    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        $newCheckout=[
            'transaction_date'=>$request->transaction_date,
            'account_id'=>$request->account_id,
            'product_id'=>$request->product_id,
            'bank_id'=>$request->bank_id,
            'receipt_img'=>$request->receipt_img,
            'payment_status'=>$request->payment_status,
            'amount'=>$request->amount
        ];

        //$newCheckout = $this->checkout->create($newCheckout);

        // if($newCheckout!=null){
        //     var_dump($newCheckout);
        // }
        // else{
        //     echo "failed";
        // }

        if($newCheckout!=null)
        {
            $data = $this->checkout->create($newCheckout);
            return response()->json($data,200);
        } else {
            return response()->json(['error' => 'Checkout not added'], 404);
        }
    }

    public function show()
    {
        // $show=Checkout::all();
        // return $show;
        $checkout = check_out::all();
        $array =  Array();
        $array['data']= $checkout;
        return response()->json($array, 200); 
    }

    public function showS()
    {
        $checkout= DB::select('SELECT transaction_date, users.email, products.product_name, banks.bank_name, receipt_img, payment_status,amount
            FROM checkouts INNER JOIN users ON checkouts.account_id=users.id
            INNER JOIN products ON checkouts.product_id=products.id 
            INNER JOIN banks ON checkouts.bank_id=banks.id;');
        
        $array =  Array();
        $array['data'] = $checkout;
        return response()->json($array, 200);

        // return response()->json($checkout, 200);
    }

    public function getByID($id)
    {
        $checkoutId=check_out::find($id)->value('id');
        $data=check_out::find($id);

        return $data;
    }

    public function update(Request $request)
    {
        $updateCheckout=check_out::where('id', $request->id)->update([
            'transaction_date'=>$request->transaction_date,
            'account_id'=>$request->account_id,
            'product_id'=>$request->product_id,
            'bank_id'=>$request->bank_id,
            'receipt_img'=>$request->receipt_img,
            'payment_status'=>$request->payment_status,
            'amount'=>$request->amount
        ]);
        
        return $updateCheckout;
    }

    public function destroy($id)
    {
        check_out::where('id', $id)->delete();
    }
}