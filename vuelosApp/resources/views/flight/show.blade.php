@extends('app.base')

@section('title', 'Vuelos Flight Show')

@section('content')
    <div class="table-responsive small">
            <table class="table table-striped table-sm">
                <tbody>
                <tr>
                      <td>#</td>
                      <td>{{ $flight->id }}</td>
                </tr>
                <tr>
                      <td>City Origin</td>
                      <td>{{ $flight->cityOrigin }}</td>
                </tr><tr>
                      <td>City Destination</td>
                      <td>{{ $flight->cityDestination }}</td>
                </tr>
                <tr>
                      <td>Company</td>
                      <td>{{ $flight->company }}</td>
                </tr>
                <tr>
                      <td>Date</td>
                      <td>{{ $flight->date }}</td>
                </tr>
                <tr>
                      <td>Depure Time</td>
                      <td>{{ $flight->depureTime }}</td>
                </tr>
                <tr>
                      <td>Arrival Time</td>
                      <td>{{ $flight->arrivalTime }}</td>
                </tr>
                <tr>
                      <td>Ability</td>
                      <td>{{ $flight->ability }}</td>
                </tr>
                </tbody>
            </table>
            
            <a href="{{ url('flight') }}" class="btn btn-dark">Back</a>
    </div>
@endsection