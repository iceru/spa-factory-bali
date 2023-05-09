<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Gri;
use App\Mail\GriMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gri = Gri::all();
        return view('admin.gri.create', compact('gri'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'company' => 'required',
                'job_title' => 'required',
                'usage_for' => 'required',
            ]);

            $gri = new Gri;

            $gri->name = $request->name;
            $gri->email = $request->email;
            $gri->company = $request->company;
            $gri->job_title = $request->job_title;
            $gri->usage_for = $request->usage_for;

            $gri->save();

            Mail::to("sales@spafactorybali.biz")->send(new GriMail($request));

            $return = response()->json(['success' => 'Message sent!']);
        } catch (Exception $e) {
            $return = response()->json(['error' => 'Something is wrong, please try again <br />' . $e->getMessage()], 500);
        }

        return $return;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gri  $gri
     * @return \Illuminate\Http\Response
     */
    public function show(Gri $gri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gri  $gri
     * @return \Illuminate\Http\Response
     */
    public function edit(Gri $gri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gri  $gri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gri $gri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gri  $gri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gri $gri)
    {
        //
    }
}
