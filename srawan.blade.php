<html class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Episode 14</title>
    <link rel="stylesheet" href="css/bulma.css"/>
    <style>
        body {
            padding: 2em;
        }
    </style>
</head>
<body>

<div id="app" class="container">
<button class="button is-small" @click="whoIsSrawanBro">click</button>
</div>

<script src="vue/vue.js"></script>
<script>
    new Vue ({
        el:'#app',
        data: {
            srawan: ''
        },
        methods: {
            whoIsSrawanBro(){
                this.srawan = 'Hancy Bro :)';
                alert(this.srawan);
            }
        }
    });
</script>
</body>
</html>