@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-4 text-center" style="font-size: 3.0 rem">{{ __('lang.welcome', ['Name' => Temerlan])}}</h1>
    <h3 class="display-4 text-center" style="font-size: 2.0 rem">{{__('lang.title')}}</h3>
    <h4 class="display-4 text-center" style="font-size:1.5 rem">{{__("lang.body")}}</h4>

    <br><br>
        <h4 class="display-4 text-center" style="font-size:1.5 rem">{{__("Абайдың ел ішіндегі есті жас Ерболмен достығы да осындай, тапқан рухани олжасы.)}}</h4>
        
</div>
@endsection
