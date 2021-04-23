<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function listRooms(Request $request) {

        if($request->has("sort")){
            $sort = $request->input("sort") ;
            $r = Room::orderBy($sort )->paginate(2);
        }else{
            $sort = null;
            $r = Room::paginate(2);
        }
        return view("listaSalas",["rooms"=>$r,'sort'=>$sort]);
    }

    public function deleteRoom($id){

        $room = Room::findOrFail($id);
        $room->delete();

        return redirect('salasAdmin');
    }
}
