<template>
    <div class="col-xl-7 col-md-7">
        <div class="header_right d-flex justify-content-end">
            <a @click="openForm" href="#" class="boxed-btn3 bg-aplus">Become a Customer</a>
        </div>



    </div>
</template>

<script>

    export default {
        name: "CustomerRegister",
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
