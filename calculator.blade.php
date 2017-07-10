<html class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.25/css/uikit.min.css" />
</head>
<body>
    <div id='app'>
        <table class="uk-table uk-table-small uk-table-divider">
            <thead>
            <tr>
                <h1 class="uk-text uk-text-center">Calculator</h1>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="4"><input type="text" id="result" class="uk-input" v-model="result"></td>
            </tr>
            <tr>
                <td><button type="button" class="uk-button uk-button-default" @click="doCalcButton(0)">0</button></td>
                <td><button type="button" class="uk-button uk-button-default" @click="doCalcButton(1)">1</button></td>
                <td><button type="button" class="uk-button uk-button-default" @click="doCalcButton(2)">2</button></td>
                <td><button type="button" class="uk-button uk-button-danger" @click="allClear">C</button></td>
            </tr>
            <tr>
                <td><button type="button" class="uk-button uk-button-default" @click="doCalcButton(3)">3</button></td>
                <td><button type="button" class="uk-button uk-button-default" @click="doCalcButton(4)">4</button></td>
                <td><button type="button" class="uk-button uk-button-default" @click="doCalcButton(5)">5</button></td>
                <td><button type="button" class="uk-button uk-button-secondary" @click="doCalcButton('+')">&plus;</button></td>
            </tr>
            <tr>
                <td><button type="button" class="uk-button uk-button-default" @click="doCalcButton(6)">6</button></td>
                <td><button type="button" class="uk-button uk-button-default" @click="doCalcButton(7)">7</button></td>
                <td><button type="button" class="uk-button uk-button-default" @click="doCalcButton(8)">8</button></td>
                <td><button type="button" class="uk-button uk-button-secondary" @click="doCalcButton('-')">&minus;</button></td>
            </tr>
            <tr>
                <td><button type="button" class="uk-button uk-button-secondary" @click="doCalcButton('/')">&divide;</button></td>
                <td><button type="button" class="uk-button uk-button-default" @click="doCalcButton(9)">9</button></td>
                <td><button type="button" class="uk-button uk-button-secondary" @click="doCalcButton('*')">&times;</button></td>
                <td><button type="button" class="uk-button uk-button-primary" @click="doTotal">=</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.js"></script>
<script>
    new Vue ({
        el: '#app',
        data: {
            data: 0,
            total : 0
        },
        methods: {
            doCalcButton(input){
                this.data = input;
                this.data += input;
                this.data += input;
                this.total = eval(this.data);
                return this.total;
            },
            allClear(){
                this.data = 0;
                this.total = 0;
            },
            doTotal(){
                return this.total;
            }
        },
        computed: {
            result : function () {
                return this.total;
            }
        }
    });
</script>
</html>