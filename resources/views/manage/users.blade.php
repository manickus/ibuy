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
    <table class="table table-responsive" style="width: 100%">
        <thead>
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Email</th>
                <th>Facebook</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>{{ $user->email }}</td>
                    @if($user->facebook_id)
                        <td>Tak</td>
                    @else
                         <td>Nie</td>
                    @endif
                </tr>

            @endforeach
        </tbody>
    </table>
     {{ $users->links('vendor.pagination.bootstrap-4') }}
@endsection