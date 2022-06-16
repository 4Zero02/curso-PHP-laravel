<h3>Fornecedores</h3>
@php
    //echo 'Texto teste 3';
@endphp

{{--@dd($fornecedores)--}}
Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@if( $fornecedores[0]['status'] == 'N')
    Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless
{{--@if(count($fornecedores) > 0 && count($fornecedores) < 10)--}}
{{--    <h3>Existem de 0 a 10 fornecedores cadastrados</h3>--}}
{{--@elseif(count($fornecedores) > 10)--}}
{{--    <h3>Existem mais de 10 fornecedores cadastrados</h3>--}}
{{--@else--}}
{{--    <h3>Ainda não existem fornecedores cadastrados</h3>--}}
{{--@endif--}}
