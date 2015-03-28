<html>
    <head>
        
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="../../../Camilo/public/assets/js/app.js">
        </script>
        <script src="../../../Camilo/public/libs/alertify/lib/alertify.min.js">
        </script>
        <script src="../../../Camilo/public/libs/complexity/jquery.complexify.min.js">
        </script>
        <script src="../../../Camilo/public/libs/pickadate.js-3.5.4/lib/legacy.js"></script>
        <script src="../../../Camilo/public/libs/pickadate.js-3.5.4/lib/picker.js"></script>
        <script src="../../../Camilo/public/libs/pickadate.js-3.5.4/lib/picker.date.js"></script>
        </script>
        <script src="../../../Camilo/public/libs/pickadate.js-3.5.5/lib/picker.time.js"></script>
        <link rel="stylesheet" type="text/css" href="../../../Camilo/public/libs/pickadate.js-3.5.4/lib/themes/default.css">
        <link rel="stylesheet" type="text/css" href="../../../Camilo/public/libs/pickadate.js-3.5.4/lib/themes/default.date.css">
        <link rel="stylesheet" type="text/css" href="../../../Camilo/public/libs/pickadate.js-3.5.4/lib/themes/default.time.css">
        <link rel="stylesheet" type="text/css" href="../../../Camilo/public/libs/alertify/themes/alertify.default.css">
        <link rel="stylesheet" type="text/css" href="../../../Camilo/public/libs/alertify/themes/alertify.core.css">
    </head>
    <body>
        <button onclick="ms.saludar()">Saludar</button>
        <button onclick="ms.desvanecer()">Desvanecer</button>
        <button onclick="ms.CambiarColorFondo('red')">Rojo</button>
        <button onclick="ms.CambiarColorFondo('green')">Verde</button>
        <button onclick="ms.OcultarParrafo()">Ocultar</button>
        <button onclick="ms.OcultarParrafoSinID()">OcultarsinID</button>
        <button onclick="ms.MuestreParrafo()">MuestrePArrafo</button>
        <button onclick="ms.Alertify()">Alertify</button>
        <input  onclick="ms.Calendario()" class="datepicker" type="text">
        <input onclick="ms.Fecha()" class="timepicker" tdatepickerype="text">
        <input onchange="ms.ComprobarSeguridad()" type="password" id="password">
        <p id="parrafo">Esto es un parrafo</p>
        <p>Este es otro parrafo</p>
    </body>
</html>