<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;

class AuthorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Returns the list of authors.
     *
     * @return Illuminate/Http/Response
     */
    public function index(){

    }

    /**
     * Create one new author.
     *
     * @return Illuminate/Http/Response
     */
    public function store(Request $request){

    }

    /**
     * Obtains and shows and author.
     *
     * @return Illuminate/Http/Response
     */
    public function show($author){

    }

    /**
     * Updates an existing author
     *
     * @return Illuminate/Http/Response
     */
    public function update(Request $request, $author){

    }

    /**
     * Removes and existing author
     *
     * @return Illuminate/Http/Response
     */
    public function destroy($author){

    }
}