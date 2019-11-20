<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plans;
use App\Funds;
use App\Withdraws;
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
       if( $plan = Plans::where('name', $request->name_of_plan)->first()){
          return redirect('/plans')->with('error', 'plan name already exists' );
        }else{
        // dd($request->all());
        // $this->validate($request,
        // ['name' => 'required',
        // 'brief_description' => 'required',
        // 'target_amount' => 'required',
        // 'balance' => 'required',
        // 'end_date' => 'required'
        // ]);
        $plan = new Plans;
        $plan->name = $request->input('name_of_plan');
        $plan->brief_description = $request->input('Brief_description_of_plan');
        $plan->target_amount = $request->input('target_amount');
        $plan->balance = 0;
        $plan->end_date = $request->input('end_date_of_plan');
        $plan->user_id = auth()->user()->id;
        $plan->save();
       return redirect('/myhome')->with('success', 'You have succcessfully submitted');
         }
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
    // public function add_money(){
    //     return view('saving.add_money');
    // }
    public function select_plans(Request $request){
        $plans = Plans::where('user_id', auth()->user()->id)->get();
        return view('saving.add_money', compact('plans'));   
    }
    public function add_money_store(Request $request){
        $plan = Plans::where('id', $request->select)->first();
        $new_balance =  $plan->balance + $request->amount;
    if ($new_balance > $plan->target_amount){
        return view('saving.error');
    }else{ 
        $plan->update(['balance' => $new_balance]);
        $fund = new Funds;
        $fund->amount = $request->input('amount');
        $fund->plan_id = $request->input('select');
        $fund->user_id = auth()->user()->id;
        $fund->save();
        session()->flash('message', 'you have successfully added money'.$request->amount);		
    return redirect('/add_money')->with('fund', $fund);
        }
    }
    public function select_plans2(){
        $plans = Plans::where('user_id', auth()->user()->id)->get();
        return view('saving.withdraw', compact('plans'));
    }
    public function withdraw_store(Request $request){
        $plan = Plans::where('id', $request->select)->first();
        $new_balance =  $plan->balance - $request->amount;
    if ($request->amount > $plan->balance){
        return view('saving.error_second');
    }else{   
        $plan->update(['balance' => $new_balance]);
        $withdrawal = new Withdraws;
        $withdrawal->amount = $request->input('amount');
        $withdrawal->reason_for_withdrawal = $request->input('reason');
        $withdrawal->plan_id = $request->input('select');
        $withdrawal->user_id = auth()->user()->id;
        $withdrawal->save();
        session()->flash('message', 'you have successfully withdrawn '.$request->amount);
    return redirect('/withdraw')->with('withdrawal', $withdrawal); 
        } 
    }
    public function show_plans(){
        $plan = Plans::orderBy('created_at', 'desc')->paginate(10);
        return view('saving.myhome')->with('plan', $plan);
    }
}
