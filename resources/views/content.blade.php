@extends('layout')

@section('content')

<div  class="container" >

    <div class="col-6 textouno">
        <p>1
            Recogemos firmas para donaciones a un fondo de investigación sobre los tigres. Para unirte a los intentos por salvar a los tigres, lo más fácil es donar dinero a diversas organizaciones que se dediquen a salvar la vida silvestre. Debido a que existen muchas organizaciones, es muy importante que te informes bien antes de optar por donar dinero a alguna de ellas. Estas son algunas organizaciones que cuentan con sus propios programas enfocados en los tigres:
            Panthera (en conjunción con la organización Save the Tigers Fund)
            el Fondo Mundial para la Naturaleza
            el fondo para la conservación de los tigres del Smithsonian
            el Fondo Internacional del Bienestar Animal
            la organización Big Cat Rescue ("Rescate de Felinos Grandes")
            el National Tiger Sanctuary ("Santuario Nacional de Tigres")
            Por desgracia, existen muchas estafas que se aprovechan de la grave situación de los tigres. Puedes optar por donar una sola vez o realizar una donación todos los meses.
        </p>
        <p>
                        2
            Adopta a un tigre. El Fondo Mundial para la Naturaleza (WWF, por sus siglas en inglés) ofrece un programa de adopción de tigres, mediante el cual puedes adoptar uno de manera simbólica y, con la donación de esa adopción, ayudas a financiar el trabajo de la WWF. Tienes diferentes paquetes de adopción a tu disposición, desde los $55 hasta los $520.[2]
            Tu dinero servirá para la creación de reservas para los tigres, protegerlos de los cazadores furtivos y otro tipo de trabajo de conservación que lleve a cabo la WWF.
            Asimismo, además de saber que ayudarás a estas criaturas especiales, recibirás una foto y una tarjeta informativa del tigre que ayudes a salvar junto con una versión de felpa de él.
        </p>
        <p>
                        Visita los zoológicos que estén acreditados por la Asociación de Zoológicos y Acuarios (AZA). En algunos casos, los zoológicos participan en un Plan de Supervivencia de Especies, los cuales constituyen planes de crianza autorizados para ayudar a salvar a los tigres. Visita únicamente los zoológicos que tengan una acreditación de la AZA. Alrededor del mundo, existen actualmente 223 zoológicos y acuarios que cumplen con los requisitos estrictos de la AZA.
            Puedes visitar el sitio web de la Asociación de Zoológicos y Acuarios para obtener una lista de los zoológicos y acuarios acreditados que puedes visitar o a los que puedes realizar donaciones.[3]
            En estos zoológicos, los animales (y esto incluye a los tigres) se mantienen en excelentes condiciones vitales y se hace lo que se puede para apoyar la crianza saludable de aquellos que se encuentren en la lista de especies en peligro de extinción.
            Asimismo, podrías visitar santuarios de vida silvestre en los que no esté permitido que los visitantes manipulen a los animales y en donde no se lleve a cabo la crianza. También existen instituciones rehabilitadoras de la vida silvestre, universidades que trabajan en establecer animales salvajes y algunos circos itinerantes que cumplen con todos los requisitos de la legislación animalista relevante (por ejemplo, la Ley de Bienestar Animal en los EE. UU.).
            En caso de que no estés seguro en cuanto a la condición de un zoológico o área de vida silvestre que quieras visitar, debes buscar la institución en cuestión en Internet.

        </p>
        <p>
            4
            Ofrécete como voluntario en un santuario de tigres. Muchos santuarios y reservas alrededor del mundo aceptan voluntarios y pasantes, los cuales ayudan con el mantenimiento del terreno, observan a los animales y llevan a cabo diversas otras tareas y quehaceres. Algunos lugares permiten que los voluntarios realicen tours guiados del área y conversen con los visitantes sobre los tigres.[4]
            Puedes explorar las opciones que haya en tu localidad buscando en Internet.
            Si vives en los EE.UU., el National Tiger Sanctuary ("Santuario Nacional de Tigres") y el Big Cat Rescue ("Rescate de Felinos Grandes") son algunos de los santuarios más prominentes que aceptan voluntarios. Asimismo, puedes probar con un programa de la organización GoEco.
        </p>
        <p>
            Viaja a una reserva de tigres. Estas constituyen parcelas grandes de la tierra nativa de los tigres que se designó específicamente para ellos, aunque, por supuesto, para visitarlas tendrías que viajar a lugares como Nepal o la India. En caso de que puedas hacerlo, cuando estés allá podrías participar en un tour dirigido por el servicio de parques del país en cuestión.[5]
            Estos lugares dependen de los ingresos provenientes del turismo como una ayuda para pagar una parte de sus gastos, además de que el turismo también genera ingresos para la zona en donde esté ubicada la reserva. Esto, a su vez, inspira a la comunidad local a apoyar a la reserva.
            Antes de viajar a visitar la reserva de tigres o el parque nacional, debes investigar un poco sobre la compañía de tours.
        </p>
    </div>

    <div class="col-6 textodos">




        <div class=""><a href="/create" class="btn btn-primary col-12 botonera">Firma tu tambien</a></div>

          <br/>
          <hr/>
          <br/>

          <div class="col-12">
              <div class="col-4"><img class="iconopequeño" src="{!! asset('icono.png') !!}"/> </div>
              <div class="col-8 cajacarrusel">


                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{!! asset('tigres/tigreuno.jpg') !!}" alt="">
                        </div>
                        <div class="item">
                            <img src="{!! asset('tigres/tigredos.jpg') !!}"alt="">
                        </div>
                        <div class="item">
                            <img src="{!! asset('tigres/tigretres.jpg') !!}" alt="">
                        </div>
                    </div>


                </div>
            <br/>
          </div>
          <hr/>
          <p class="textomodificado">Haz lo posible para salvar a este animal.</p>
          <hr/>
          <div class="col-12 contenidodefirmas">
            <div class="margen">
                <div class="col-12 firmas">

                @if (count($vari) == 0)

                    <h2 class="firmas red"> Aún no hay firmas, se el primero en dejarnos una firma;</h2>

                @else

                    <h2 class="firmas red"> Gente que ya a firmado;</h2>

                @endif

                    <br/>


                <ol>

                    @foreach ($vari as $var)
                    <div class="col-3"> <li > {{$var->name}}. </li> </div>
                    <div class="col-1"> | </div>
                    <div class="col-3"> {{$var->email}}. </div>
                    <div class="col-1"> | </div>
                    <div class="col-4"> {{$var->created_at}}. </div>
                    <br/>
                    <br/>

                    @endforeach

                </ol>



                </div>
            </div>

            </div>

          </div>





    </div>


</div>
</div>

@endsection
