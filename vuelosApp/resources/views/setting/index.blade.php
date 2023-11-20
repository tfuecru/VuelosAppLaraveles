@extends('app.base')

@section('title' ,'Vuelos flight List')    

@section('content')

  <form action="{{ url('setting') }}" method="post">
      @method('put')
      @csrf
      
      <div>
        Behaviour after inserting new flight
      </div>
      <input class="form-check-input" type="radio" id="showFlight" name="afterInsert" 
             value="show flight" @if(session('afterInsert', 'show flight') === 'show flight') checked @endif>
      <label class="form-check-label" for="showFlight">
        Show all flight list
      </label>
      <br>
      <input class="form-check-input" type="radio" id="createFlight" name="afterInsert"
            value="show create form"  @if(session('afterInsert', 'show flight') === 'show create form') checked @endif>
      <label class="form-check-label" for="createFlight">
        Show create new flight form
      </label>
      <br>
      <br>
      
      <label for="editMovie">Behaviour after editing new flight</label>
        
      <select id="afterEdit" id="afterEdit" class="form-select" aria-label="Default select example">
        @foreach ($afterEditOptions as $value => $label)
            <option value="{{ $value }}" {{ $selectedEditOption == $value ? 'selected' : '' }}>{{ $label}}</option>
        @endforeach
      </select>
      
      <br>
      
       <button type="submit" class="btn btn-dark">Save setting</button>
  </form>

@endsection