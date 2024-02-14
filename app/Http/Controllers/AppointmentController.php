<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointments;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events.index');
    }

     public function index2()
    {
        return view('events.index2');
    }




    public function data()
    {
        $event = appointments::orderBy('id_event', 'desc')->get();

        return datatables()
            ->of($event)
            ->addIndexColumn()
            ->addColumn('action', function ($event) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('events.update', $event->id_event) .'`)" class="btn btn-xs btn-primary btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('events.destroy', $event->id_event) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**<button onclick="editForm(`'. route('events.update', $event->id_event) .'`)" class="btn btn-xs btn-primary btn-flat"><i class="fa fa-pencil"></i></button>
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    // visit "codeastro" for more projects!
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = new appointments();
        $kategori->event_name = $request->event_name;
        $kategori->description = $request->description;
         if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagename = 'img' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/img'), $imagename);

        $kategori->image = "/img/$imagename";
        }
        $kategori->event_status = $request->event_status;
        $kategori->save();

        return response()->json('Data saved successfully', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = appointments::find($id);

        return response()->json($kategori);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori = appointments::find($id);
        $kategori->event_name = $request->event_name;
        $kategori->description = $request->description;
        
         if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagename = 'img' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/img'), $imagename);

        $kategori->image = "/img/$imagename";
        }

        $kategori->event_status = $request->event_status;
        $kategori->update();

        return response()->json('Data saved successfully', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = appointments::find($id);
        $kategori->delete();

        return response(null, 204);
    }
}
