@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ URL::to('payment_store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
        </div>
        <div class="form-group row">
            <label for="amount" class="col-sm-2 col-form-label">Amount</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount">
            </div>
        </div>
        <div class="form-group row">
            <label for="payment-method" class="col-sm-2 col-form-label">Payment Method</label>
                 <div class="col-sm-10">
                    <select id="payment-method" name="payment_method" required>
                        <option
                            value="Bkash">Bkash</option>
                        <option
                            value="Cash">Cash</option>
                    </select>
                </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Payment Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="date" name="payment_date" placeholder="Payment Date">
            </div>
        </div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
@endsection
