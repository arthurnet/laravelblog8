<x-layout thetitle='{{$headtitle}}'>


{!! Html::style('css/styles.css') !!}
    
 {{ $mandate }}


<hr>

@foreach ($mandate as $m)

{{ $m->id }} {{ $m->filename }}

@endforeach


<x-sidebar>

hhh
</x-sidebar>

<x-notification description='diffff'>

part from mandatesum.blade.php
</x-notification>

 </x-layout>

