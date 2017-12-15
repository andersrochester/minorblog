<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
	{
		// Hitta alla poster i databasen, lagra dem i en variabel
		$posts = Post::all();

		// rendera på indexsidan
		return view('posts.index')->withPosts($posts);

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
    public function store(Request $request)
    {
			// Validering av datan innan den sparas
			$this->validate($request, array(
					'rubrik' => 'required|max:80',
					'slug' => 'required|alpha_dash|min:5|max:80',
					'innehall' => 'required'
			));

			// Spara datan i databasen

            $post = new Post;

			$post->rubrik = $request->rubrik;
			$post->innehall = $request->innehall;
			$post->ingress = $request->ingress;
			$post->forfattare = $request->forfattare;
			$post->slug = $request->slug;
			$post->status = $request->status;

			$post->save();

			Session::flash('success', 'Posten sparades i databasen.');

			// gå vidare till en annan sidan (redirect)
			return redirect()->route('posts.show', $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		// Rendera sidan efter redirect, se ovan.
		$post = Post::find($id);
        return view('posts.show')->withPost($post);
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
        // find the post in the database and save as a var
        $post = Post::find($id);
        // return the view and pass in the var we previously created
        return view('posts.edit')->withPost($post);
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
     		// Validering av datan innan den sparas
			$this->validate($request, array(
					'rubrik' => 'required|max:80',
					'innehall' => 'required'
			));

			$post = Post::find($id);
			$post->rubrik = $request->input('rubrik');
			$post->innehall = $request->input('innehall');

			$post->save();

			Session::flash('success', 'Posten sparades i databasen.');

			// gå vidare till en annan sidan (redirect)
			return redirect()->route('posts.show', $post->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
			$post = Post::find($id);

			$post->delete();
            
			Session::flash('success', 'Posten är raderad från databasen.');
			return redirect()->route('posts.index');
    }
}
