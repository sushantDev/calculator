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
        <button type="button" class="button is-small" @click="makeVisible">click me!!</button>
        <modal v-if="isVisible" @close="isVisible = false">
            <template slot="header">My Title</template>
            <template slot="content">My name is sushant</template>
            <template slot="footer">
                <a class="button is-success">Save changes</a>
                <a class="button" @click="isVisible = false">Cancel</a>
            </template>
        </modal>
    </div>

<script src="vue/vue.js"></script>
<script>
    Vue.component('modal', {
       template: `
            <div class="modal is-active">
              <div class="modal-background"></div>
              <div class="modal-card">
                <header class="modal-card-head">
                     <p class="modal-card-title"><slot name="header"></slot></p>
                     <button class="delete" @click="$emit('close')"></button>
                </header>
                <section class="modal-card-body">
                    <slot name="content"></slot>
                </section>
                <footer class="modal-card-foot">
                    <slot name="footer">
                        <a class="button is-success">Default button</a>
                    </slot>
                </footer>
              </div>
            </div>
       `
    });

    new Vue ({
        el:'#app',
        data: {
            isVisible: false
        },
        methods: {
            makeVisible(){
                this.isVisible = true;
            }
        }
    })
</script>
</body>
</html>