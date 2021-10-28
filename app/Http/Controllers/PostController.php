<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "hello get rersoure";

        //dd(Post::all());

        $posts = Post::all();
        //return $posts->toJson();


        return $this->successResponse(PostResource::collection($posts), 'Post enviado com sucesso!');
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make(
           
            [
                'title' => 'required|min:3|max:25',
                "content" => 'required|min:5|max255'


            ]
        );
        if ($validator->fails()) {

            return $this->errorResponse('Validação com erro!', $validator->errors());
        }

        $post = Post::create($input);

        return $this->succesResponse(new PostResource($post), 'Post criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        if (is_null($post)) {

            //return response()->json($response, 403);
            return $this->errorResponse('Post não encontrado!');
        }

        $response = [
            'success' => true,
            'data' => new  PostResource($post),
            'message' => 'Post recuperado!'
        ];
        return $this->succesResponse(new PostResource($post), 'Post encontrado!');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $input = $request->all();
        $input = $request->all();

        $validator = Validator::make(
         
            [
                'title' => 'required',
                "content" => 'required'


            ]
        );
        if ($validator->fails()) {
            return $this->errorResponse('Validação com erro!', $validator->errors());
        }

        $post->title = $input['title'];
        $post->content = $input['content'];
        $post->save();

        return $this->successResposnse(new PostResource($post), 'Post atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return $this->successResposnse([], 'Post deletado com sucesso!');
    }
}
