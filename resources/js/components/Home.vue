<template>
    <div class="card">
        <div class="card-header">Games</div>

        <div class="card-body">
            <ul>

                <li v-for="game in games" class="mb-2">

                        <router-link  :to="'/games/' + game.    id" class="btn btn-primary" type="submit">Join game
                        </router-link>
                </li>

            </ul>
                <button @click="create" class="btn btn-primary">Create Game</button>

        </div>
    </div>
</template>

<script>
    import Card from './Card.vue'

    export default {
        components: {
            Card
        },
        data() {
          return {
              games: [],
              loading: false
          }
        },
        mounted() {
          this.fetch()
        },
        methods: {
            async create() {
                await axios.post('/games');
                this.fetch();
            },
            async fetch() {
                this.loading = true;
                let response = await axios.get('/games');
                this.loading = false;
                this.games = response.data
            }
        }
    }

</script>