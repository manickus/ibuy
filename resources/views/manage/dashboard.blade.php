@extends('layouts.manage')
@section('css')

<style>
.panel-primary>.panel-heading {
    color: #fff;
    background-color: #337ab7;
    border-color: #337ab7;
}


.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.panel-primary {
    border-color: #337ab7;
}


.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}

.panel-footer {
	padding: 10px 15px;
    background-color: #f5f5f5;
    border-top: 1px solid #ddd;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}

.panel-green > .panel-heading {
    border-color: #5cb85c;
    color: white;
    background-color: #5cb85c;
}

.panel-yellow > .panel-heading {
    border-color: #f0ad4e;
    color: white;
    background-color: #f0ad4e;
}

</style>
@endsection

@section('content')


          <h2>Logs:</h2>
          <div class="table-responsive">
            <table class="table table-striped table-responsive">
              <thead>
                <tr>
                  <th>Opis</th>
                  <th>Czas</th>
            
                </tr>
              </thead>
              <tbody>
              @foreach($activity as $event)
                <tr>

                  <td>{{ $event->description }}</td>
   
                  <td>{{ $event->created_at->diffForHumans() }}</td>
        
                 
                </tr>
               @endforeach
              </tbody>
            </table>
          </div>
        </main>
      </div>
}
}
@endsection
