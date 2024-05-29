@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Payment</h1>
        <form action="{{ route('payments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="payer_name">Payer Name</label>
                <input type="text" class="form-control" id="payer_name" name="payer_name" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="currency">Currency</label>
                <input type="text" class="form-control" id="currency" name="currency" required>
            </div>
            <div class="form-group">
                <label for="payment_date">Payment Date</label>
                <input type="date" class="form-control" id="payment_date" name="payment_date" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
