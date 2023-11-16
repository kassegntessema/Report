<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Carbon;

class PDFController extends Controller
{
    public function generatePDF(Request $req)
    {
        $duration = $req->duration;
        if ($duration == "Monthly") {
            $incomes = DB::table('incomes')->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->get();
            $totalIncome = DB::table('incomes')->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->sum('income');
            $data = [
                'title' => 'General Report',
                'date' => date('m/d/Y'),
                'incomes' => $incomes,
                'totalIncome' => $totalIncome,
                'duration' => $duration,
            ];

            $pdf = PDF::loadView('income.myPDF', $data);

            return $pdf->download('laraveltuts.pdf');
        } else if ($duration == "Yearly") {
            $incomes = DB::table('incomes')->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->get();
            $totalIncome = DB::table('incomes')->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->sum('income');

            $data = [
                'title' => 'Welcome to print',
                'date' => date('m/d/Y'),
                'incomes' => $incomes,
                'totalIncome' => $totalIncome,
                'duration' => $duration,
            ];
            $pdf = PDF::loadView('income.myPDF', $data);
            return $pdf->download('laraveltuts.pdf');
        } else {
            $incomes = DB::table('incomes')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
            $totalIncome = DB::table('incomes')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('income');
            $data = [
                'title' => 'Welcome to print',
                'date' => date('m/d/Y'),
                'incomes' => $incomes,
                'totalIncome' => $totalIncome,
                'duration' => $duration,
            ];
            $pdf = PDF::loadView('income.myPDF', $data);
            return $pdf->download('laraveltuts.pdf');

        }

    }

}
