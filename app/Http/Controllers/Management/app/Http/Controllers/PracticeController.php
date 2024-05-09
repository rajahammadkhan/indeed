<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PracticeController extends Controller
{
    public  function passwordupdate(Request $request,$id)
    {
          $user=User::where('id',auth()->user()->id);

          $this->validate($request,[
            "password"=>"required",
              "new_password"=>"required",
              "confirm_password"=>"required",
          ]);

          $hashpassword=auth()->user()->password;

          if(hash::check($request->password,$hashpassword))
          {
              if($request->new_password==$request->confirm_password)
              {
                  $user->update([
                      'password'=>hash::make($request->new_password)
                  ]);
                  return redirect()->back();
              }
              else
              {
                  return redirect('passwordupdate');
              }

          }
          else
          {
              return redirect('passwordupdate');
          }
    }
    public function userpass()
    {
        return view('passwordupdate');
    }
}
