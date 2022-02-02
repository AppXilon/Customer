<?php

namespace App\Http\Controllers;

use datatables;
use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::get();
        if (request()->ajax()) {
            return dataTables()->of($data)
                ->addColumn('aksi', function ($data) {
                    $button = "<button class='edit btn btn-warning btn-sm' id='".$data->id."'>Edit</button>&nbsp;";
                    $button .= "<button class='delete btn btn-danger btn-sm' id='".$data->id."'>Delete</button>&nbsp;";
                    return $button;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('reports.data');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = Data::create($request->all());
        // return redirect()->route('data.index')
        //                 ->with('success','Shop created successfully.');
        // $save = $data;
        $data->save();
       

        return redirect()->route('data.index');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $data = Data::find($id);
        return response()->json(['data' => $data]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $datas = [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address
        ];
        $data =  Data::find($id);
        $success = $data->update($datas);
        if ($success) {
            return response()->json([
                'message' => 'Data Successfully Updated!'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Data Failled Added'
            ], 422);
        }
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $data = Data::find($id);
        $delete = $data->delete();
        if ($delete) {
            return response()->json([
                'message' => 'Data Successfully Deleted!'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Data Failled Deleted!'
            ], 422);
        }
    }

}
