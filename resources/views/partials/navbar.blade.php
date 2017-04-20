<nav class="navbar navbar-default">
    <div class="container">

        <div class="navbar-header">

            <a class="navbar-brand" href="{{url('/')}}">
                <span class="glyphicon glyphicon-tower" aria-hidden="true"></span>
                 League of Legends Champions
            </a>
        </div>

        @if( true || Auth::check() )
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{url('/grafico1')}}">
                        <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                        Grafico de Barras
                    </a>
                </li>

                <li>
                    <a href="{{url('/grafico2')}}">
                        <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                        Grafico busqueda
                    </a>
                </li>

                <li>
                    <a href="{{url('/externa')}}">
                        <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                        Api Externa
                    </a>
                </li>

                

            </ul>
        </div>
        @endif
    </div>
</nav>