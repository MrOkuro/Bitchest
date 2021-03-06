@extends('layouts.default',['title'=>'Accueil'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                Page d'Accueil du site

                    You are logged in!
                    @if(Auth::id() > 0 && Auth::user()->admin > 0)
                    {
                        {{ Auth::user()->name }} Bienvenu admin <a href="{{  route('admin.index') }}"> Acceder au dashbord </a>
                    }
                    @else
                    {
                        {{ Auth::user()->name }} Bienvenu client <a href="{{  route('user.index') }}"> Acceder au dashbord </a>
                    }
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection