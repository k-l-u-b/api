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
        $clubber = Clubber::findOrFail($id);
        $clubber->update($request->all()); 
        return $clubber;
      }
      public function delClubber($id)
      {
        $clubber = Clubber::findOrFail($id);
        $clubber->delete(); 
        return "Clubber has been deleted";
      }
}
