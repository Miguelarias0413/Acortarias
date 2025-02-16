<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Link;
use Termwind\Components\Li;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $userAuthenticaded = Auth::user();
        $routesFromUser = $userAuthenticaded->links;
        return view('dashboard',[
            'user' => $userAuthenticaded,
            'routesFromUser' => $routesFromUser
        ]);
    }

    public function create()
    {
        return view('link.create');
    }

    public function store(Request $request){

        $validatedData =  $request->validate([
            'url' => 'required|url',
            'message' => 'min:3|max:255' 
        ]);

        while(true){
            $shortUrl = Str::random(6);
            if(!Link::where('short_url', $shortUrl)->exists()){
                break;
            }
        }

        Link::create([
            'url' => $validatedData['url'],
            'message' => $validatedData['message'],
            'short_url' => $shortUrl,
            'user_id' => Auth::id()
        ]);

        if(Link::where('short_url', $shortUrl)->exists()){
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Error creating the link');     
    }
    public function edit(Link $link){
        return view('link.edit',['link' => $link]);
    }

    public function update(Request $request, Link $link){
        $request->validate([
            'url' => 'url',
            'message' => 'min:3|max:255' 
        ]);


        $link->url = $request->url;
        $link->message = $request->message;
        $link->save();

        if (Link::where('id', $link->id)->exists()) {
            return redirect()->route('dashboard')->with('success', 'Link Actualizado');
        }
        return redirect()->route('dashboard')->with('error', 'No se pudo actualizar el link');
    }
    public function destroy(Link $link)
    {
        $link->delete();

        if (!Link::where('id', $link->id)->exists()) {
            return redirect()->route('dashboard')->with('success', 'Link Eliminado');
        }
        return redirect()->route('dashboard')->with('error', 'No se pudo eliminar el link');
    }

    public function show(Link $link)
    {
        $url = Link::find($link->id);
        if ($url)
        {
            return view('link.show',['link' => $url]);
        }
        return redirect()->route('landing');
    }
}
