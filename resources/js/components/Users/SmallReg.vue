<template>
    <div class="col-sm-2">

            <a @click="openForm" href="#" class="boxed-btn2 bg-aplus">Become a Customer</a>

    </div>
</template>

<script>

    export default {
        name: "SmallReg",
        data(){
            return{}
        },
        methods:{
            openForm(){
                Fire.$emit('openRegisterForm');
            }
        },
        created() {
        }
    }
</script>

<style scoped>

</style>
