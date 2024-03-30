<?php
namespace Controller;
use Model\Abonents;
use Model\Divisions;
use Model\Rooms;
use Model\Telephones;
use Model\Post;
use Model\Rooms_types;
use Model\Divisions_types;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Src\Validator\Validator;

class Site
{
    public function index(): string
//    public function index(Request $request): string
    {
        $posts = Post::all();
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }
    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }
    public function signup(Request $request): string
    {
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'login' => ['required', 'unique:users,login'],
                'password' => ['required']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if($validator->fails()){
                return new View('site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if (User::create($request->all())) {
                app()->route->redirect('/hello');
            }
        }
        return new View('site.signup');
    }
    public function login(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }
    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }
    public function abonents(Request $request): string
    {
        $divisions = Divisions::all();
        if (isset($_POST['search'])) {
            $search = $_POST['search'];
            if ($request->method === 'POST'){
                $abonents = Abonents::where('name', 'like', "%{$search}%")->orWhere('surname', 'like', "%{$search}%")
                    ->orWhere('patronymic', 'like', "%{$search}%")->orWhere('date_of_birth', 'like', "%{$search}%")
                    ->get();
                return new View('site.abonents', ['abonents' => $abonents, 'divisions' => $divisions]);
            }
        } else {
            $abonents = Abonents::all();
            if ($request->method === 'POST'&& Abonents::create($request->all())){
                app()->route->redirect('/abonents');
                return new View('site.abonents', ['abonents' => $abonents, 'divisions' => $divisions]);
            }
        }
        return new View('site.abonents', ['abonents' => $abonents, 'divisions' => $divisions]);
    }
    public function divisions(Request $request): string
    {
        $divisions = Divisions::all();
        $divisions_types = Divisions_types::all();
        if ($request->method === 'POST'&& Divisions::create($request->all())){
            app()->route->redirect('/divisions');
        }
        return new View('site.divisions', ['divisions' => $divisions, 'divisions_types' => $divisions_types]);
    }
    public function numbers(Request $request): string
    {
        $numbers = Telephones::all();
        $rooms = Rooms::all();
        $abonents = Abonents::all();
        if ($request->method === 'POST'&& Telephones::create($request->all())){
            app()->route->redirect('/numbers');
        }
        return new View('site.numbers', ['numbers' => $numbers, 'rooms'=> $rooms, 'abonents' => $abonents]);
    }
    public function rooms(Request $request): string
    {
        $rooms = Rooms::all();
        $divisions = Divisions::all();
        $rooms_types = Rooms_types::all();
        if ($request->method === 'POST'&& Rooms::create($request->all())){
            app()->route->redirect('/rooms');
        }
        return new View('site.rooms', ['rooms' => $rooms, 'divisions' => $divisions, 'rooms_types' => $rooms_types]);
    }
}