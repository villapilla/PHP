@extends('app')

@section('content')
    <section>
        <form  action="/" method="POST" class="order-by">
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
            {!! $products->render() !!}
     </section>
@endsection