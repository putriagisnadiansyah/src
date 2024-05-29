@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Payment</h1>
        <form action="{{ route('payments.update', $payment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="payer_name">Payer Name</label>
                <input type="text" class="form-control" id="payer_name" name="payer_name" value="{{ $payment->payer_name }}" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" value="{{ $payment->amount }}" required>
            </div>
            <div class="form-group">
                <label for="currency">Currency</label>
                <input type="text" class="form-control" id="currency" name="currency" value="{{ $payment->currency }}" required>
            </div>
            <div class="form-group">
                <label for="payment_date">Payment Date</label>
                <input type="date" class="form-control" id="payment_date" name="payment_date" value="{{ $payment->payment_date }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
