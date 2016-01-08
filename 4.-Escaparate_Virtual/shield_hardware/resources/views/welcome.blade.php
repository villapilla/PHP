@extends('app')

@section('content')
	 <nav>
                <ul>
                    <li class="menu"><a href="">Componentes</a></li>
                    <li class="menu"><a href="">Perifericos</a></li>
                    <li class="menu"><a href="">Premontados</a></li>
                </ul>
                    <figure id="banner">
                       
                        <img class="imagen1" src="img/img_transformada.png" alt="publicidad">
                        <img class="imagen2" src="img/banner-intel.png" alt="publicidad">
                        <img class="imagen3" src="img/banner_amd.png" alt="publicidad">
                        <img class="imagen4" src="img/baner-gigabyte.png" alt="publicidad">
                        <img class = "absolute izquierda" src="img/flecha_banner.png" alt="flecha dcha">
                         <img class = "absolute derecha" src="img/flecha_banner.png" alt="flecha izda">
                    </figure>
            </nav>
            <section>
                <section id="descripcion">
                </section>    
                <ul>
                    <li class="producto">
                        <article>
                            <figure >
                                <img src="img/cryorig-h5-universal.jpg" alt="cryorig-h5">
                                <h2>
                                    Criorig H7
                                </h2>
                            </figure>
                            <var>
                                34,90 €
                            </var>
                        </article>
                    </li>
                    <li class="producto">
                        <article>
                            <h2>
                                Intel Core i7 
                            </h2>
                            <figure >
                                <img src="img/intel-core-i7-5960x-30ghz.jpg" alt="cryorig-h5">
                            </figure>
                            <var>
                                1334,90 €
                            </var>
                        </article>
                    </li>
                    <li class="producto">
                        <article >
                           <figure>
                                <img src="img/adata-premier-pro-sp920-128gb-ssd.jpg" alt="ssd adata">
                                <h2>
                                    Adata SP920 256Gb SSD
                                </h2>
                            </figure>
                            <var>
                                103,00 €
                            </var>
                        </article>
                    </li>
                    <li class="producto">
                        <article>
                            <figure>
                                <img src="img/gigabyte-z97x-gaming-gt.jpg.png" alt="placa gigabyte z97">
                                <h2>
                                    Gigabyte Z97X-Gaming GT
                                </h2>
                            </figure>
                            <var>
                                248,00 €
                            </var>
                        </article>
                    </li>
                    <li class="producto">
                        <article>
                            <figure>
                                <img src="img/a4tech-a9-bloody-gaming-mouse.jpg" alt="ratón a4Tech gaming">
                                <h2>
                                    A4Tech A9 Bloody Gaming
                                </h2>
                                <figure class="oferta">
                                    <img src="img/boton_rojo.png" alt="oferta especial">
                                </figure>
                            </figure>
                            <var>
                                24,95 €
                            </var>
                        </article>
                    </li>
                    <li class="producto">
                        <article>
                           <figure>
                               <img src="img/aerocool-gt-white-advance-edition.jpg" alt="caja aerocool GT blanca">
                               <h2>
                                    Aerocool GT White
                                </h2>
                           </figure>
                           <var>
                                37,00 €
                           </var>
                        </article>
                    </li>
                    <li class="producto">
                        <article>
                           <figure>
                               <img src="img/zotac-zbox-bi320-e.jpg" alt="zotac Zbox b1320E">
                               <h2>
                                    Zotac Zbox B1320-E
                                </h2>
                           </figure>
                           <var>
                                132,00 €
                           </var>
                       </article>
                    </li>
                    <li class="producto">
                        <article>
                           <figure>
                               <img src="img/inno3d-geforce-gtx-970-oc-4gb-gddr5.jpg" alt="tarjeta gráfica 970 4GB inno3D">
                               <h2>
                                   Inno3D GTX 970 OC 4gb DDR5
                                </h2>
                           </figure>
                           <var>
                                345,00 €
                           </var>
                        </article>
                    </li>
                    <li class="producto">
                        <article>
                           <figure>
                               <img src="img/enermax-revolution-x-t-630w-modular.jpg.png" alt="fuente enermax 630w">
                               <h2>
                                    Enermax X't 630w tModular
                                </h2>
                           </figure>
                           <var>
                                98,50 €
                           </var>
                        </article>
                    </li>
                </ul>
            </section>
    @endsection