<div id='app'>
    <form>
        <label for="firstNumber">Length: </label>
        <input type="text" id="firstNumber" v-model="firstNumber">
        <br/>
        <label for="secondNumber">Breadth: </label>
        <input type="text" id="secondNumber" v-model="secondNumber">
        <br/>
        <label for="thirdNumber">Height: </label>
        <input type="text" id="thirdNumber" v-model="thirdNumber">
        <br/>
        <label for="result">Total: </label>
        <input type="text" id="result" v-model="result">
    </form>
</div>

<script src="vue/vue.min.js"></script>

<script>
    new Vue({
        el:'#app',
        data : {
            firstNumber : '',
            secondNumber: '',
            thirdNumber: ''
        },
        computed: {
            result: function(){
                return this.firstNumber * this.secondNumber * this.thirdNumber;
            }
        }
    });
</script>