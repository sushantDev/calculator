<html class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Episode 13</title>
    <link rel="stylesheet" href="css/bulma.css"/>
    <style>
        body {
            padding: 2em;
        }
    </style>
</head>
<body>

<div id="app" class="container">
    <progress-view inline-template>
        <h1>your progress through this course is {{ completionRate }}%</h1>
    </progress-view>
</div>

<script src="vue/vue.js"></script>
<script>
    Vue.component('progress-view', {
       data(){
           return {
               completionRate: 50
           }
       }
    });

    new Vue ({
       el: '#app',
        data: {

        },
        methods: {

        }
    });
</script>
</body>
</html>