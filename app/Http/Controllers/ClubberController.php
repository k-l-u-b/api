<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clubber;
use App\Perception;


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

      public function postPerception($id, Request $request)
      {
        $clubber = Clubber::findOrFail($id);
        
        if($clubber) {
            $perception = Perception::create([
                'clubber_id' => $id,
                'bizarre_alluring' => $request->bizarre_alluring,
                'introvert_exuberant' => $request->introvert_exuberant,
                'target_clubber_id' => $request->target_clubber_id
                ]);
        }
        return $perception;
      }
      public function getPerceptions($id) {
        $perceptions = Perception::where('clubber_id', $id)->get();
        return $perceptions;
      }
      public function putPerception($user_id,$perception_id, Request $request) {
        $perception = Perception::findOrFail($perception_id);
        $perception->update($request->all());
        return $perception;
      }
}
