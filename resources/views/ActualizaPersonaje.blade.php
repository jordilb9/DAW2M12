@extends('welcome')

@section('content')
<div class="container ">
    <div class="featurette">
        <div class="featurette-inner text-center">
            <button id="actualiza" type="button" class="btn btn-warning">Actualiza Personajes</button>
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
                });
                
        $("#actualiza").click(function () {
            
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
            var metodo2 = "getchampions"
            var devID = "2606";
            var authkey = "2F45793777D14142B4E0F787CD52EDAD";
            var hasheo2 = devID + metodo2 + authkey + timestamp;
            var signature2 = md5(hasheo2)
            var cadena2 = "http://api.paladins.com/paladinsapi.svc/" + metodo2 + formato + "/" + devID + "/" + signature2 + "/" + session + "/" + timestamp + "/" + "1";
            var nombre, rol, lore, imagen;
            $.ajax({url: cadena2})
                    .done(function (data) {
                        console.log(data);
                        for (var i = 0; i < data.length; i++) {
                            nombre = data[i].Name;
                            console.log(nombre);
                            rol = data[i].Roles;
                            lore = data[i].Lore;
                            imagen = data[i].ChampionIcon_URL;
                            $.get("../public/AddPersonaje", {nombre: nombre, rol: rol, lore: imagen})
                                    .done(function (data) {
                                        alert(data)
                                    })
                                    .fail(function () {
                                        alert("peta")
                                    });
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