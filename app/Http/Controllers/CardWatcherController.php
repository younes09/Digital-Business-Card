<?php

namespace App\Http\Controllers;
use App\Models\ContactList;
use App\Models\CustomerInfo;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CardWatcherController extends Controller
{
    // show the digital busness card info
    function watchCardInfo($id){
        $customerData = CustomerInfo::where('id',$id)->get();
        if (Auth::id() == null) {
            return view('cardWatch',['customer_data'=>$customerData]);
        }else{
           // check if this card is in my contacts
            $user_id = auth()->user()->id;
            $card_id = $id;
            $cardsConact = ContactList::where('user_id',$user_id)
                                        ->where('card_id',$card_id)
                                        ->get();
            if (count($cardsConact) != 0) $contctExist = true;
            else $contctExist = false;


            return view('cardWatch',['customer_data'=>$customerData])->with('contctExist', $contctExist);
            }

    }

}
