<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;

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
        $authors = Author::all();

        return $this->successResponse($authors);
    }

    /**
     * Create one new author.
     *
     * @return Illuminate/Http/Response
     */
    public function store(Request $request){
        $rules = [
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:255|in:male,female',
            'country' => 'required|string|max:255',
        ];

        $this->validate($request, $rules);

        $author = Author::create($request->all());

        return $this->successResponse($author, Response::HTTP_CREATED);
    }

    /**
     * Obtains and shows and author.
     *
     * @return Illuminate/Http/Response
     */
    public function show($author){
        $author = Author::findOrFail($author);

        return $this->successResponse($author);
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
