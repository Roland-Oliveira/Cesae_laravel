<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    protected function getCesaeInfo()
    {

        $cesaeInfo = [
            'name' => 'Cesae',
            'adress' => 'Rua Ciríaco Cardoso 186, 4150-212 Porto',
            'email' => 'cesae@cesae.pt'
        ];

        return  $cesaeInfo;
    }


    public function index()
    {

            $userModel = User::all();
            file_put_contents("userModel.txt", print_r($userModel, true));

        $novocontato  = $this->getCesaeInfo();

        $aMinhaVariavel = 'Hello Turma de Soft Dev!';

        $contacts = [
            'name' => 'John',
            'email' => 'john@gmail.com'
        ];;



        return view('users.home', compact('aMinhaVariavel', 'contacts', 'novocontato'));
    }



    public function allTasks(){

        $task = $this->getAllTasks();

        return view('users.allTasks', compact('task'));
    }


    public function alluser()
    {
        $allUsers = DB::table('users')
        ->get();
        $cesaeInfo = $this->getCesaeInfo();

        return view('users.allusers', compact('allUsers','cesaeInfo'));
    }



protected function getAllTasks(){

    $task = DB::table('tasks')
    ->join('users', 'users.id', '=', 'tasks.users_id')
    ->select('tasks.*', 'users.name as usname')
    ->get();




    return $task;
}
public function viewUser($id)
{
    $ourUser = DB::table('users')
        ->where('id', $id)
        ->first();

    return view('users.view_user', compact('ourUser'));
}

public function deleteUser($id)
{

    DB::table('tasks')
        ->where('users_id', $id)
        ->delete();


    DB::table('users')
        ->where('id', $id)
        ->delete();

    return back();
}

public function viewTask($id)
{
    $ourTask = DB::table('tasks')
        ->where('id', $id)
        ->first();

    return view('users.view_task', compact('ourTask'));
}

public function deleteTask($id)
{

    DB::table('tasks')
        ->where('id', $id)
        ->delete();

    return back();
}

public function addUser()
{
    $allUsers = DB::table('users')
        ->get();
    return view('users.add_user', compact('allUsers'));
}

public function createUser(Request $request)
{
    $myUser = $request->all();

    $request->validate(
        [
            'email' => 'required|email|unique:users',
            'name' => 'required|string',
            'password' => 'required',
        ]
    );




    User::insert([
        'email' => $request->email,
        'name' =>  $request->name,
        'password' => Hash::make($request->password)
    ]);

    return redirect('home_users')->with('message', 'Utilizador adicionado com sucesso');
}


public function addTasks()

{
    $allUsers = DB::table('users')
        ->get();
        return view('users.add_task', compact('allUsers'));
}

public function createTasks(Request $request)
{   $myUser = $request->all();
    file_put_contents("request1.txt", print_r($myUser, true));
    DB::table('tasks') -> insert([

       'users_id' => $request->users_id,
        'name' => $request->name,
       'description' =>  $request->description,

    ]);


    return redirect('home_alltasks')->with('message2', 'Tarefa adicioonado com sucesso');

}



}
