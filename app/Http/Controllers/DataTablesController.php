<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cars;

use Datatables;

class DataTablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Cars::select('*'))
            ->addColumn('action', 'admin.car-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('admin.cars');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carsId = $request->id;
        $cars   =   Cars::updateOrCreate(
                    [
                     'id' => $carsId
                    ],
                    [
                    'car_name' => $request->car_name,
                    'car_platenum' => $request->car_platenum,
                    'car_price' => $request->car_price,
                    'car_description' => $request->car_description,
                    ]);
        return Response()->json($cars);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modesl\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $cars  = Cars::where($where)->first();

        return Response()->json($cars);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modesl\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cars = Cars::where('id',$request->id)->delete();

        return Response()->json($cars);
    }
}
