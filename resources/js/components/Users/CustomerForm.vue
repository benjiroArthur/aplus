<template>
    <div>
    <div class="modal fade" id="newCustomerModal" tabindex="-1" role="dialog" aria-labelledby="newCustomerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newCustomerModalLabel">Customer Registration Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="createCustomer">
                    <div class="modal-body">
                        <div class="form-group">
                        <label>Name</label>
                        <input v-model="form.name" type="text" name="name"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                        <has-error :form="form" field="name"></has-error>
                    </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input v-model="form.email" type="text" name="email"
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                            <has-error :form="form" field="email"></has-error>
                        </div>

                        <div class="form-group">
                            <label>Ghana Post Digital Address</label>
                            <input v-model="form.address" type="text" name="address"
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('address') }">
                            <has-error :form="form" field="address"></has-error>
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input v-model="form.phone_number" type="text" name="phone_number"
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('phone_number') }">
                            <has-error :form="form" field="phone_number"></has-error>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success bg-aplus">Register <i class="fas fa-upload"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        name: "CustomerForm",
        data(){
            return{
                form: new Form({
                    name: '',
                    email: '',
                    address: '',
                    phone_number: ''
                }),
            }
        },
        methods:{
            createCustomer(){
                axios.post('/customer', this.form)
                     .then((response) => {
                         let data = response.data;
                         let name = data.name;
                         let names = name.split(" ");
                         let fname = names[0];

                         $('#newCustomerModal').modal('hide');

                         Swal.fire({
                             toast: true,
                             position: 'top-end',
                             showConfirmButton: false,
                             timer: 10000,
                             timerProgressBar: true,
                             onOpen: (toast) => {
                                 toast.addEventListener('mouseenter', Swal.stopTimer);
                                 toast.addEventListener('mouseleave', Swal.resumeTimer);},
                             icon: 'success',
                             title: 'Hi  ' + fname + '  Welcome! Your Are Now Our Proud Customer'
                         });

                     })
                     .catch((response) => {
                         console.log(response.error);
                     });
            }
        },
        created() {
            Fire.$on('openRegisterForm', () => {
                $('#newCustomerModal').modal('show');
            })
        }
    }
</script>

<style scoped>

</style>
