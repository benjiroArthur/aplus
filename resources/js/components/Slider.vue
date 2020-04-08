<template>
    <div class="slider_area">
        <!--<div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>We Build Your Home
                                    Secure and Safe</h3>
                                <p>Build Your Home Secure and Safe with Professional Touch</p>
                                <a href="services.html" class="boxed-btn3">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>We Build Your Home
                                    Secure and Safe</h3>
                                <p>Build Your Home Secure and Safe with Professional Touch</p>
                                <a href="services.html" class="boxed-btn3">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>We Build Your Home
                                    Secure and Safe</h3>
                                <p>Build Your Home Secure and Safe with Professional Touch</p>
                                <a href="services.html" class="boxed-btn3">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
       <!-- <carousel :items='1' :loop='true' :autoplay='true' :nav="false">
                &lt;!&ndash;<div v-for="slide in this.slider" class="d-flex align-items-end banner-height" :style="{backgroundImage: `url(${slide.image})`}">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-9 col-md-9 col-md-12">
                                <div class="slider_text text-center banner-info mb-5 p-3">
                                    <h3 class="text-white test-bold">{{slide.title}}</h3>
                                    <p class="text-white test-bold">{{slide.description}}</p>
                                    <a href="#" class="boxed-btn3 bg-aplus">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>&ndash;&gt;

            &lt;!&ndash;<img v-for="slide in this.slider" :src="slide.image" alt="">&ndash;&gt;


        </carousel>-->

        <b-carousel
            id="carousel-fade"
            style="color: #ffffff"
            cross-fade
            indicators
            controls
            img-height="700"
            v-model="slide"

        >
            <b-carousel-slide
                class="text-white text-bold"
                v-for="slide in this.slider"
                :caption="slide.title"
                :text="slide.description"
                :img-src="slide.image"
                :key="slide.id"
            ></b-carousel-slide>
        </b-carousel>
    </div>
</template>

<script>
    import carousel from 'vue-owl-carousel';
    export default {
        name: "Slider",
        components: {carousel},
        data(){
            return{
               slider:[],
                slide: 0,
                sliding: null
            }
        },
        methods:{
            getSlide(){
                axios
                    .get('/slider')
                    .then(response => {
                        this.slider = response.data;
                    }).catch(error => {
                    console.log(error.data);
                });
            },
            onSlideStart(slide) {
                this.sliding = true
            },
            onSlideEnd(slide) {
                this.sliding = false
            },
        },
        created() {
            this.getSlide();
        }
    }
</script>

<style scoped>

</style>
