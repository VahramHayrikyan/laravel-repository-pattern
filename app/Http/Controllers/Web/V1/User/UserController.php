<?php

namespace App\Http\Controllers\Web\V1\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\BillingDetailsRequest;
use App\Models\BillingDetail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function storeAccount()
    {
        return view('yii.user.account');
    }
    
    public function billingDetails()
    {
        $data['billingDetails'] = auth()->user()->billingDetails; // 5MB 4ms
        return view('yii.user.billingDetails.index',compact('data'));
    }

    public function billingDetailsPost(BillingDetailsRequest $request)
    {
        $data = $request->validated();
        $authId = auth()->id();
        $test = BillingDetail::updateOrCreate(['user_id'=>$authId],[
            'full_name'=>$data['full_name'],
            'phone'=>$data['phone'],
            'address'=>$data['address'],
            'city'=>$data['city'],
            'region'=>$data['region'],
            'country_code'=>$data['country_code_code'],
            'zip_code'=>$data['zip_code'],
            'date_of_birth'=>$data['date_of_birth'],
        ]);
        return back()->with('Success','success');
    }

}
