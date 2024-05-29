@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Payments</h1>
        <a href="{{ route('payments.create') }}" class="btn btn-primary">Add Payment</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Payer Name</th>
                    <th>Amount</th>
                    <th>Currency</th>
                    <th>Payment Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>{{ $payment->payer_name }}</td>
                        <td>{{ $payment->amount }}</td>
                        <td>{{ $payment->currency }}</td>
                        <td>{{ $payment->payment_date }}</td>
                        <td>
                            <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
