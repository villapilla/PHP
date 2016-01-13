@extends('app')

@section('content')
    <section>
        

        </form>
        <ul>
            @if ($products->isEmpty())
            <h1>No encontramos resultados a su consulta</h1>
            
            
            
            @else
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
        @endif
     </section>
@endsection