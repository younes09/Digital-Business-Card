<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Models\CustomerInfo;
use App\Models\ContactList;

class CardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    // show the index of digital buisniss card
    public function Mycards(){
        $user_Id = auth()->user()->id;
        $customerData = CustomerInfo::where('id_comstme_login',$user_Id)->get();

        return view('index',['customer_data'=>$customerData]);
    }

    // get contact view for user
    public function showContact(){
        $user_Id = auth()->user()->id;
        $customerData = ContactList::where('user_id',$user_Id)->get(); // get contact list from contact table of id user
        $i=0;
        $cards = [];
        foreach ($customerData as $item) {
            $cards[$i] = CustomerInfo::where('id',$item->card_id)->get(); //get cards of all contact for that user store them in table named (cards)
            $i++;
        }
        return view('contact',['customer_data'=>$cards]);
    }

    // get add new card view
    public function addCard(){
        $user_Id = auth()->user()->id;
        $user_type = User::where('id',$user_Id)->get()[0]['user_type'];
        $NumberOfCards = CustomerInfo::where('id_comstme_login',$user_Id)->get();
        if ($user_type == "free"){
            if(count($NumberOfCards)>0){
                //return '<h1 style="text-align: center;margin-top: 100px;">Max cards for free user is (1) card !<h1>';
                return Redirect::back()->withErrors(['msg' => 'free']);
            }
            else return view('newCard');
        }
        else return view('newCard');
    }

    // sho edit view for user
    public function editMyCard($id){
        $customerInfo = CustomerInfo::where('id',$id)->get();
        return view('editMyCard',['cd'=>$customerInfo]);
    }

    // add new buisness card
    function InsertNewCard(Request $request){
        $photoFile = $request->hasFile('photo');
        $logoFile = $request->hasFile('logo');
        $photoName = null;
        $logoName = null;

        //insert images to the data base if ther is image
        if ($photoFile) {
            $newFile = $request->file('photo');
            $photoName = $newFile->store('users','myimg');
        }
        if ($logoFile) {
            $newFile = $request->file('logo');
            $logoName = $newFile->store('users','myimg');
        }
        //collect rquest data and put them into a var
        $photo = $photoName; //add photo
        $logo = $logoName; //add logo
        $name = $request->input('name');
        $poste = $request->input('poste');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $fix = $request->input('fix');
        $web = $request->input('web');
        $address = $request->input('address');
        $description = $request->input('description');
        $facbook = $request->input('facbook');
        $instagram = $request->input('instagram');
        $linkedin = $request->input('linkedin');
        $youtube = $request->input('youtube');
        $tiktok = $request->input('tiktok');
        $twitter = $request->input('twitter');
        $line = $request->input('line');
        $pinterest = $request->input('pinterest');
        $renren = $request->input('renren');
        $tencent_weibo = $request->input('tencent_weibo');
        $vk = $request->input('vk');
        $wechat = $request->input('wechat');
        $weibo = $request->input('weibo');
        $user_Id = auth()->user()->id;

        if ($photo != null && $logo != null) {
            $isInsertSuccsess = CustomerInfo::insert([
                'photo'=>$photo,
                'logo'=>$logo,
                'name'=>$name,
                'poste'=>$poste,
                'email'=>$email,
                'phone'=>$phone,
                'fix'=>$fix,
                'website'=>$web,
                'address'=>$address,
                'description'=>$description,
                'facbook'=>$facbook,
                'instagram'=>$instagram,
                'linkedin'=>$linkedin,
                'youtube'=>$youtube,
                'tiktok'=>$tiktok,
                'twitter'=>$twitter,
                'line'=>$line,
                'pinterest'=>$pinterest,
                'renren'=>$renren,
                'tencent_weibo'=>$tencent_weibo,
                'vk'=>$vk,
                'wechat'=>$wechat,
                'weibo'=>$weibo,
                'id_comstme_login'=>$user_Id
            ]);
        } elseif ($photo == null && $logo != null) {
            $isInsertSuccsess = CustomerInfo::insert([
                'logo'=>$logo,
                'name'=>$name,
                'poste'=>$poste,
                'email'=>$email,
                'phone'=>$phone,
                'fix'=>$fix,
                'website'=>$web,
                'address'=>$address,
                'description'=>$description,
                'facbook'=>$facbook,
                'instagram'=>$instagram,
                'linkedin'=>$linkedin,
                'youtube'=>$youtube,
                'tiktok'=>$tiktok,
                'twitter'=>$twitter,
                'line'=>$line,
                'pinterest'=>$pinterest,
                'renren'=>$renren,
                'tencent_weibo'=>$tencent_weibo,
                'vk'=>$vk,
                'wechat'=>$wechat,
                'weibo'=>$weibo,
                'id_comstme_login'=>$user_Id
            ]);
        } elseif($photo != null && $logo == null) {
            $isInsertSuccsess = CustomerInfo::insert([
                'photo'=>$photo,
                'name'=>$name,
                'poste'=>$poste,
                'email'=>$email,
                'phone'=>$phone,
                'fix'=>$fix,
                'website'=>$web,
                'address'=>$address,
                'description'=>$description,
                'facbook'=>$facbook,
                'instagram'=>$instagram,
                'linkedin'=>$linkedin,
                'youtube'=>$youtube,
                'tiktok'=>$tiktok,
                'twitter'=>$twitter,
                'line'=>$line,
                'pinterest'=>$pinterest,
                'renren'=>$renren,
                'tencent_weibo'=>$tencent_weibo,
                'vk'=>$vk,
                'wechat'=>$wechat,
                'weibo'=>$weibo,
                'id_comstme_login'=>$user_Id
            ]);
        } else{
            $isInsertSuccsess = CustomerInfo::insert([
                'name'=>$name,
                'poste'=>$poste,
                'email'=>$email,
                'phone'=>$phone,
                'fix'=>$fix,
                'website'=>$web,
                'address'=>$address,
                'description'=>$description,
                'facbook'=>$facbook,
                'instagram'=>$instagram,
                'linkedin'=>$linkedin,
                'youtube'=>$youtube,
                'tiktok'=>$tiktok,
                'twitter'=>$twitter,
                'line'=>$line,
                'pinterest'=>$pinterest,
                'renren'=>$renren,
                'tencent_weibo'=>$tencent_weibo,
                'vk'=>$vk,
                'wechat'=>$wechat,
                'weibo'=>$weibo,
                'id_comstme_login'=>$user_Id
            ]);
        }



        if ($isInsertSuccsess) {
            return redirect('/cards');
        }else {
            echo '<div class="alert alert-warning" role="alert">
            This is a warning your data is not inserted!
          </div>';
        }
    }

    // update card info
    function UpdatCardInfo(Request $request){
        $photoFile = $request->hasFile('photo');
        $logoFile = $request->hasFile('logo');
        $photoName = null;
        $logoName = null;


        if ($photoFile) {
            $newFile = $request->file('photo');
            $photoName = $newFile->store('users','myimg');
            $photoUser = CustomerInfo::where('id', $request->id)->value('photo'); // get user photo path to delet it
            if($photoUser != null)  unlink('images/'.$photoUser); // delet the user photo
        }

        if ($logoFile) {
            $newFile = $request->file('logo');
            $logoName = $newFile->store('users','myimg');
            $photoUser = CustomerInfo::where('id', $request->id)->value('logo'); // get user photo path to delet it
            if($photoUser != null) unlink('images/'.$photoUser); // delet the user logo
        }

        $id = $request->id;
        $photo = $photoName; //add photo
        $logo = $logoName; //add logo
        $name = $request->input('name');
        $poste = $request->input('poste');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $fix = $request->input('fix');
        $web = $request->input('web');
        $address = $request->input('address');
        $description = $request->input('description');
        $facbook = $request->input('facbook');
        $instagram = $request->input('instagram');
        $linkedin = $request->input('linkedin');
        $youtube = $request->input('youtube');
        $tiktok = $request->input('tiktok');
        $twitter = $request->input('twitter');
        $line = $request->input('line');
        $pinterest = $request->input('pinterest');
        $renren = $request->input('renren');
        $tencent_weibo = $request->input('tencent_weibo');
        $vk = $request->input('vk');
        $wechat = $request->input('wechat');
        $weibo = $request->input('weibo');

        if ($photo != null && $logo != null) {
            $isUpdateSuccess = CustomerInfo::where('id', $id)->update([
                'photo'=>$photo,
                'logo'=>$logo,
                'name'=>$name,
                'poste'=>$poste,
                'email'=>$email,
                'phone'=>$phone,
                'fix'=>$fix,
                'website'=>$web,
                'address'=>$address,
                'description'=>$description,
                'Facbook'=>$facbook,
                'Instagram'=>$instagram,
                'Linkedin'=>$linkedin,
                'Youtube'=>$youtube,
                'Tiktok'=>$tiktok,
                'Twitter'=>$twitter,
                'Line'=>$line,
                'Pinterest'=>$pinterest,
                'Renren'=>$renren,
                'Tencent_weibo'=>$tencent_weibo,
                'Vk'=>$vk,
                'Wechat'=>$wechat,
                'Weibo'=>$weibo
            ]);
        } elseif($photo == null && $logo != null) {
            $isUpdateSuccess = CustomerInfo::where('id', $id)->update([
                'logo'=>$logo,
                'name'=>$name,
                'poste'=>$poste,
                'email'=>$email,
                'phone'=>$phone,
                'fix'=>$fix,
                'website'=>$web,
                'address'=>$address,
                'description'=>$description,
                'Facbook'=>$facbook,
                'Instagram'=>$instagram,
                'Linkedin'=>$linkedin,
                'Youtube'=>$youtube,
                'Tiktok'=>$tiktok,
                'Twitter'=>$twitter,
                'Line'=>$line,
                'Pinterest'=>$pinterest,
                'Renren'=>$renren,
                'Tencent_weibo'=>$tencent_weibo,
                'Vk'=>$vk,
                'Wechat'=>$wechat,
                'Weibo'=>$weibo
            ]);
        } elseif($photo != null && $logo == null){
            $isUpdateSuccess = CustomerInfo::where('id', $id)->update([
                'photo'=>$photo,
                'name'=>$name,
                'poste'=>$poste,
                'email'=>$email,
                'phone'=>$phone,
                'fix'=>$fix,
                'website'=>$web,
                'address'=>$address,
                'description'=>$description,
                'Facbook'=>$facbook,
                'Instagram'=>$instagram,
                'Linkedin'=>$linkedin,
                'Youtube'=>$youtube,
                'Tiktok'=>$tiktok,
                'Twitter'=>$twitter,
                'Line'=>$line,
                'Pinterest'=>$pinterest,
                'Renren'=>$renren,
                'Tencent_weibo'=>$tencent_weibo,
                'Vk'=>$vk,
                'Wechat'=>$wechat,
                'Weibo'=>$weibo
            ]);
        } else{
            $isUpdateSuccess = CustomerInfo::where('id', $id)->update([
                'name'=>$name,
                'poste'=>$poste,
                'email'=>$email,
                'phone'=>$phone,
                'fix'=>$fix,
                'website'=>$web,
                'address'=>$address,
                'description'=>$description,
                'Facbook'=>$facbook,
                'Instagram'=>$instagram,
                'Linkedin'=>$linkedin,
                'Youtube'=>$youtube,
                'Tiktok'=>$tiktok,
                'Twitter'=>$twitter,
                'Line'=>$line,
                'Pinterest'=>$pinterest,
                'Renren'=>$renren,
                'Tencent_weibo'=>$tencent_weibo,
                'Vk'=>$vk,
                'Wechat'=>$wechat,
                'Weibo'=>$weibo
            ]);
        }

        if ($isUpdateSuccess) {
            return redirect('/cards');
        }else {
            echo '<div class="alert alert-warning" role="alert">
            Data is not Updated!
          </div>';
        }
    }



    //delelt a card for card table
    function deletCard($id_card){
        $photoUser = CustomerInfo::where('id', $id_card)->value('photo'); // get user photo path to delet it
        if($photoUser != null) unlink('images/'.$photoUser); // delet the user photo

        $logoUser = CustomerInfo::where('id', $id_card)->value('logo'); // get user photo path to delet it
        if($logoUser != null) unlink('images/'.$logoUser); // delet the user photo

        CustomerInfo::where('id', $id_card)->delete(); //delet card from the data base
        return redirect('/cards');
    }

    function AddContact($card_id){
        $user_id = auth()->user()->id;
        $isInsertSuccsess = ContactList::insert([
            'user_id'=>$user_id,
            'card_id'=>$card_id
        ]);
        return redirect('/cards');
    }

    function DeletContact($card_id){
        $user_id = auth()->user()->id;
        ContactList::where('user_id', $user_id)->where('card_id', $card_id)->delete();
        return redirect('/cards');
    }

    function deletUser($u_id){
        // delet all user card with uploaded image & logo
        $userCard = CustomerInfo::where('id_comstme_login', $u_id)->get();
        foreach ($userCard as $value) {
            if($value->photo != null) Storage::delete($value->photo); // delet the user photo
            if($value->logo != null) Storage::delete($value->logo); // delet the user logo
        }

        //delet the user row record
        $users = User::findOrFail($u_id);
        $users->delete();
        return redirect('/');
    }

    function updatePasswordView(){
        return view('updatePasswordView');
    }

    function updatePassword(Request $request){
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }
}
