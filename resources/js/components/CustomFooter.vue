<template>
    <!-- footer_start  -->
    <div class="container-fluid">
        <footer class="footer container-fluid">
            <div class="download_brochure">
                <div class="container">
                    <div class="bordered_1px">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="footer_logo">
                                    <a href="#">
                                        <img src="http://127.0.0.1:8005/assets/resourceImages/logo-main.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="download_btn">
                                    <a href="#"> <img src="http://127.0.0.1:8005/assets/img/icon/down.svg" alt=""> Download Brochure</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-lg-3 ">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    About
                                </h3>
                                <p>5th flora, 700/D kings road, green <br> lane New York-1782 <br>
                                    <a href="#">+10 367 826 2567</a> <br>
                                    <a href="#">contact@carpenter.com</a>
                                </p>
                                <p>



                                </p>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-2">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Popular Searches
                                </h3>
                                <ul>
                                    <li><a href="#">Apartment for rent </a></li>
                                    <li><a href="#">Office for rent</a></li>
                                    <li><a href="#"> Apartment for sale</a></li>
                                    <li><a href="#"> Luxuries</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-2 offset-xl-1 offset-lg-1">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Useful Links
                                </h3>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#"> Contact</a></li>
                                    <li><a href="#"> Appointment</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Subscribe
                                </h3>
                                <form action="#" class="newsletter_form">
                                    <input type="text" placeholder="Enter your mail">
                                    <button type="submit" class="bg-aplus">Subscribe</button>
                                </form>
                                <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                    luckily.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;{{this.date}} All rights reserved | This template is made with <i class="fas fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- footer_end  -->
</template>

<script>
    export default {
        name: "CustomFooter",
        data(){
            return{
                date : document.write(new Date().getFullYear()),
            }
        },
        methods:{},
        created() {
        },
    }
</script>

<style scoped>

</style>
