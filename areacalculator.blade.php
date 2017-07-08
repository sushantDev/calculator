<html class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area Calculator</title>
</head>
<body>
<div id='app'>
    <form>
        <label for="length"> Length: </label>
        <input type="text" id="length" v-model="length">
        <br>
        <label for="breadth"> Breadth: </label>
        <input type="text" id="breadth" v-model="breadth">
        <br>
        <label for="height"> Height: </label>
        <input type="text" id="height" v-model="height">
        <br>
        <label for="result"></label>
        <input type="text" id="result" v-model="result">
    </form>
</div>
</body>
<script src="vue/vue.min.js"></script>
<script>
    new Vue({
       el:'#app',
       data: {
            length: '',
            breadth: '',
            height: ''
       },
       computed: {
           result: function(){
               return this.length * this.breadth * this.height;
           }
       }
    });
</script>
</html>