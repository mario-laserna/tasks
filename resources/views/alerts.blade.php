<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div id="app" class="container">
            <alert>
                <strong>General!</strong> Your account has not been updated
            </alert>

            <alert type="error">
                <strong>Error!</strong> Your account has not been updated
            </alert>

            <alert type="success">
                <strong>Success!</strong> Your account has not been updated
            </alert>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.21/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.js"></script>

        <script src="{{asset('js/alert.js')}}"></script>
    </body>
</html>
