<template>
    <div @click="activeCard" class="flex center middle w-32 h-32 m-2 border-black border-2 cursor-pointer" :class="{'bg-purple-500' : active}">
        ?
    </div>
</template>

<script>
    export default {
        data() {
            return {
                active: false
            }
        },
        methods: {
            activeCard() {
                this.active = !this.active
                this.$emit('select', this)
            }
        }
    }
</script>