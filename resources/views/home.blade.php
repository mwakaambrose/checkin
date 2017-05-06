@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @if(!empty($message))

                <div class="alert alert-info">
                    {{ $message }}
                </div> 

            @endif 
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="/home/checkin" class="btn btn-danger" >Checkin</a>
                    <a href="/home/checkout" class="btn btn-success pull-right" >Checkout</a>
                </div>
                <div class="panel-body">
                    <table class="table">
                    <thead>
                        <tr>
                            <th><h4><strong>Name</strong></h4></th>
                            <th><h4><strong>Date</strong></h4></th>
                            <th><h4><strong>Checked In</strong></h4></th>
                            <th><h4><strong>Checked Out</strong></h4></th>
                        </tr>
                    </thead>
                    @if(isset($checks))
                        @foreach($checks as $check)
                        <tbody>
                            <tr>
                                <td><a><strong>{{ $check->name }}</strong></a></td>
                                <td><strong>{{ $check->date }}</strong></td>
                                <td><strong>{{ $check->checkin }}</strong></td>
                                <td><strong>{{ $check->checkout }}</strong></td>
                            </tr>
                        </tbody>
                        @endforeach
                    @endif
                        
                    {{-- <pre>
                        @if(isset($check))
                            {{ var_dump($check) }}
                        @endif
                    </pre> --}}

                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
