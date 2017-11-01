<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index()
    {
    	return view('billing.index');
    }

    public function result()
    {
    	$first = request('first-q');
    	$second = request('second-q');
    	$third = request('third-q');

    	$first_prize = ($first * 72020);

    	$o = (1.6 * exp($second / 100)) + ($first / 3);
    	$second_prize = ($first * 72020 * $o);

    	$third_prize = ($first_prize + $second_prize);

    	return view('billing.show', compact('first_prize', 'second_prize', 'third_prize'));
    }
}
