<template>
    <div class="bg-green-300 border-l-4 border-green-700 text-orange-700 p-4 alertbtn" v-show="show" role="alert">
        <p class="font-bold">Succes</p>
        <p>{{body}}</p>
    </div>
</template>

<script>
    export default {

        props: ['message'],
        data() {
        return {

           body:'',
           show: false
        }
        },
        created() {
            if(this.message){
                this.flash(this.message);
            }
            window.events.$on('flash', message => {
                this.flash(message)
            });
        },

        methods: {
            flash(message) {
                this.body = message;
                this.show = true;
                this.hide();
            },
            hide() {
                setTimeout(() => {
                    this.show = false;
                }, 3000);
            }
        }
    }
</script>

<style>
    .alertbtn{
        position: fixed;
        right: 25px;
        bottom: 25px;
    }
</style>
