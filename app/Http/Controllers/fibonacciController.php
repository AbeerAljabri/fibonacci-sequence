<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function showForm(Request $request)
    {
        $sequence = null; // Initialize sequence variable
        
         // Check if form is submitted via POST method
        if ($request->isMethod('post')) {

            // Validate input number
            $request->validate([
                'number' => 'required|integer|min:0',
            ]);

            // Get the input number
            $n = $request->input('number');
            $fib = [0, 1]; // Initialize Fibonacci sequence array

            // Calculate Fibonacci sequence up to $n numbers
            for ($i = 2; $i < $n; $i++) {
                $fib[] = $fib[$i - 1] + $fib[$i - 2];
            }

            // Slice the array to get the Fibonacci sequence of length $n
            $sequence = array_slice($fib, 0, $n);

        }

        // Return view with Fibonacci sequence data
        return view('fibonacci_form', ['sequence' => $sequence]);
    }
}
