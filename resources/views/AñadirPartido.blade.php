@extends('welcome')

@section('content')
<div class="container ">
    <div class="featurette">
        <div class="featurette-inner text-center">
            <form role="form" class="search">
                <h3 class="no-margin-top h1">Añade una ID</h3>
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
                .always(function (x) {
                    console.log("Fí")
                });


        $("#add").click(function () {
            //alert(session);
            //alert("hi");
            var jugador = $("#id").val()
            var metodo2 = "getmatchdetails"

            var hasheo2 = devID + metodo2 + authkey + timestamp;
            var signature2 = md5(hasheo2)
            var cadena2 = "http://api.paladins.com/paladinsapi.svc/" + metodo2 + formato + "/" + devID + "/" + signature2 + "/" + session + "/" + timestamp + "/" + jugador;
            $.ajax({url: cadena2})
                    .done(function (data) {
                        var mapa = data[0].Map_Game;
                        var hora = data[0].Entry_Datetime;
                        for (var i = 0; i < data.length; i++) {
                            var nombre = data[i].playerName;
                            var heroe = data[i].Reference_Name;
                            var kills = data[i].Kills_Player;
                            var assists = data[i].Assists;
                            var deaths = data[i].Deaths;
                            var oro = data[i].Gold_Earned;
                            var opm = data[i].Gold_Per_Minute;
                            var daño = data[i].Damage_Player;
                            var recibido = data[i].Damage_Taken;
                            var heal = data[i].Healing;
                            var mitigado = data[i].Damage_Mitigated;
                            var racha = data[i].Killing_Spree;
                            var objetivo = data[i].Objective_Assists;
                            //console.log(nombre+" "+heroe+" "+kills+" "+assists+" "+deaths)
                        }

                    })
                    .fail(function (jqXHR, text, errorThrown) {
                        console.log(jqXHR + "---" + text + "---" + errorThrown);
                        console.log(jqXHR);
                    })
                    .always(function (x) {
                        console.log("Fí")
                    });
        });
    });


</script>
@stop