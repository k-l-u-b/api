<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clubber;

class ClubberController extends Controller
{
      // List All items
      public function getClubbers()
      {
          $clubbers = Clubber::all();
          return $clubbers;
      }
  
      // List a single item
      public function getClubber($id)
      {
          $clubber = Clubber::find($id);
          return $clubber;
      }

      public function putClubber($id,Request $request)
      {
        /*$article = Article::findOrFail($id);
        $article->update($request->all());
    
        return $article;*/

        //var_dump($request->name);
        $clubber = Clubber::findOrFail($id);
        $clubber->update($request->all()); 
        return $clubber;
      }
}
