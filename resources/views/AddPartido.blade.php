@extends('welcome')

@section('content')
<div class="container ">
    <div class="featurette">
        <div class="featurette-inner text-center">
            <form role="form" class="search">
                {{ csrf_field() }}
                <h3 class="no-margin-top h1">Añade una ID</h3>
                    <input id="EquipoL" type="search" placeholder="Equipo Local" class="form-control">
                    <input id="EquipoV" type="search" placeholder="Equipo Visitante" class="form-control">
                <div class="input-group input-group-lg">
                    <input id="id" type="search" placeholder="ID" class="form-control">
                    <span class="input-group-btn">
                        <button id="add" class="btn btn-danger" type="button">Añadir</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        var x = new Date();
        var y = x.getUTCFullYear().toString();
        var m = (x.getUTCMonth() + 1).toString();
        var d = x.getUTCDate().toString();
        var h = x.getUTCHours().toString();
        var m2 = x.getUTCMinutes().toString();
        var s = x.getUTCSeconds().toString();
        (d.length == 1) && (d = '0' + d);
        (m.length == 1) && (m = '0' + m);
        (s.length == 1) && (s = '0' + s);
        var timestamp = y + m + d + h + m2 + s;
        //alert(timestamp);
        var formato = "json";
        var metodo1 = "createsession";
        var devID = "2606";
        var authkey = "2F45793777D14142B4E0F787CD52EDAD";
        var hasheo = devID + metodo1 + authkey + timestamp;
        var signature = md5(hasheo);
        //alert(signature);
        var cadena = "http://api.paladins.com/paladinsapi.svc/" + metodo1 + formato + "/" + devID + "/" + signature + "/" + timestamp;

        var session;
        $.ajax({url: cadena})
                .done(function (data) {
                    console.log(data);
                    session = data.session_id;
                })
                .fail(function (jqXHR, text, errorThrown) {
                    console.log(jqXHR + "---" + text + "---" + errorThrown);
                    console.log(jqXHR);
                })


        $("#add").click(function () {
            var x = new Date();
            var y = x.getUTCFullYear().toString();
            var m = (x.getUTCMonth() + 1).toString();
            var d = x.getUTCDate().toString();
            var h = x.getUTCHours().toString();
            var m2 = x.getUTCMinutes().toString();
            var s = x.getUTCSeconds().toString();
            (d.length == 1) && (d = '0' + d);
            (m.length == 1) && (m = '0' + m);
            (s.length == 1) && (s = '0' + s);
            var timestamp = y + m + d + h + m2 + s;
            var formato = "json";
            var metodo2 = "getmatchdetails"
            var devID = "2606";
            var authkey = "2F45793777D14142B4E0F787CD52EDAD";

            var hasheo2 = devID + metodo2 + authkey + timestamp;
            var signature2 = md5(hasheo2)
            var cadena2 = "http://api.paladins.com/paladinsapi.svc/" + metodo2 + formato + "/" + devID + "/" + signature2 + "/" + session + "/" + timestamp + "/" + $('#id').val();
            var mapa, personaje, hora, nombre, heroe, kills, assists, deaths, oro, opm, dmg, recibido, heal, mitigado, racha, objetivo
            $.ajax({url: cadena2})
                    .done(function (data) {
                        mapa = data[0].Map_Game;
                        hora = data[0].Entry_Datetime;
                        $.get("../public/AddPartida", {mapa: mapa})
                                .done(function (data) {
                                    //alert(data);
                                })
                                .fail(function (xhr, status, error) {
                                    var err = eval("(" + xhr.responseText + ")");
                                    alert(err.Message);
                                });
                        for (var i = 0; i < data.length; i++) {
                            nombre = data[i].playerName;
                            heroe = data[i].Reference_Name;
                            kills = data[i].Kills_Player;
                            assists = data[i].Assists;
                            deaths = data[i].Deaths;
                            oro = data[i].Gold_Earned;
                            opm = data[i].Gold_Per_Minute;
                            dmg = data[i].Damage_Player;
                            recibido = data[i].Damage_Taken;
                            heal = data[i].Healing;
                            mitigado = data[i].Damage_Mitigated;
                            racha = data[i].Killing_Spree;
                            objetivo = data[i].Objective_Assists;
                            personaje = data[i].ChampionId;
                            //console.log(nombre+" "+heroe+" "+kills+" "+assists+" "+deaths)
                            $.get("../public/AddJugador", {nombre: nombre, heroe: heroe, kills: kills, 
                                assists: assists, deaths: deaths, oro: oro, opm: opm, dmg: dmg,
                                recibido: recibido, heal: heal, mitigado: mitigado, racha: racha,
                                objetivo: objetivo, personaje: personaje, IdPartida: $('#id').val()})
                                    .done(function (data) {
                                        //alert(data);
                                    })
                                    .fail(function () {
                                    });
                        }

                    })
                    .fail(function (jqXHR, text, errorThrown) {
                        console.log(jqXHR + "---" + text + "---" + errorThrown);
                        console.log(jqXHR);
                    })
                    .always(function (x) {
                        console.log("Fí")
                    }
                    );


        });
    });


</script>
@stop