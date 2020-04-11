<template>
    <div class="slider_area">

        <b-carousel
            id="carousel-fade"
            style="color: #ffffff !important"
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
