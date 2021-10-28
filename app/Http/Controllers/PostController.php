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
        $response = [
            'success' => true,
            'data' => PostResource::collection($posts),
            'message' => 'Post enviado com sucesso!'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $input,
            [
                'title' => 'required|min:3|max:25',
                "content" => 'required|min:5|max255'


            ]
        );
        if ($validator->fails()) {
            $response = [
                'success' => true,

                'message' => $validator->errors()
            ];
            return response()->json($response, 403);
        }





        $post = Post::create($input);

        $response = [
            'success' => true,
            'data' => new  PostResource($post),
            'message' => 'Post criado com sucesso!'
        ];

        return response()->json($response, 200);
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
            $response =  [
                'success' => false,
                'message' => "Post não encontrado"
            ];
            return response()->json($response, 403);
        }

        $response = [
            'success' => true,
            'data' => new  PostResource($post),
            'message' => 'Post recuparado!'
        ];
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
            $input,
            [
                'title' => 'required|min:3|max:25',
                "content" => 'required'


            ]
        );
        if ($validator->fails()) {
            $response = [
                'success' => true,

                'message' => $validator->errors()
            ];
            return response()->json($response, 403);
        }

        $post->title = $input['title'];
        $post->content = $input['content'];
        $post->save();

        $response = [
            'success' => true,
            'data' => new  PostResource($post),
            'message' => 'Post recuparado!'
        ];
           return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
