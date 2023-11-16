<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Carbon\Carbon;
use DB;
use DateTime;
use DateInterval;
use Illuminate\Http\Request;


class Incomecontroller extends Controller
{
    //
    public function index()
    {
        $incomes = Income::all();
        return view('income.index')->with('incomes', $incomes);
    }
    public function yearReport(Request $req)
    {
        $duration = $req->duration;
        if ($duration == "Monthly") {
            $incomes = DB::table('incomes')->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->get();
            $totalIncome = DB::table('incomes')->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->sum('income');
            return view('income.report')->with('incomes', $incomes)->with('duration', 'Monthly')->with('totalIncome', $totalIncome);
            //return view('income.report', compact('incomes', 'totalIncome'))->with('duration', 'Monthly');
        } else if ($duration == "Yearly") {
            $incomes = DB::table('incomes')->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->get();
            $totalIncome = DB::table('incomes')->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->sum('income');
            //return view('income.report', compact('incomes', 'totalIncome'))->with('duration', 'Monthly');
            return view('income.report')->with('incomes', $incomes)->with('duration', 'Yearly')->with('totalIncome', $totalIncome);
        } else {
            $incomes = DB::table('incomes')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
            $totalIncome = DB::table('incomes')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('income');
            //return view('income.report', compact('incomes', 'totalIncome'))->with('duration', 'Monthly');
            return view('income.report')->with('incomes', $incomes)->with('duration', 'Weekly')->with('totalIncome', $totalIncome);

        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('income.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        print_r($request->all());
        $request->validate([

            'income' => 'required|numeric',
            'descrptions' => 'required',

        ]);
        $input = $request->all();
        Income::create($input);
        return redirect('income')->with('flash_message', 'Income Addedd!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $incomes = Income::find($id);
        return view('income.show')->with('incomes', $incomes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $incomes = Income::find($id);
        return view('income.edit')->with('incomes', $incomes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $income = Income::find($id);
        $input = $request->all();
        $income->update($input);
        return redirect('income')->with('flash_message', 'income Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Income::destroy($id);
        return redirect('income')->with('flash_message', 'income deleted!');
    }
}

