<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Accelerometer;
use App\Models\Battery;
use App\Models\Light;
use App\Models\Location;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $retorno = [];

        $sensors = explode(",", $request->sensors);
        for ($i = 0; $i < count($sensors); $i++) {
            $sensor = '\\App\\Models\\'.ucwords($sensors[$i]);
            $sensor = new $sensor();
            $retorno[ $sensors[$i] ] = $sensor->take(100)->get();
        }

        return $retorno;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach($request->all() as $k => $v):
            $key = array_keys($v)[0];
            $sensor = '\\App\\Models\\'.ucwords($key);
            $sensor = new $sensor();
            $sensor->insert($v[$key]);
        endforeach;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $sensors = [
            'accelerometer' => Accelerometer::take(10)->orderBy('id', 'DESC')->get(),
            'location' => Location::take(10)->orderBy('id', 'DESC')->get(),
            'battery' => Battery::take(10)->orderBy('id', 'DESC')->get(),
            'light' => Light::take(10)->orderBy('id', 'DESC')->get(),
        ];
        return Inertia::render(
            'Sensors', 
            [
                'data' => $sensors
            ]
        );
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
