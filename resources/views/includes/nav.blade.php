<!-- header-start -->
<header>
    <div class="header-area ">
        <div class="header-top_area d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-md-5 ">
                        <div class="header_left">
                            <p>A-Plus Quality Engineering Services & Steel Trust Services</p>
                        </div>
                    </div>
                    <customer-register></customer-register>
                </div>
            </div>
        </div>
        <div class="address_bar d-none d-lg-block">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <router-link to="/" id="logo-main">
{{--                                <img src="{{asset('assets/resourceImages/logo-main.png')}}" alt="xczx">--}}
                                {{--main logo here--}}
                            </router-link>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="address_menu d-flex justify-content-end">
                            <div class="single_address  d-flex">
                                <div class="icon">
                                    <img src="{{asset('assets/img/icon/header-address.svg')}}" alt="">
                                </div>
                                <div class="address_info" id="address">
                                    <h3 class="text-aplus">Address</h3>
                                </div>
                            </div>
                            <div class="single_address d-flex">
                                <div class="icon">
                                    <img src="{{asset('assets/img/icon/headset.svg')}}" alt="">
                                </div>
                                <div class="address_info" id="phone_number">
                                    <h3 class="text-aplus">Call Us</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="white_bg_bar">
                   {{-- <div class="logo">
                        <router-link to="/" id="logo-mini" class="d-none">
                            --}}{{--logo mini is placed here--}}{{--
                        </router-link>
                    </div>--}}
                    <div class="row align-items-center justify-content-center">
                        <div class="col-12">
                            <div class="logo ">
                                {{--<router-link to="/" id="logo-mini">

                                </router-link>--}}
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 justify-content-center">

                            @include('includes.navbar')
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->
@section('script')
    <script>
        $('document').ready(() => {
            axios
                .get('/info')
                .then(response => {
                    let info = response.data;
                    let logo_mini = info['logo_mini'];
                    let logo_main = info['logo_main'];
                    document.getElementById("address").innerHTML +=

                        "<p>"+info['address']+"</p>";
                    document.getElementById("phone_number").innerHTML +=

                        "<p>"+info['phone_number']+"</p>";

                    document.getElementById("logo-main").innerHTML +=

                        "<img src=\"" + logo_main + "\" alt=\"\">";

                    document.getElementById("logo-mini").innerHTML +=

                        "<img src=\"" + logo_mini + "\" alt=\"\">";

                }).catch(error => {
               console.log(error.data);
            });
        })


    </script>
@endsection
