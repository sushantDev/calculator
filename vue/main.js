Vue.component('task', {
    template: '<li><slot></slot></li>'
});

Vue.component('sushant', {
   template: '<h1 style="text-weight:1000;padding-left:50px;color:darkslateblue;" class="animated rubberBand"><slot></slot></h1>'
});

Vue.component('task-list', {
   template: '<div><task v-for="task in tasks" v-if="task.completed" v-text="task.description"></task></div>  ',

    data() {
      return {
          tasks: [
              {'description': 'Daami garne ho', completed: true},
              {'description': 'Babbal garne ho', completed: false},
              {'description': 'Awesome garne ho', completed: true},
              {'description': 'Miracle garne ho', completed: false},
              {'description': 'Khatra garne ho', completed: true},
          ]
      }
    }
});

Vue.component('sushant-message', {
    data() {
      return {
          isVisible: true
      }
    },
    props: ['title', 'body'],
    template: ' <article class="message" v-show="isVisible">' +
    '<div class="message-header">' +
    '<p>{{ title }}</p>' +
    '<button @click="isVisible = false" class="delete"></button>' +
    '</div>' +
    '<div class="message-body">' +
    '{{ body }}' +
    '</div>' +
    '</article>'
});


new Vue({
    el: '#app'
}) 