<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Auth;
class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function show(Request $api,$id)
    {

      $article = Article::find($id);
      if ($article) {
        return $article;
        // code...
      }
      else {
          return response()->json('not found', 401);
      }
    }

    public function store(Request $request)
    {
        $article = new Article;
        $article->title = $request->title;
                $article->body = $request->body;
                        $article->user_id = Auth::guard('api')->id();
                        $article->save();
        return response()->json($article, 201);
    }

    public function update(Request $request, $article)
    {
      // code...
      $article=Article::find($article);
      if ($article->user_id==Auth::guard('api')->id()) {
              $request->offsetUnset('user_id');
              if ($article) {
              $article->update($request->all());
              return response()->json($article, 200);
            }
        else {
              return response()->json("not found", 404);
           }
      }
      else {
        return response()->json("unauthorized", 401);
      }
    }

    public function delete(Request $api,$article)
    {

        $article=Article::find($article);
        if ($article) {
          $article->delete();
          return response()->json('post deleted', 204);
        }

        return response()->json('not found', 404);
    }
}
