<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Flasher\Prime\FlasherInterface;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, FlasherInterface $flasher)
    {
        $user = User::findOrFail($id);
        $this->validate($request,[
            'full_name' => 'required|max:120',
            'phone'     => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9'
        ]);
        $user->full_name = $request->full_name;
        $user->phone    = $request->phone;
        $user->gender   = $request->gender;
        $user->date     = $request->date;
        $user->address  = $request->address;
        $inputs = $request->all();
        
        //Kiểm tra có bị thay đổi ko?
        
        if($user->isDirty('full_name')) 
        {
            $user->update([
                'full_name' => $request->full_name
            ]);
        }
        if($user->isDirty('phone')) 
        {
            $user->update([
                'phone' => $request->phone
            ]);
        }
        if($user->isDirty('gender')) 
        {
            $user->update([
                'gender' => $request->gender
            ]);
        }
        if($user->isDirty('date')) 
        {
            $user->update([
                'date' => $request->date
            ]);
        }
        if($user->isDirty('address')) 
        {
            $user->update([
                'address' => $request->address
            ]);
        }
        $flasher->addSuccess('Updated success', 'Sunshine !');
        return redirect()->back();
    }
    public function changePassword(Request $request, $id, FlasherInterface $flasher)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'password' => 'required|confirmed|min:5'
        ]);
        if($request->old_password != $user->password){
            $flasher->addError("Old Password Doesn't match!");
            return redirect()->back();
        }
        $user->password = $request->password;

        if($user->isDirty('password')) {
            $hashPass = bcrypt($request->password);
            $user->update([
                'password' => $hashPass
            ]);
            $flasher->addSuccess('Password Updated', 'Sunshine !');
        }
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
