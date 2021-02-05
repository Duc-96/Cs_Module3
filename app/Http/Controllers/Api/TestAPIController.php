<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TestAPI;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Lay tat ca
        $locations = TestAPI::all();

        //Phan trang mac dinh 15/page
        //$locations = Location::paginate();//15

        //Phan trang cu the 10/page
        //$locations = Location::paginate(10);//10

        //Phan trang ket hop voi dieu kien
        //$locations = Location::where('diensten_klant','=','RVO')->paginate(2);

        //Theo dieu kien SELECT * FROM wpk9_locations WHERE diensten_klant = 'RVO';
        //$locations = Location::where('diensten_klant','=','RVO')->get();

        /*
        THeo dieu kien ket hop order: 
        SELECT * FROM wpk9_locations WHERE diensten_klant = 'RVO' ORDER BY id DESC;
        */
        //$locations = Location::where('diensten_klant','=','RVO')->orderBy('id','DESC')->get();

        /*
        THeo dieu kien ket hop limit: 
        SELECT * FROM wpk9_locations WHERE diensten_klant = 'RVO' ORDER BY id DESC LIMIT 5;
        */
        //$locations = Location::where('diensten_klant','=','RVO')->orderBy('id','DESC')->take(5)->get();

        /*
        Theo dien kien kien IN
        SELECT * FROM wpk9_locations WHERE id IN (3,4,5);
        */
        //$locations = Location::whereIn('id',[3,4,5])->get();



        return response()->json($locations, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd( $request->all() );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestAPI  $location
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //lay theo khoa chinh = SELECT * FROM wpk9_locations WHERE id = 18
        //$location = Location::find($id);

        //lay theo dieu kien SELECT * FROM wpk9_locations WHERE id = 18
        //$location = Location::where('id',$id)->first();

        //lay theo dieu kien SELECT * FROM wpk9_locations WHERE id = 18
        //$location = Location::firstWhere('id', $id);

        /*
        lay theo dieu kien SELECT * FROM wpk9_locations WHERE id = 18
        neu co ket qua thi tra ve gia tri dau tien 
        neu ko co ket qua thi bao loi
        */
        $location = TestAPI::where('id',$id)->firstOrFail();



        // $location = $location->toArray();
        // return json_encode($location);
        return response()->json($location, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestAPI  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //locations/18 PHUONG THUC POST, tham so _method="PUT"
       /*
        $request = mang post
        $id = 18
       */
       dd( $request->all() );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestAPI  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {

        dd( $request->all() );
    }
}
