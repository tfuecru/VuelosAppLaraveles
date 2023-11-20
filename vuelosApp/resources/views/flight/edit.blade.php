@extends('app.base')

@section('title', 'Vuelos Flight Edit')

@section('content')
    <form action="{{ url('flight/' . $flight->id) }}" method="post">

    <!-- Solución de error por CSRF -->
    <!--<input type="hidden" name="_method" value="post">-->
    <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
    @csrf
    @method('put')

    <!-- Inputs del formulario -->

    <div class="mb-3">

        <label for="cityOrigin" class="form-label">City Origin</label>

        <input type="text" class="form-control" id="cityOrigin" name="cityOrigin" maxlength="70" required value="{{ old('cityOrigin', $flight->cityOrigin) }}">

    </div>

    <div class="mb-3">

        <label for="cityDestination" class="form-label">City Destination</label>

        <input type="text" class="form-control" id="cityDestination" name="cityDestination" maxlength="70" required value="{{ old('cityDestination', $flight->cityDestination) }}">

    </div>

    <div class="mb-3">

        <label for="company" class="form-label">Company</label>

        <input type="text" class="form-control" id="company" name="company" maxlength="80" required value="{{ old('company', $flight->company) }}">

    </div>

    <div class="mb-3">

        <label for="date" class="form-label">Date</label>

        <input type="text" class="form-control" id="date" name="date" maxlength="10" required value="{{ old('date', $flight->date) }}">

    </div>
    
    <div class="mb-3">

        <label for="depureTime" class="form-label">Depure Time</label>

        <input type="text" class="form-control" id="depureTime" name="depureTime" maxlength="8" required value="{{ old('depureTime', $flight->depureTime) }}">

    </div>
    
    <div class="mb-3">

        <label for="arrivalTime" class="form-label">Arrival Time</label>

        <input type="text" class="form-control" id="arrivalTime" name="arrivalTime" maxlength="8" required value="{{ old('arrivalTime', $flight->arrivalTime) }}">

    </div>
    
    <div class="mb-3">

        <label for="ability" class="form-label">Ability</label>

        <input type="integer" class="form-control" id="ability" name="ability" required value="{{ old('ability', $flight->ability) }}">

    </div>
    
    <input type="submit" class="btn btn-dark" value="Edit">
    <a href="{{ url('flight') }}" class="btn btn-dark">Back</a>

</form>
@endsection