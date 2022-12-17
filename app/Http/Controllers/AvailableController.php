<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Room;
use APP\Models\Available;
use Auth;
use Session;

class AvailableController extends Controller
{


    public function Available(){
        $available=DB::table('availables')
        ->leftjoin('rooms','rooms.roomStudent','=','availables.roomAvailable')
        ->where('availables.userID','=',Auth::id())
        ->get();

        return view('available')->with('availables',$available);
    }


    public function AvailableRoom(){
    $AvailableRoom=0;
    $noItem=DB::table('availables')
    ->leftjoin('rooms','rooms.roomStudent','=','availables.roomStudent')
    ->select(DB::raw('COUNT(*) as count_item'));

} 

public function decrease(){
   $r=request();//get input value form editCategory
   $available=available::find($r->id);//retrieve data form mySQL
   $available->availableRoom=$r->availableRoom - 1;
   $available->availableRoom=$r->availableRoom;//binding data record form SQL

   $room->save();//apply SQL: update categories set name= :'$catName' where id "$catID"
   return redirect()->route('viewRoom');
}

public function increase(){
   $r=request();//get input value form editCategory
   $available=available::find($r->id);//retrieve data form mySQL
   $available->availableRoom=$r->availableRoom + 1;
   $available->availableRoom=$r->availableRoom;//binding data record form SQL

   $room->save();//apply SQL: update categories set name= :'$catName' where id "$catID"
   return redirect()->route('viewRoom');
}
} 
