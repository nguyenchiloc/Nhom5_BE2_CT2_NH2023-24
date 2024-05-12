<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Hash;


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
    private $uploadPath; 
    private $uploadFolder;

    public function __construct()  
    {  
      $this->uploadPath = public_path('assets/images/avt');  
      $this->uploadFolder = 'public/assets/images/avt/';  
    } 
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
        $user->about    = $request->about;
        //set avatar, kiểm tra và đổi avt
        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $extension = "jpg";
            $filename  = $user->user_id. '.' . $extension;//$file->getClientOriginalName();//lấy tên file
            $user->avatar  = $filename;
            $request->file('avatar')->move('assets/images/avt/',  $user->avatar);  //Lưu vào thư mục
        }
        if($user->save()) {
            $flasher->addSuccess('Updated success', 'Sunshine !');
        }else{
            $flasher->addError('Fail !');
        }
        return  redirect()->back();
    }
    public function changePassword(Request $request, $id, FlasherInterface $flasher)
    {
        $user = User::findOrFail($id);
        
        // $request->validate([
        //     'old_password' => 'required|confirmed|min:5',
        //     'new_password' => 'required|confirmed|min:5'
        // ]); tam thoi dong, check lai sau 
        if (!Hash::check($request->old_password, $user->password)) 
        {
            $flasher->addError("Old Password Doesn't match!");
            return redirect()->back();
        }
        $user->password =  Hash::make($request->new_password);
        $user->save();
        $flasher->addSuccess('Password Updated', 'Sunshine !');
        return  redirect()->back();
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