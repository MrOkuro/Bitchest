@extends('layouts.default',['title'=>'Dashbord Admin'])

@section('content')


<div class="container">
    <div class="row">
    @include('clients.partials.sidenav')

        <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des cryptomonnaie</div>

                    <table class="table table-bordered table-hover table-sm">
                        <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="col-auto small">@lang('Logo')</th>
                                    <th scope="col" class="col-auto small">@lang('Nom')</th>
                                    <th scope="col" class="col-auto small">@lang('Montant')</th> 
                                    <th scope="col" class="col-auto small">@lang('Achat')</th>
                                    <th scope="col" class="col-auto small">@lang('Date achat')</th>

                                </tr>
                            <tbody>                                  
                            @foreach ($cotations as $cotation)
                                <tr>
                                    <td> <img src="{{URL::asset('/images')}}/{{ $cotation->crypto->image }}"> </td>
                                    <td>{{ $cotation->crypto->nom }}</td>
                                    <td>{{ $cotation->montant }}</td>
                                    <td> {{ $cotation->type }} </td>
                                    <td> {{ \Carbon\Carbon::parse($cotation->created_at)->format('d/m/Y') }} </td>
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