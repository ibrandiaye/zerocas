<?php

namespace App\Http\Controllers;

use App\Repositories\CommuneRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userRepository;
    protected $communeRepository;

    public function __construct(UserRepository $userRepository, CommuneRepository $communeRepository){

        $this->userRepository = $userRepository;
        $this->communeRepository = $communeRepository;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepository->getUsers();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $communes = $this->communeRepository->getAll();
        return view('user.add',compact('communes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:120',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
           'role'=> 'required'
        ]);
        $user = $this->userRepository->store($request->all());
        return redirect('user');
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
        $communes = $this->communeRepository->getAll();
        $user = $this->userRepository->getById($id);
        return view('user.edit',compact('communes','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request['password']){
            $this->validate($request, [
                'name' => 'required|max:120',
                'email' => 'required|email',
                'password' => 'required|min:6|confirmed',
                'role'=> 'required'
            ]);
            $input = $request->only(['name', 'email', 'password','role','asc','commune_id']);

        }else{
            $this->validate($request, [
                'name' => 'required|max:120',
                'email' => 'required|email',
                'role'=> 'required'
            ]);
            $input = $request->only(['name', 'email','role','asc','commune_id']);
        }
        $this->userRepository->update($id,$input);
        return redirect('user');
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
    public function seConnecter(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return response()->json('ok');
        }else{
            return response()->json('ko');
        }
    }
}
