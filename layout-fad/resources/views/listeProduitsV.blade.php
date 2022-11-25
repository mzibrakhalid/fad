<x-header/>

La liste des produits
<div class="row">
@foreach ($lp as $p)
{{-- {{$p["image"]}} --}}
<x-produit :image="$p['image']" :price="$p['price']" :title="$p['title']" :previous-price="$p['previous_price']??null"/>

@endforeach
</div>
{{-- {{$lp[1]["title"]}} --}}

    {{-- <?php
     echo ("<pre>");

     print_r($p);
     echo ("</pre>");
     echo ("---------------------");

    ?> --}}

    {{-- @foreach ($p as $item=>$val)
        @unless ($item=="rating")
            {{$val}}</br>
        @endunless
    @endforeach --}}