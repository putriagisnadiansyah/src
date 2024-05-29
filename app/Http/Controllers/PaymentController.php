<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        return view('payments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'payer_name' => 'required',
            'amount' => 'required|numeric',
            'currency' => 'required',
            'payment_date' => 'required|date',
        ]);

        Payment::create($request->all());
        return redirect()->route('payments.index');
    }

    public function show($id)
    {
        $payment = Payment::find($id);
        return view('payments.show', compact('payment'));
    }

    public function edit($id)
    {
        $payment = Payment::find($id);
        return view('payments.edit', compact('payment'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'payer_name' => 'required',
            'amount' => 'required|numeric',
            'currency' => 'required',
            'payment_date' => 'required|date',
        ]);

        $payment = Payment::find($id);
        $payment->update($request->all());
        return redirect()->route('payments.index');
    }

    public function destroy($id)
    {
        Payment::destroy($id);
        return redirect()->route('payments.index');
    }
}
