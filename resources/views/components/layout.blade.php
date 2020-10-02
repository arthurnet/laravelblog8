@include('partials._head')

<h1>THis is layout </h1>

<hr>


<div class="flex">

<div class='col-md-4'>
{{ $slot }}
</div>
 
<aside class='col-md4'>

side
</aside>
 


</div>
