<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class Devicecontroller extends Controller
{
    //
    function list($id=null)
    {

        return $id?Device::find($id):Device::all();
    }

    function add(Request $req)
    {
        $device= new Device;
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result=$device->save();

        if($result)
        {
            return["Result"=>"Data saved"];

        }
        else
        {
            return["Result"=>"Data not save"];
        }
    }
    function update(Request $req)
    {
        $device= Device::find($req->id);
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result=$device->save();

        if($result)
        {

        return["Result"=>"Data is updated"];

        }
        else
        {
            return["Result"=>"Data is not updated"];
        }
    }
     function search($name)
     {
         return Device::where("name",$name)->get();
     }

     function delete($id)
     {
         $device= Device::find($id);
         $result=$device->delete();

         if($result)
         {
 
                  return ["result"=>"Record is delete"];

     }
     else
     {
 
        return ["result"=>"Record is not delete"];

    }

}




}
