<template>
    <div class="container-fluid">
    <!-- features_area_start -->
    <div class="container">
    <div class="features_area">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-sketch"></i>
                        </div>
                        <h3>Creative Plan & Design</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority have
                            suffered alteration.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-helmet"></i>
                        </div>
                        <h3>Talented Peoples</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority have
                            suffered alteration.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <h3>Modern Tools</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority have
                            suffered alteration.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_area_end -->
        <div class="section-title text-center mb-20 mt-80">
            <h2>Take a look at Some of our awesome projects</h2>
        </div>
    <!-- Projects start-->
        <carousel :margin="20"
                  :autoplay="true"
                  :items="this.proItems"
                  :loop="true"
                  :nav="true"
                  :navText="[`<span class='fas fa-angle-left text-bold h3'></span>`,`<span class='fas fa-angle-right text-bold h3'></span>`]"
                  :dots="false"
        >

            <div>
                <b-card
                    title=""
                    img-src="http://127.0.0.1:8005/assets/img/banner/banner.png"
                    img-alt="Image"
                    img-top
                    tag="article"
                    style=""
                    class="mb-2"
                >
                    <b-card-text>
                        <router-link to='/project/details' class='btn btn-success bg-aplus'>
                            <span class='fas fa-angle-right text-white'></span>
                            <span class='fas fa-angle-right text-white'></span>
                        </router-link>
                    </b-card-text>

                </b-card>
            </div>
            <div>
                <b-card
                    title=""
                    img-src="http://127.0.0.1:8005/assets/img/banner/banner2.png"
                    img-alt="Image"
                    img-top
                    tag="article"
                    style=""
                    class="mb-2"
                >
                    <b-card-text>
                        <router-link to="/project/details" class="btn btn-success bg-aplus">Details <span class="fas fa-angle-right text-white"></span></router-link>
                    </b-card-text>

                </b-card>
            </div>
            <div>
                <b-card
                    title=""
                    img-src="http://127.0.0.1:8005/assets/img/banner/bradcam2.png"
                    img-alt="Image"
                    img-top
                    tag="article"
                    style=""
                    class="mb-2"
                >
                    <b-card-text>
                        <router-link to="/project/details" class="btn btn-success bg-aplus">Details <span class="fas fa-angle-right text-white"></span></router-link>
                    </b-card-text>

                </b-card>
            </div>
            <div>
                <b-card
                    title=""
                    img-src="http://127.0.0.1:8005/assets/img/banner/bradcam3.png"
                    img-alt="Image"
                    img-top
                    tag="article"
                    style=""
                    class="mb-2"
                >
                    <b-card-text>
                        <router-link to="/project/details" class="btn btn-success bg-aplus">Details <span class="fas fa-angle-right text-white"></span></router-link>
                    </b-card-text>

                </b-card>
            </div>
            <div>
                <b-card
                    title=""
                    img-src="http://127.0.0.1:8005/assets/img/banner/contact.png"
                    img-alt="Image"
                    img-top
                    tag="article"
                    style=""
                    class="mb-2"
                >
                    <b-card-text>
                        <router-link to="/project/details" class="btn btn-success bg-aplus">Details <span class="fas fa-angle-right text-white"></span></router-link>
                    </b-card-text>

                </b-card>
            </div>
            <div>
                <b-card
                    title=""
                    img-src="http://127.0.0.1:8005/assets/img/banner/project_details.png"
                    img-alt="Image"
                    img-top
                    tag="article"
                    style=""
                    class="mb-2"
                >
                    <b-card-text>
                        <router-link to="/project/details" class="btn btn-success bg-aplus">Details <span class="fas fa-angle-right text-white"></span></router-link>
                    </b-card-text>

                </b-card>
            </div>

        </carousel>
        <div class="row justify-content-center mb-20 mt-0">
            <router-link to="/project" class="btn btn-success bg-aplus form-control">More Projects</router-link>
        </div>
        <br>
    <!-- Projects end-->
        <div class="section-title text-center mb-20 mt-80">
            <h2>Latest News</h2>
        </div>
    <!-- News start-->
        <carousel :margin="20"
                  :autoplay="true"
                  :items="this.newsItems"
                  :loop="true"
                  :nav="true"
                  :navText="[`<span class='fas fa-angle-left text-bold h3'></span>`,`<span class='fas fa-angle-right text-bold h3'></span>`]"
                  :dots="false"
        >

            <div>
                <b-card
                    title="Card Title"
                    img-src="http://127.0.0.1:8005/assets/img/banner/banner.png"
                    img-alt="Image"
                    img-top
                    tag="article"
                    style=""
                    class="mb-2"
                >
                    <b-card-text>
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </b-card-text>

                </b-card>
            </div>
            <div>
                <b-card
                    title="Card Title"
                    img-src="http://127.0.0.1:8005/assets/img/banner/banner2.png"
                    img-alt="Image"
                    img-top
                    tag="article"
                    style=""
                    class="mb-2"
                >
                    <b-card-text>
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </b-card-text>

                </b-card>
            </div>
            <div>
                <b-card
                    title="Card Title"
                    img-src="http://127.0.0.1:8005/assets/img/banner/bradcam2.png"
                    img-alt="Image"
                    img-top
                    tag="article"
                    style=""
                    class="mb-2"
                >
                    <b-card-text>
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </b-card-text>

                </b-card>
            </div>
            <div>
                <b-card
                    title="Card Title"
                    img-src="http://127.0.0.1:8005/assets/img/banner/bradcam3.png"
                    img-alt="Image"
                    img-top
                    tag="article"
                    style=""
                    class="mb-2"
                >
                    <b-card-text>
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </b-card-text>

                </b-card>
            </div>
            <div>
                <b-card
                    title="Card Title"
                    img-src="http://127.0.0.1:8005/assets/img/banner/contact.png"
                    img-alt="Image"
                    img-top
                    tag="article"
                    style=""
                    class="mb-2"
                >
                    <b-card-text>
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </b-card-text>

                </b-card>
            </div>
            <div>
                <b-card
                    title="Card Title"
                    img-src="http://127.0.0.1:8005/assets/img/banner/project_details.png"
                    img-alt="Image"
                    img-top
                    tag="article"
                    style=""
                    class="mb-2"
                >
                    <b-card-text>
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </b-card-text>

                </b-card>
            </div>




        </carousel>
        <div class="row justify-content-center mb-20 mt-0">
            <router-link to="/news" class="btn btn-success bg-aplus form-control">More News</router-link>
        </div>
        <br>
    <!-- News end-->
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="about_thumb" style="position: relative">
                    <img src="http://127.0.0.1:8005/assets/img/about/about.png" alt="" width="490">
                    <div class="pattern_img d-none d-lg-block">
                        <img src="http://127.0.0.1:8005/assets/img/pattern/pattern.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="about_info">
                    <h3>We Serve all of your <br>
                        Construction Services</h3>
                    <p class="first_para"> “Construction is a full service construction company offering
                        building solutions from start to finish. Our staff has been operating on NYC for ten
                        years.</p>
                    <p>There are many variations of passages of lorem Ipsum available, but the majority have
                        suffered alteration in some form, by injected humour, or randomised words which don't
                        look even slightly believable.</p>
                    <router-link to="/about" class="boxed-btn3 bg-aplus">About Us</router-link>
                </div>            </div>
        </div>
    </div>
        <!--container ends here-->
        <!--testtimonials-->
        <div class="testimonial_area ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-55">
                            <h3>Testimonials</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">

                        <carousel :margin="20"
                                  :autoplay="true"
                                  :items="1"
                                  :loop="true"
                                  :nav="true"
                                  :navText="[`<span class='fas fa-angle-left text-bold h3'></span>`,`<span class='fas fa-angle-right text-bold h3'></span>`]"
                                  :dots="false"
                        >

                            <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                            <img src="http://127.0.0.1:8005/assets/img/testimonial/1.png" alt="" class="img-circle" width="68" height="68">
                                        </div>
                                        <h4>Jordan Adams</h4>
                                        <span>Client</span>
                                    </div>
                                    <p>“Our program is guided by the developmental milestones which embrace <br>
                                        the six most important learning domains in education”</p>
                                </div>
                            </div>



                        </carousel>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-20 mt-0">
            <router-link to="/news" class="btn btn-success bg-aplus">Add A Testimony</router-link>
        </div>
        <!-- contact_us_start  -->
        <div class="contact_us overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <div class="contact_text">
                            <h3>Are you looking for a Construction
                                and Industrial Experts?</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="contact_btn">
                            <router-link class="boxed-btn3 bg-aplus" to="/contact-us">Contact Us</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact_us_end -->

    </div>
</template>

<script>
    import carousel from 'vue-owl-carousel';
    export default {
        name: 'Welcome',
        components: { carousel },
        data(){
            return{
                proItems: 3,
                newsItems: 3,
            }
        },
        methods:{
                makeChange(){
                    if(this.$mq === "sm" ){
                        this.proItems = 1;
                        this.newsItems = 1;
                        console.log("Yes");
                    }
                    else{
                        this.proItems = 3;
                        this.newsItems = 3;
                    }
                }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created(){
                this.makeChange();
                window.addEventListener('resize', (e) => {
                  this.makeChange();
                })

        }
    }
</script>
<style lang="scss" scoped>
    .contact_us{
        background-image: url("/assets/img/banner/contact.png");
    }
</style>
