@extends('layouts.default',['title'=>'Dashbord Admin'])

@section('content')


<div class="container">
    <div class="row">
    @include('clients.partials.sidenav')

        <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Achat de nouvelles cryptommonaies</div>

                    <table class="table table-bordered table-hover table-sm">
                        <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="col-auto small">@lang('Logo')</th>
                                    <th scope="col" class="col-auto small">@lang('Nom')</th>
                                    <th scope="col" class="col-auto small">@lang('Sigle')</th> 
                                    <th scope="col" class="col-auto small">@lang('')</th>                                          
                                </tr>
                            <tbody>
                                @foreach ($cryptos as $crypto)  

                                <tr>
                                    <td> <img src="{{URL::asset('/images')}}/{{ $crypto->image }}"> </td>
                                    <td>{{ $crypto->nom }}</td>
                                    <td>{{ $crypto->sigle }}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>                
                        </thead>
                    </table> 
                    
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection