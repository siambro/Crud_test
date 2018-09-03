<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Yajra\Datatables\Facades\Datatables;

class ContactController extends Controller
{
   public function index()
    {
        return Datatables::of(Contact::query())->make(true);
    }
    public function addItem(Request $request)
    {
        $rules = array(
            'name' => 'required|min:4|max:32',
            'email' => 'required|min:6|max:32',
            'phone' => 'required|min:11|max:11'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Response::json(array(

                    'errors' => $validator->getMessageBag()->toArray(),
            ));
        } else {
            $data = new Contact();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->save();

            return response()->json($data);
        }
    }
    public function readItems(Request $req)
    {
        $data = Contact::all();

        return view('contact')->withData($data);
    }
    public function editItem(Request $req)
    {
        $data = Contact::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->save();

        return response()->json($data);
    }
    public function deleteItem(Request $req)
    {
        Contact::find($req->id)->delete();
        return response()->json();
    }
}
