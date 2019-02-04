@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Billing List</h1>
	<br>
	<div>
		<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Payment ID</th>
      <th scope="col">Username</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    @if(count($data)>0)
        @foreach($data as $t)
            <tr>
                <td>{{ $t->payment_id }}</td>
                <td>{{ $t->username }}</td>
                <td>{{ $t->payment_date }}</td>
                <td>{{ $t->payment_method }}</td>
                <td>{{ $t->amount }}</td>
                <td><button class="btn btn-primary" type="button">{{ $t->status }}</button></td>
			</tr>
        @endforeach
    @else
            <tr>
                <td colspan="4">No Information</td>
            </tr>
    @endif
    </tbody>
	</table>
	</div>
</div>
@endsection