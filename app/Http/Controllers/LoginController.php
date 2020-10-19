<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
use DB;
class LoginController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ])){
            $user=User::where('email',$request->email)->first();
            if($user->is_admin()=="admin"){  //for admin
                $empdata=User::all();
                return view('dashboard',compact('empdata'));
            }
            elseif($user->is_admin()=="doctor"){   //for patient
                $empdata=User::all();
                return view('doctor.doctor_dashboard',compact('empdata'));
            }
            elseif($user->is_admin()=="patient"){   //for doctor
                $empdata=User::all();
                return view('patient.patient_dashboard',compact('empdata'));
            }
            elseif($user->is_admin()=="accountant"){   //for accountant
                $empdata=User::all();
                return view('accountant.accountant_dashboard',compact('empdata'));
            }
            elseif($user->is_admin()=="nurse"){   //for nurse
                $empdata=User::all();
                return view('nurse.dashboard',compact('empdata'));
            }
            elseif($user->is_admin()=="zero"){   //for nurse
                $empdata=User::all();
                return view('home',compact('empdata'));
            }
            else{
                return redirect()->route('home');   //for conformation
            }
        }
        return redirect()->back();
    }
    public function edit(User $emp){

        
    }
    public function destroy(User $emp){

        $emp->delete();
        return redirect()->back()->with('msg3','Employee has beed deleted');
        
    }
    // public function index(Request $request){
    //     $empdata=User::all();
    //     return view('admin.AdminControlUser',compact('empdata'));
    // }
}
