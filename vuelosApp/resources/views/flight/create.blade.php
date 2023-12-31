@extends('app.base')

@section('title', 'Vuelos Create Flight')

@section('content')
    <form action="{{ url('flight') }}" method="post">

    <!-- Solución de error por CSRF -->
    <!--<input type="hidden" name="_method" value="post">-->
    <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
    @csrf

    <!-- Inputs del formulario -->

    <div class="mb-3">

        <label for="cityOrigin" class="form-label">City Origin</label>

        <input type="text" class="form-control" id="cityOrigin" name="cityOrigin" maxlength="70" required value="{{ old('cityOrigin') }}">

    </div>

    <div class="mb-3">

        <label for="cityDestination" class="form-label">City Destination</label>

        <input type="text" class="form-control" id="cityDestination" name="cityDestination" maxlength="70" required value="{{ old('cityDestination') }}">

    </div>

    <div class="mb-3">

        <label for="company" class="form-label">Company</label>

        <input type="text" class="form-control" id="company" name="company" maxlength="80" required value="{{ old('company') }}">

    </div>

    <div class="mb-3">

        <label for="date" class="form-label">Date</label>

        <input type="date" class="form-control" id="date" name="date" required value="{{ old('date') }}">

    </div>
    
    <div class="mb-3">

        <label for="depureTime" class="form-label">Depure Time</label>

        <input type="time" class="form-control" id="depureTime" name="depureTime" required value="{{ old('depureTime') }}">

    </div>
    
    <div class="mb-3">

        <label for="arrivalTime" class="form-label">Arrival Time</label>

        <input type="time" class="form-control" id="arrivalTime" name="arrivalTime" required value="{{ old('arrivalTime') }}">

    </div>
    
    <div class="mb-3">

        <label for="ability" class="form-label">Ability</label>

        <input type="number" class="form-control" id="ability" name="ability" min="0" required value="{{ old('ability') }}">

    </div>
    
    <button type="submit" class="btn btn-success">Create</button>
    <a href="{{ url('flight') }}" class="btn btn-dark">Back</a>

</form>
@endsection