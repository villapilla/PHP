@extends('app')

@section('content')
    <section>
        <form  action="/" method="POST" class="order-by reform">
            <h1>{{ $actualCategory }}</h1>
            <h2>Ordenar por:</h2>
            <select>
                <option value="0">----</option>
                <option value="1">A-Z</option>
                <option value="2">Precio Mayor </option>
                <option value="3">Precio Menor</option>
            </select>
        </form>
        <ul>
            @foreach ($products as $product)
            <li class="producto">
                <article>
                    <figure >
                        <img src="{{ url($product->image) }}">
                        <h2>
                            {{ ($product->name) }}
                        </h2>
                        @if ($product->offer === 1)
                            <figure class="oferta">
                                    <img src="{{ url('img/boton_rojo.png') }}" alt="oferta especial">
                            </figure>
                        @endif
                    </figure>
                    <var>
                        {{ ($product->price) }} €
                    </var>
                </article>
            </li>
            @endforeach
        </ul>    
     </section>
@endsection