<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center text-white bg-aplus h4">Manage Company Information</div>
                    <div class="card-body">
                       <div class="row">
                           <div class="col-md-4">
                               <div class="card">
                                   <div class="card-header text-center">About Us </div>
                                   <div class="card-body justify-content-center">
                                       <b-form @submit.prevent="submitAbout" @reset="onReset">
                                           <b-form-group
                                               id="about-group-1"
                                               label="Mission:"
                                               label-for="mission"
                                           >
                                               <b-form-textarea
                                                   id="mission"
                                                   v-model="aboutForm.mission"
                                                   type="text"
                                                   required
                                                   placeholder="Mission Statement"
                                               ></b-form-textarea>
                                           </b-form-group>

                                           <b-form-group id="about-group-2" label="Vision:" label-for="vision">
                                               <b-form-textarea
                                                   id="vision"
                                                   v-model="aboutForm.vision"
                                                   required
                                                   placeholder="Vision Statement"
                                               ></b-form-textarea>
                                           </b-form-group>

                                           <b-form-group id="about-group-3" label="About:" label-for="about">
                                               <b-form-textarea
                                                   id="about"
                                                   v-model="aboutForm.about"
                                                   required
                                                   placeholder="About Info"
                                               ></b-form-textarea>
                                           </b-form-group>

                                           <b-button type="reset" variant="danger">Reset</b-button>
                                           <b-button type="submit" variant="success" class="bg-aplus">Submit</b-button>
                                       </b-form>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="card">
                                   <div class="card-header text-center">Contact Info</div>
                                   <div class="card-body justify-content-center">
                                       <b-form @submit.prevent="submitContact" @reset="onReset">
                                           <b-form-group
                                               id="contact-group-1"
                                               label="Phone Number:"
                                               label-for="phone_number"
                                           >
                                               <b-form-input
                                                   id="phone_number"
                                                   v-model="myform.phone_number"
                                                   type="text"
                                                   required
                                                   placeholder="Phone Number"
                                               ></b-form-input>
                                           </b-form-group>

                                           <b-form-group id="contact-group-2" label="Address:" label-for="address">
                                               <b-form-input
                                                   id="address"
                                                   v-model="myform.address"
                                                   type="text"
                                                   required
                                                   placeholder="Digital Address"
                                                   description="GhanaPost Digital Address"
                                               ></b-form-input>
                                           </b-form-group>
                                           <b-button type="reset" variant="danger">Reset</b-button>
                                           <b-button type="submit" variant="success" class="bg-aplus">Submit</b-button>
                                       </b-form>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="card">
                                   <h3 class="text-center">Logo Images</h3>
                                   <div class="row">
                                       <div class="col-md-12">
                                           <div class="img-holder">
                                               <img :src="this.contact.logo_main" width="auto" height="auto" alt="user" class="img-square">
                                               <button class="btn btn-sm float-right" @click="logoModal('logo_main')" title="Edit This Picture"><span class="fas fa-camera"></span></button>
                                           </div>
                                       </div>
                                       <hr>

                                       <div class="col-md-12">
                                           <div class="img-holder">
                                               <img :src="this.contact.logo_mini" width="auto" height="auto" alt="user" class="img-square">
                                               <button class="btn btn-sm float-right" @click="logoModal('logo_mini')" title="Edit This Picture"><span class="fas fa-camera"></span></button>
                                           </div>

                                       </div>
                                       <hr>

                                       <div class="col-md-12">
                                           <div class="img-holder">
                                               <img :src="this.contact.logo_pg" width="auto" height="auto" alt="user" class="img-square">
                                               <button class="btn btn-sm float-right" @click="logoModal('logo_pg')" title="Edit This Picture"><span class="fas fa-camera"></span></button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <div class="card-title">Sliders</div>
                                        <div class="card-tools">
                                            <button class="btn btn-success bg-aplus" @click="newModal">Add New Slider <span class="fas fa-plus"></span></button>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr v-for="slider in sliders" :key="slider.id">
                                                <td>{{slider.id}}</td>
                                                <td>{{slider.title}}</td>
                                                <td>{{slider.description}}</td>
                                                <td>
                                                    <img :src="slider.image" alt="slider" class="img-thumbnail" height="auto" width="200px">
                                                </td>
                                                <td>
                                                    <a href="#" @click="editModal(slider)">
                                                        <i class="fas fa-edit blue"></i>
                                                    </a>
                                                    /
                                                    <a href="#" >
                                                        <i class="fas fa-trash red"></i>
                                                    </a>
                                                   <!-- <button class="btn btn-warning" data-toggle="modal" data-target="" title="Edit This Slider"><span class="fas fa-edit"></span></button>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="" title="Remove This Slider"><span class="fas fa-trash"></span></button>
                                                -->
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal" id="newSliderModal" tabindex="-1" role="dialog" aria-labelledby="newSliderModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 v-show="!editMode" class="modal-title">Add Slider</h5>
                        <h5 v-show="editMode" class="modal-title">Edit Slider</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="editMode ? editSliders() : createSlider()">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input v-model="newSlider.title" type="text" name="title" class="form-control" required>
                                <span class="help is-danger fade-in" v-if="errors.title">{{errors.title[0]}}</span>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input v-model="newSlider.description" type="text" name="description" class="form-control" required>
                                <span class="help is-danger fade-in" v-if="errors.title">{{errors.description[0]}}</span>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input @change="sliderSelected" id="image" type="file" name="image" ref="image" accept="image/*"  class="form-control">
                            </div>
                            <div>
                                <img :src="this.slider_file" class="uploading-image img-thumbnail" height="128" alt="Preview" />
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button v-show="!editMode" type="submit" class="btn btn-success bg-aplus">Create<i class="fas fa-upload"></i></button>
                            <button v-show="editMode" type="submit" class="btn btn-primary">Update<i class="fas fa-upload"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal" id="newLogoModal" tabindex="-1" role="dialog" aria-labelledby="newLogoModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title">Edit {{this.logoType}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="updateLogo">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Image</label>
                                <input @change="logoSelected" id="logoImage" type="file" name="image" ref="image" accept="image/*"  class="form-control">
                            </div>
                            <div>
                                <img :src="this.logo_file" class="uploading-image img-thumbnail" height="128" alt="Preview" />
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update<i class="fas fa-upload"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Info",
        components: {},
        data(){
            return{
                logoType: null,
                editMode: false,
                info:{},
                about: {},
                contact: {},
                sliders: {},
                slider:'',
                aboutForm: new Form({
                    mission: '',
                    vision: '',
                    about: ''
                }),

                myform: new Form({
                    phone_number: '',
                    address: ''
                }),
                newSlider:{
                    id:'',
                    title:'',
                    description:'',
                },
                editSlider: new FormData(),

                sliderImage: null,
                logoImage: null,
                errors: [],
                slider_file:'',
                logo_file:'',
                form: new Form({
                    title:'',
                    description:'',
                }),

            }
        },
        methods:{

            newModal(){
                this.sliderImage = null;
                this.editMode = false;
                $('#newSliderModal').modal('show');
                this.newSlider.title = '';
                this.newSlider.description = '';
                this.slider_file = null;
            },
            editModal(slider){
                this.sliderImage = null;
                 this.editMode = true;
                 $('#newSliderModal').modal('show');
                this.newSlider.id = slider.id;
                this.newSlider.title = slider.title;
                this.newSlider.description = slider.description;
                this.slider_file = slider.image;
            },

            getInfo(){

                axios
                    .get('/admin/get-info')
                    .then((response) => {

                        this.info = response.data;
                        this.contact = this.info.contact;
                        this.sliders = this.info.slider;
                        this.myform.fill(this.contact);
                        this.aboutForm.fill(this.info.about);
                        console.log(this.info);
                    }).catch((error) => {

                    this.error = error.data.message || error.message;
                });
            },
            submitAbout(){
                this.$Progress.start();
                this.aboutForm.put('/admin/set-about')
                    .then((response) => {
                        Fire.$emit('dataUpdate');
                       if(response.data === 'success'){
                           Swal.fire(
                               'Update',
                               'Data Updated Successfully',
                               'success'
                           );
                       }
                       else{
                           Swal.fire(
                               'Update',
                               response.data,
                               'warning'
                           );
                       }
                        this.$Progress.finish();
                    })
                    .catch((error) => {
                        console.log(error.message);
                    });
            },
            submitContact(){
                this.$Progress.start();
                this.myform.put('/admin/set-info')
                    .then((response) => {
                        Fire.$emit('dataUpdate');
                        if(response.data === 'success'){
                            Swal.fire(
                                'Update',
                                'Data Updated Successfully',
                                'success'
                            );
                        }
                        else{
                            Swal.fire(
                                'Update',
                                response.data,
                                'warning'
                            );
                        }
                        this.$Progress.finish();
                    })
                    .catch((error) => {
                        console.log(error.message);
                    });
            },
            onReset(){},
            sliderSelected(event){
                this.sliderImage = event.target.files[0];
                const reader = new FileReader();
                reader.readAsDataURL(this.sliderImage);
                reader.onload = event =>{
                    this.slider_file = event.target.result;
                    }
            },

            //create new slider
            createSlider(){

                const mySlider = new FormData();
                mySlider.append('image', this.sliderImage);
                mySlider.append('title', this.newSlider.title);
                mySlider.append('description', this.newSlider.description);

                //Make the request to the POST /single-file URL
                axios.post( '/slider',
                    mySlider,
                    {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    },
                    this.$Progress.start()
                ).then((response) => {
                    if(response.data === 'success'){
                        Fire.$emit('dataUpdate');
                        swal.fire(
                            'Success',
                            'Data Submitted Successfully',
                            'success'
                        );
                    }
                    else{
                        Swal.fire(
                            'Warning',
                            response.data,
                            'warning'
                        );
                    }
                    this.$Progress.finish();

                })
                    .catch((error) => {
                        this.errors = error.response.data || error.data;
                    });
                $('#newSliderModal').modal('hide');

            },
            //edit existing slider
            editSliders(){

                const imgSlider = new FormData();
                imgSlider.append('image', this.sliderImage);
                this.form.fill(this.newSlider);

                //Make the request to the POST /single-file URL
                axios.put( '/slider/'+this.newSlider.id,
                    this.form,
                    this.$Progress.start()
                ).then((response) => {
                    console.log(response.data);
                    if(response.data === 'success'){
                        if(this.sliderImage !== null){
                            axios.post('/slider/image/'+this.newSlider.id,
                                imgSlider,
                                {
                                    headers: {
                                        'Content-Type': 'multipart/form-data'
                                    }
                                }).then((response) => {
                                if(response.data === 'success'){
                                    Fire.$emit('dataUpdate');
                                    Swal.fire(
                                        'Success',
                                        'Image And Data Updated Successfully',
                                        'success'
                                    );
                                }
                                else{
                                    Fire.$emit('dataUpdate');
                                    Swal.fire(
                                        'Warning',
                                        'Data Updated Successfully But ' + response.data,
                                        'warning'
                                    );
                                }
                            }).catch();
                        }
                        else{
                            Fire.$emit('dataUpdate');
                            Swal.fire(
                                'Success',
                                'Data Updated Successfully',
                                'success'
                            );
                        }

                    }
                    else{
                        Swal.fire(
                            'Warning',
                            response.data,
                            'warning'
                        );
                    }
                    Fire.$emit('dataUpdate');
                    this.$Progress.finish();

                })
                    .catch((error) => {
                        this.errors = error.response.data || error.data;
                    });
                $('#newSliderModal').modal('hide');

            },

            logoSelected(event){
                console.log(event);
                this.logoImage = event.target.files[0];
                const reader = new FileReader();
                reader.readAsDataURL(this.logoImage);
                reader.onload = event =>{
                    this.logo_file = event.target.result;
                }
            },
            updateLogo(){
                const logoImg = new FormData();
                if(this.logoType === 'logo_pg'){
                    logoImg.append('logo_pg', this.logoImage)
                }
                else if(this.logoType === 'logo_main'){
                    logoImg.append('logo_main', this.logoImage)
                }
                else if(this.logoType === 'logo_mini'){
                    logoImg.append('logo_mini', this.logoImage)
                }

                axios.post('/update-logo', logoImg,
                    {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    },
                ).then((response) => {
                    if(response.data === 'success'){
                        Swal.fire(
                            'Success',
                            'Logo Update Successfully',
                            'success'
                        );
                    }
                }).catch((error) => {
                    console.log(error.data);
                });
            },
            logoModal(logo){
                this.logoImage = null;
                this.logoType = null;
                if(logo === 'logo_pg'){
                    this.logo_file = this.contact.logo_pg;
                    this.logoType = logo;
                }
                else if(logo === 'logo_main'){
                    this.logo_file = this.contact.logo_main;
                    this.logoType = logo;
                }
                else if(logo === 'logo_mini'){
                    this.logo_file = this.contact.logo_mini;
                    this.logoType = logo;
                }

                $('#newLogoModal').modal('show');
            },
        },
        created() {
            this.getInfo();
            Fire.$on('dataUpdate', ()=>{
                this.getInfo();
            });
        }
    }
</script>

<style scoped>

</style>
