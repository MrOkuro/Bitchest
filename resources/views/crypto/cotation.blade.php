@extends('layouts.default',['title'=>'Dashbord Admin'])

@section('content')


<div class="container">
    <div class="row">
    @include('clients.partials.sidenav')

        <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> cotations récentes des cryptommonaies</div>

                    <table class="table table-bordered table-hover table-sm">
                        <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="col-auto small">@lang('Logo')</th>
                                    <th scope="col" class="col-auto small">@lang('Nom')</th>
                                    <th scope="col" class="col-auto small">@lang('Valeur')</th> 
                                    <th scope="col" class="col-auto small">@lang('Cours')</th> 
                                    <th scope="col" class="col-auto small">@lang('Evolution')</th> 
                                    <th scope="col" class="col-auto small">@lang('Date')</th> 
                                    <th scope="col" class="col-auto small">@lang('Lien')</th>                                          
                                </tr>
                            <tbody>
                                
                                <tr>
                                    <td> <img src="{{URL::asset('/images')}}/{{ $cotations->image }}"> </td>
                                    <td>{{ $cotations->nom }}</td>
                                    <td>{{ $cotations->valeur }}</td>
                                    <td> {{ $cotations->cours }} </td>
                                    <td> {{ $cotations->evolution }} </td>
                                    <td> {{ $cotations->date }} </td>
                                </tr>
                            
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