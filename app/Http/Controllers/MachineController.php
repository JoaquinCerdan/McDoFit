<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Machine;
use App\Room;

class MachineController extends Controller
{
    //

    public function listMachines(Request $request) {

        if($request->has("sort")){
            $sort = $request->input("sort") ;

            $m = Machine::orderBy($sort)->paginate(7);

        }else{
            $sort = null;
            $m = Machine::paginate(7);
        }
        return view("listaMaquinas",["machines"=>$m, 'sort'=>$sort]);
    }

    public function listMachinesAdmin(Request $request) {

        if($request->has("sort")){
            $sort = $request->input("sort") ;
            $m = Machine::orderBy($sort )->paginate(7);
        }else{
            $sort = null;
            $m = Machine::paginate(7);
        }
        return view("listaMaquinasAdmin",["machines"=>$m,'sort'=>$sort]);
    }

    public function deleteMachine($id){

        $machine = Machine::findOrFail($id);
        $machine->delete();

        /*
        if($request->has("sort")){
            $sort = $request->input("sort") ;
            $m = Machine::orderBy($sort )->paginate(4);
        }else{
            $sort = null;
            $m = Machine::paginate(4);
        }

        return view("listaMaquinasAdmin",["machines"=>$m,'sort'=>$sort]);
        */
        return redirect('maquinasAdmin');
    }

}

