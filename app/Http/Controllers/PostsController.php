<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;                               // i s ovim mozemo da koristimo koju hocemo fju modela
use DB;                                     //ako necemo elokvent da koristimo nego SQL
class PostsController extends Controller
{
    //TRAZI DA BUDEMO ULOGOVANI DA BI BILO STA VIDELI 
    public function __construct()
    {
        //$this->middleware('auth');  OVIM NISTA NE MOZE DA SE VIDI DOK SE NE ULOGUJEMO,ali ako prosledimo dodatne parametre
        //onda mozemo jer to su posebni slucajevi
        $this->middleware('auth',[ 'except' => ['index','show'] ]);     //ne moze bez logina se pristupi svemu osim index i show

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ispisao bi sve podatke iz baze sa ovom komandom return Post::all();
       // $posts = Post::all();
       // $posts = DB::select('SELECT * FROM posts');       preko sql,radi isto sto i Post::all(); tj da nam citav post
       // $posts = Post::orderBy('created_at','desc')->take(1)->get(); i tako dobijemo PRIKAZAN samo jedan post 
       //$posts = Post::orderBy('created_at','desc')->get();            //stavimo u posts sortirane sve postove 
       $posts = Post::orderBy('created_at','desc')->paginate(3);        //koliko postova da se prikaze po stranici u paginate se stavlja 
       return view('posts.index')->with('posts',$posts);                //argument u paginate je broj postova koje zelimo na jednoj 
                                                                        //stranici prikazati

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)                 //iz forme cemo uzimati varijable i to ce primati objekat request
    {
        //Validacija tj provera 
        $this->validate($request, [   
            'title' => 'required',
            'body' => 'required'
        ]);

        //Kreiranje posta
        $post = new Post;
        $post->title= $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;                //uzima id trenutnog usera
        $post->save();

        return redirect('/posts')->with('success','Clanak je uspesno kreiran!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)                               //pokazivacemo odredjeni post na osnovu id npr
    {
        //return Post::find($id);                             //nacice taj post(po idu) i prikazacemo ga
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);      //vracamo da prikazemo stranicu show(u folderu posts)
                                                            //i jos prosledjujem citav post da moze da se koristi 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)                               //da bi znao koji post da edituje,imamo argument id
    {
        $post = Post::find($id);

        //provera korisnika
        if(auth()->user()->id !== $post->user_id){          //ako nije njegov post a pokusa edit,prebaci ga na /posts
            return redirect('/posts')->with('error','Nemas pristup ovoj stranici!');
        }

        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)           //argument request jer dodajem novi post(jeste izmenjen ali je pak novi)
    {                                                       //id da bi znali o kome se radi
        //Validacija tj provera 
        $this->validate($request, [   
            'title' => 'required',
            'body' => 'required'
        ]);

        //Kreiranje posta
        $post = Post::find($id);                            //nadjemo taj post kako bi ga izmenili
        $post->title= $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success','Clanak je uspesno izmenjen!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)                            //id da bi znali koji post da unistimo
    {
        $post = Post::find($id);

        //provera korisnika
        if(auth()->user()->id!== $post->user_id){          //ako nije njegov post a pokusa delete,prebaci ga na /posts
            return redirect('/posts')->with('error','Nemas pristup ovoj stranici!');
        }
 
        $post->delete();

        return redirect('/posts')->with('success','Clanak je uspesno uklonjen!');
    }
}
