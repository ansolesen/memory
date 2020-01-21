<template>
    <div class="card">
        <div class="card-header">Game</div>

        <div class="card-body flex center">
            <div>

                <div class="flex -mx-4">
                    <card @select="updateSelection"></card>
                    <card @select="updateSelection"></card>
                    <card @select="updateSelection"></card>
                    <card @select="updateSelection"></card>

                </div>
                <div class="flex -mx-4">
                    <card @select="updateSelection"></card>
                    <card @select="updateSelection"></card>
                    <card @select="updateSelection"></card>
                    <card @select="updateSelection"></card>

                </div>

                <div class="flex -mx-4">
                    <card @select="updateSelection"></card>
                    <card @select="updateSelection"></card>
                    <card @select="updateSelection"></card>
                    <card @select="updateSelection"></card>

                </div>
                <div class="flex -mx-4">
                    <card @select="updateSelection"></card>
                    <card @select="updateSelection"></card>
                    <card @select="updateSelection"></card>
                    <card @select="updateSelection"></card>
                </div>
            </div>

        </div>
        <button class="btn btn-primary">Send</button>
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
                selection: [],
            }
        },
        methods: {
            updateSelection(ref) {
                this.clearActive();
            },
            clearActive() {

            }
        }
    }
</script>