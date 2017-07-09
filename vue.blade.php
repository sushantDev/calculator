<style type="text/css">
    .colour-red {
        color : red;
    }
    .colour-blue {
        color : blue;
    }
</style>
<body>
    <div id='app'>
        <li v-for="name in names" v-text="name"></li>

        <input type="text" id="input" v-model="newName">
        <button @click="addName">Add Name</button><br>

        <button :title="title">Hover over me!!</button>

        <h1 :class="className">RED COLOUR</h1>

        <button :disabled="change" @click="onChange"> Click me to change colour </button>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.js"></script>
<script>
    const app = new Vue ({
       el: '#app',
        data: {
           newName: '',
           names : ['ram','shyam','hari','sita'],
            title: 'Sushant is a gentleman. :)',
            className: 'colour-red',
            change: false
        },
        methods : {
            addName () {
                this.names.push(this.newName);
                this.newName = '';
            },
            onChange () {
                this.change = true;
            }
        }
    });
</script>