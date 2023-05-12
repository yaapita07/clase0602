<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class SecureurlController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index(User $user)
    {
        //hacemos la consulta y con get nos traemos la información de la base de datos
        // a traves de la ruta nos traemos los usuarios que estamos visitando
        $posts = Post::where('user_id', $user->id)->paginate(6);
        //dd($posts);


        //dd($user->username);
        return view('dashboard', [
            'user' => $user,
            //creamos la llave de post y la pasamos al dash para mostrar contenidos
            'posts' => $posts
        ]);
        //imprimo un dd
        //dd(auth()->user());



        //$users = User::all();

    }
    //método get para visualización del formulario 
    public function create()
    {

        //dd('creando nueva publicación');
        return view('publicaciones.create');
    }

    public function show(User $user, Post $post)
    {


        return view('publicaciones.show', [
            'post' => $post,
            'user' => $user
        ]);
    }

    //store valida y almacena en la base de datos
    public function store(Request $request)
    {

        //dd('creando nueva publicación');
        $this->validate($request, [
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',


        ]);

        Post::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $request->imagen,
            'user_id' => auth()->user()->id

        ]);

        return redirect()->route('accesoseguro', ['user' => auth()->user()->username]);
    }


    public function destroy(Post $post)
    {
        //le digo this authorize y le paso el método del policy
        $this->authorize('delete', $post);
        //con esto protegemos al formulario desde el controlador

        //instanciamos
        $post->delete();

        //Redireccionamos
        return redirect()->route('accesoseguro', ['user' => auth()->user()->username]);
    }
}
