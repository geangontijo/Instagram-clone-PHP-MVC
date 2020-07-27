</v-container>
</v-main>

<v-footer app>
    <span>&copy; {{ new Date().getFullYear() }}</span>
</v-footer>
</v-app>
</v-app>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
<script>
    var cabecalhoVue = new Vue({
        el: '#app',
        vuetify: new Vuetify(),
        props: {
            source: String,
        },

        data:{
            dark: true,
            drawer: null,
            items: [
                { icon: 'mdi-newspaper-variant', text: 'Feed de noticias', path:'/feed' },
            ],
        },

    })
</script>