<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Image;
use App\AdminAccountantModel;
class ProfileController extends Controller
{
    /*
    Get the Profile view for changing the Password
    */
    public function changePasswordForm(){
        /**
         * change password  for the authenticated  user
         */
        
        return view('changepassword');
    }
    public function changePassword(Request $request){
        if(!(Hash::check($request->get('current_password'),Auth::user()->password))){
            return back()->with('error','Your Current Password does not match with what you provided!');
        }
        if(strcmp($request->get('current_password'),$request->get('password'))==0){
            return back()->with('error','Your Current Password cannot be same with the new password!');
        }
        $request->validate([
            'current_password'=>'required',
            'password'=>'required'

        ]);
        $user=Auth::user();
        $user->password=bcrypt($request->get('password'));
        $user->save();
        return back()->with('message','Password Change Successfully!');
    }

    public function AdminProfileUpdate(Request $request){
        $user=Auth::user();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->save();
        return back()->with('message','Profile Updated Successfully!');;
        }
    public function registerUserHistory(Request $request){
        echo "hehehehehe";
    }
    /**
     * Get the Profile Upload View
     */
    public function getProfileAvatar(){
        return view('profilepicture');
    }
    /**
     * upload and change the profile avatar for the Authetication user
     */
     public function profilepicture(Request $request){
         if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $filename=time().".".$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(250,250)->save(public_path('/img/'.$filename));
            $user=Auth::user();
            $user->avatar=$filename;
           
            //validate the avatar
            $request->validate([
                    'avatar'=>'required | image | mimes:jpeg,png,jpg '
            ]);
            $user->save();
            // $user_acc=AdminAccountantModel::all()->where('email',Auth::user()->email);
            // $user_acc->update([
            //     'avatar'=>$filename
            // ]);
           // $user_acc->avatar=$filename;
            //$user_acc->update();
            DB::table('admin_accountant_models')
            ->where("admin_accountant_models.email", '=', Auth::user()->email)
            ->update(['admin_accountant_models.avatar'=> $filename]);
            
         }
         return back()->with('message','Profile Picture Uplaod Successfully!');
     }
}