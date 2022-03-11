<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
<!--        <link-->
<!--            rel="stylesheet"-->
<!--            href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"-->
<!--        />-->
    </head>
    <body class="antialiased">
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.min.js"></script>-->
<!--    <script src="https://unpkg.com/semantic-ui-vue/dist/commonjs/semantic-ui-vue.js"></script>-->
    <div id="app">
        <app></app>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
