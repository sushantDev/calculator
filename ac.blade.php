<div id='app'>
    <form>
        <label for="length">Length:</label>
        <input type="text" id="length" v-model="length">
        <br>
        <label for="breadth">Breadth:</label>
        <input type="text" id="breadth" v-model="breadth">
        <label for="result">Total:</label>
        <input type="text" id="result" v-model="result">
    </form>
</div>

<script src="vue/vue.min.js"></script>
<script>
    new Vue ({
       el: '#app',
        data: {
           length: '',
            breadth: ''
        },
        computed: {
            result: function () {
               return this.length * this.breadth;
            }
        }
    });
</script>