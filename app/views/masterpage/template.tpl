<html>
    <head>
        <link rel="stylesheet" href="../../../../Camilo/public/libs/bootstrap-3.3.2-dist/css/bootstrap.css">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script>
        var base_url = '{url("/")}';
        </script>
        <script src="../../../../Camilo/public/assets/js/fb.js"></script>
        <script src="../../../../Camilo/public/libs/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../../../Camilo/public/assets/css/fb.css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        {HTML::script('/libs/typeahead/typeahead.min.js')}
        <title>Facebook</title>
    </head>
    <body>
        <div class=container>
        
        {capture assign='layouts'}../layouts/{$layout}.tpl{/capture}
        {include file=$layouts}
        </div>
    </body>
</html>