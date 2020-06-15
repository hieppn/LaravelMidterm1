<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Room;
use Illuminate\View\Middleware\ShareErrorsFromSession;
class RoomController extends Controller
{

        function index(){
            $rooms=Room::all();
            return view('/admin/rooms',['rooms'=>$rooms]);
        }
        function home(){
            $rooms=Room::all();
            return view('index',['rooms'=>$rooms]);
        }
        function create(){
        	return view('admin/create');
        }
        function store(Request $request){
        $name=$request->name;
        $price=$request->price;
        $number=$request->number;
        $area=$request->area;
        $image=$request->image;
        $typeroom=$request->typeroom;
        $request->validate([
        	'name'=>'required|unique:rooms',
            'area'=>'min:2',
         ]);
        $room= new Room;
    
        $room->name=$name;
        $room->price=$price;
        $room->number=$number;
        $room->typeroom=$typeroom;
        $room->image=$image;
        $room->area=$area;
        $room->save();
        return redirect("/rooms");
    }
}
