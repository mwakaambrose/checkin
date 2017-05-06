@extends('layouts.master')

@section('content')

@include('layouts.nav')
        <div class="container">
          <h3><strong>Today's Logs</strong></h3>
          <p>All logs for checkins and checkouts.</p>
            
            {{-- log table --}}

            <table class="table">
                <thead>
                    <tr>
                        <th><h4><strong>Name</strong></h4></th>
                        <th><h4><strong>Date</strong></h4></th>
                        <th><h4><strong>Checked In</strong></h4></th>
                        <th><h4><strong>Checked Out</strong></h4></th>
                    </tr>
                </thead>
                @foreach($checks as $check)
                <tbody>
                    <tr>
                        <td><a href="/checks/{{ $check->name }}"><strong>{{ $check->name }}</strong></a></td>
                        <td><strong>{{ $check->date }}</strong></td>
                        <td><strong>{{ $check->checkin }}</strong></td>
                        <td><strong>{{ $check->checkout }}</strong></td>
                    </tr>
                </tbody>
                @endforeach
            </table>


        </div>
@endsection