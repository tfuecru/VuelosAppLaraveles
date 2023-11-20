@extends('app.base')

@section('title' ,'Vuelos Flight List')

@section('content')
<div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">City Origin</th>
                  <th scope="col">City Destination</th>
                  <th scope="col">Company</th>
                  <th scope="col">Date</th>
                  <th scope="col">Depure Time</th>
                  <th scope="col">Arrival Time</th>
                  <th scope="col">Ability</th>
                </tr>
              </thead>
              <tbody>
                @foreach($flights as $flight)
                    <tr>
                      <td>{{ $flight->id }}</td>
                      <td>{{ $flight->cityOrigin }}</td>
                      <td>{{ $flight->cityDestination }}</td>
                      <td>{{ $flight->company }}</td>
                      <td>{{ $flight->date }}</td>
                      <td>{{ $flight->depureTime }}</td>
                      <td>{{ $flight->arrivalTime }}</td>
                      <td>{{ $flight->ability }}</td>
                      <td>
                         <a class="btn-primary btn" href="{{ url('flight/' . $flight->id )}}">Link to show</a>
                         <a class="btn-danger btn" href="{{ url('flight/' . $flight->id . '/edit')}}">Link to edit</a>
                         <a data-url="{{ url('flight/' . $flight->id) }}" class="btn-secondary btn hrefDelete" href="">Link to delete</a>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
            
            <a class="btn-info btn" href="{{ url('flight/create') }}">link to create</a>
            <form id="formDeleteV2" action="{{ url('flight/16') }}" method="post">
              @csrf
              @method('delete')
            </form>
          </div>
          
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
@endsection