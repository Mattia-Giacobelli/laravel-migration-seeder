<div class="card">
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->

    @if ($train['canceled'] == 0)
        
        <div>
            
            <h3>{{$train['departure_station']}} -> {{$train['destination_station']}}</h3>

            <h6> {{$train['agency']}} </h6>

            <h6> {{$train['train_code']}} </h6>

            @if ($train['on_time'] == 1)
                <span>In orario</span>
            @else
                <span>In ritardo</span>
            @endif
        </div>

        <div>
            <h3 class="departure"> {{$train['departure_day']}} </h3>
            <h4 class="departure"> Partenza: {{$train['departure_time']}} </h4>
            <h4 class="departure"> Arrivo: {{$train['arrival_time']}} </h4>
        </div>
        

    @else

        <div>
            <h3>{{$train['departure_station']}} -> {{$train['destination_station']}}</h3>

            <h6> {{$train['agency']}} </h6>

            <h6> {{$train['train_code']}} </h6>
        </div>
        
        <h3>Cancellato</h3>

    @endif


</div>