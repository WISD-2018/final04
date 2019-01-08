<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

use Illuminate\Support\Facades\Auth;
class AdminBackstageController extends Controller
{
    //

    public function index()
    {
        $user=User::orderBy('id', 'ASC')->get();
        $data=['users'=>$user];
        return view('admin.user.backstage_user', $data);
    }


    //public function create()
    //{
    //    return view('admin.posts.create');
    //}
    public function edit($id)
    {
        $user=User::find($id);
        $data = ['user' => $user];
        return view('admin.user.backstage_useredit', $data);
    }


    public function update(Request $request)
    {
        $user = User::where('id','=',Auth::user()->id)
            ->get();


        $user= User::where('id','=',Auth::user()->id)
            ->update(array('name' => $request->input('name')));
        $user= User::where('id','=',Auth::user()->id)
            ->update(array('phone' => $request->input('phone')));
        $user= User::where('id','=',Auth::user()->id)
            ->update(array('address' => $request->input('address')));

        return redirect()->route('admin.user.backstage_user');
    }

    //public function store(UserRequest $request)
    //{
    //    User::create($request->all());
    //    return redirect()->route('admin.user.backstage_user');
    //}

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.user.backstage_user');
    }

}
