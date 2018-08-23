<template>
    <tr>
        <td>{{ task.id }}</td>
        <td>{{ task.title }}</td>
        <td>{{ task.priority }}</td>
        <td><button class="btn btn-danger" v-on:click="remove">Delete</button></td>
    </tr>
</template>

<script>
    export default {
        props: ['task'],
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            remove(){
                this.$emit('delete', this.task.id)

            }
        }
    }
</script>
