<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\plans;
use DB;
class SavingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('saving.index');
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
        // $this->validate($request,
        // ['name' => 'required',
        // 'brief_description' => 'required',
        // 'target_amount' => 'required',
        // 'balance' => 'required',
        // 'end_date' => 'required'
        // ]);
        //  return 123;
        // dd($request->all());
        // dd($request->input('name_of_plan'));
         $plan = new plans;
        $plan->name = $request->input('name_of_plan');
        $plan->brief_description = $request->input('Brief_description_of_plan');
        $plan->target_amount = $request->input('target_amount');
        $plan->balance = $request->input('balance');
        $plan->end_date = $request->input('End_date_of_plan');
        $plan->user_id = auth()->user()->id;
        $plan->save();
        return view('saving.submit');
        // return redirect('/plans')->with('success', 'You have succcessfully submitted');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
    public function plan()
    {
        return view('saving.plans');
    }
    public function submit(){
        
    }
}
