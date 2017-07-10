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

        <button :disabled="change" @click="onChange"> Click me to Disable </button>
        <button @click="resetDisable">Reset Disable</button>

        <h1>All Tasks</h1>
        <ul>
            <li v-for="task in tasks" v-text="task.description"></li>
        </ul>

        <h1>Incompleted Tasks</h1>
        <ul>
            <li v-for="task in incompletedTasks" v-text="task.description"></li>
        </ul>

        <h1>completed Tasks</h1>
        <ul>
            <li v-for="task in completedTasks" v-text="task.description"></li>
        </ul>
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
            change: false,
            tasks: [
                {description: 'go to store', completed: true },
                {description: 'Finish screencast', completed: false},
                {description: 'Make Donation', completed: false},
                {description: 'Clear inbox', completed: false},
                {description: 'Make dinner', completed: true},
                {description: 'Clean room', completed: true},
            ]
        },
        methods : {
            addName () {
                this.names.push(this.newName);
                this.newName = '';
            },
            onChange () {
                this.change = true;
                this.className = 'colour-blue'
            },
            resetDisable () {
                this.change = false;
                this.className = 'colour-red'
            }
        },
        computed: {
           incompletedTasks: function (){
                return this.tasks.filter(tasks => ! tasks.completed);
            },
            completedTasks: function (){
               return this.tasks.filter(tasks => tasks.completed);
            }
        }
    });
</script>