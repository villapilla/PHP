@extends('app')

@section('content')
    <section>
        <form  action="/categories/{{ $actualCategory->id }}/sort/ " method="POST" class="order-by reform">
            <h1>{{ $actualCategory->name }}</h1>
            <h2>Ordenar por:</h2>
            @if (isset($selected))
                {!! Form::select('order', $selectOrder, $selected) !!}
            @else
                {!! Form::select('order', $selectOrder, '0') !!}
            @endif
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="hidden" class="no_display">
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