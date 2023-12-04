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
            
            <a class="btn-danger btn" href="{{ url('flight/' . $flight->id . '/edit')}}">Link to edit</a>
            <a data-url="{{ url('flight/' . $flight->id) }}" class="btn-secondary btn hrefDelete" href="">Link to delete</a>
            <a href="{{ url('flight') }}" class="btn btn-dark">Back</a>
            
            <form id="formDeleteV2" action="{{ url('flight/16') }}" method="post">
              @csrf
              @method('delete')
            </form>
            
            
            <script>
            const ahrefs = document.querySelectorAll(".hrefDelete");
            const formDelete = document.getElementById('formDeleteV2');
            ahrefs.forEach(function(ahref) {
                ahref.onclick = (event) => {
                  event.preventDefault();
                  if(confirm('¿Seguro que quieres borrar el vuelo?')) {
                    let url = event.target.dataset.url;
                    formDelete.action = url;
                    formDelete.submit();
                  }
                };
            });
          </script>
    </div>
@endsection