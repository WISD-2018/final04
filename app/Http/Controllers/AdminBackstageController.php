<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

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
    public function update(UserRequest $request, $id)
    {
        $user=User::find($id);
        $user->update($request->all());
        return redirect()->route('admin.user.backstage_user');
    }

    public function store(UserRequest $request)
    {
        User::create($request->all());
        return redirect()->route('admin.user.backstage_user');
    }
    //public function destroy($id)
    //{
    //    Post::destroy($id);
    //    return redirect()->route('admin.posts.index');
    //}

}
