<?php
/**
 * @author Gabriel Akinyosoye
 * @email gabrielfemi799@gmail.com
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Complaint;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ComplaintController extends Controller
{
    /**
     * Find a certain complaint from the database.
     * 
     * @param int $id
     * @return bool
     */
    public function findOrFail($id)
    {
        return Complaint::findOrFail($id);
    }

    public function __construct()
    {
        //
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $complaints = Complaint::all();

        $declined = 23;
        
        $pending = 12;

        $accepted = 15;

        $details = ["total" => count($complaints),  "pending" => $pending, "accepted" => $accepted, "declined" => $declined];
        
        $response = ["details" => $details, "complaints" => $complaints];

        return response()->json($response, 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
            try{
                $complaint = $this->findOrFail($id);
                return response()->json($complaint, 200);
            }catch (ModelNotFoundException $exception){
                $message = ["message"=>$exception->getMessage()];

                return response()->json($message, 404);
            }
            

            //
        
        
        
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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body'=>'required'
        ]);

        // If the validation fails
        if ($validator->fails())
        {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $complaint = Complaint::findOrFail($id);
        $complaint->update(['title' => $request->title, 'body' => $request->body]);
        // Send response fulfilled request response.
        return response()->json(["complaint" => $complaint, "status"=>"success"], 200);

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
