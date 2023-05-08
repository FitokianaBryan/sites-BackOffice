<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Auteur;
use App\Models\Article;

class AuteurController extends Controller
{
    //
    public function Signin(Request $request) {
        $author = Auteur::where('email',$request->input('email'))->where('password',md5($request->input('password')));
        if($author->exists()) {
            session()->put('author',$author->first()->id);
            return redirect()->route("Home");
        }
        else return redirect()->back()->with('Error','Email ou mot de passe incorrect.');
    }

    public function Logout() {
        session()->flush();
        return view('index');
    }
    public function Signup(Request $request) {
        $data = $request->all();
        if($data['password'] == $data['password_repeat']) {
            $data = array_replace($data,['password' => md5($data['password'])]);
            unset($data['password_repeat']);
            Auteur::create($data);
            return redirect()->back()->with('success','Inscription faite.');
        }
        else return redirect()->back()->with('Error','Mots de passe différents');
    }
    
    public function ForgetPassword(Request $request) {
        $data = $request->all();
        if($data['password'] == $data['password_repeat']) {
            $author = Auteur::where('email',$request->input('email'))->first();
            $author->password = md5($data['password']);
            $author->save();
            return redirect()->back()->with('success','Votre mot de passe a bien été modifié.');
        }
        else return redirect()->back()->with('Error','Mots de passe différents.');
    }

    public function ToHome($limit = 6) {
        $list = Article::simplePaginate($limit);
        return view('Home',[
            'liste_article' => $list,
            'links' => $list->links()
        ]);
    }

}
