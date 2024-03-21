<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Xpress Car Rental - Your reliable car rental service located at Asafo, Near Ahmadiyya Mosque. Explore our wide range of vehicles for rent.">
    <meta name="keywords" content="car rental, Xpress Car Rental, vehicle rental, Asafo, Ahmadiyya Mosque">
    <meta name="author" content="Xpress Car Rental">
    <title>Home - Xpress Car Rental</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="hero_all">
        <div class="hero_text">
            <div class="hero_top">
                <p>Car Rental Service</p>
            </div>
            <div class="hero_middle">
                <h1>Rent The Best Quality Car's With Us </h1>
            </div>
            <div class="hero_bottom">
                <a href="reservation.php">
                    <button>
                        MAKE A RESERVATION
                    </button>
                </a>
            </div>
        </div>
        <div class="hero_cars_slide">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./images/crv-black.jpeg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/crv-white.jpeg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/c-300.jpeg" alt="">
                    </div>
                </div>

                <div class="swiper-pagination"></div>
                <div class="autoplay-progress">
                    <svg viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="20"></circle>
                    </svg>
                    <span></span>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="reservation_boking_all">
            <div class="reservation_bg">
                <?php include 'booking.php' ?>
            </div>

            <div class="about_us_all">
                <div class="about_text">
                    <h4>About us - <span>Xpress Car Rentals</span></h4>
                    <h1>We are Providing Best Car Rental Services</h1>
                </div>
                <div class="about_p">
                    <p>
                        Welcome to Xpress Car Rental, your premier destination for reliable and affordable vehicle rentals. At Xpress, we pride ourselves on offering top-notch customer service and a wide selection of vehicles to meet your transportation needs. </p>
                </div>
                <div class="about_p">
                    <p>
                        With our convenient online booking system, you can easily reserve the perfect car for your next adventure or business trip. Whether you're looking for a compact car for city exploration, a spacious SUV for a family vacation, or a sleek luxury vehicle for a special occasion, we have the right ride for you. </p>
                </div>
                <div class="about_p">
                    <p>
                        Our fleet is regularly serviced and meticulously maintained to ensure your safety and comfort on the road. Plus, we offer flexible rental terms and competitive rates to fit any budget. </p>
                </div>
                <div class="about_btn">
                    <button>
                        <a href="about.php">Read more</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="explore_our_cars_all">
            <div class="explore_title">
                <h1>VEHICLE CATEGORIES</h1>
            </div>
            <div class="explore_grid">
                <div class="explore_card">
                    <div class="explore_car_image" style="background-image: url(./images/crv-black.jpeg);">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Honda CR-V Touring 2018</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1000 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">

                            <div class="transmission">
                                <p>Automatic</p>
                            </div>
                            <div class="transmission">
                                <p>Black</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="reservation.php">MAKE RESERVATION</a>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="explore_card">
                    <div class="explore_car_image" style="background-image: url(./images/crv-white.jpeg);">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Honda CR-V Touring 2018</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1000 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">

                            <div class="transmission">
                                <p>Automatic</p>
                            </div>
                            <div class="transmission">
                                <p>White</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="reservation.php">MAKE RESERVATION</a>

                            </button>
                        </div>
                    </div>
                </div>


                <div class="explore_card">
                    <div class="explore_car_image" style="background-image: url(./images/rav-4-ash.jpeg);">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Toyota Rav 4 2010</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 800 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">

                            <div class="transmission">
                                <p>Automatic</p>
                            </div>
                            <div class="transmission">
                                <p>Ash</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="reservation.php">MAKE RESERVATION</a>

                            </button>
                        </div>
                    </div>
                </div>
                <div class="explore_card">
                    <div class="explore_car_image" style="background-image: url(./images/camery-black.jpeg);">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Toyota Camery 2017</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 800 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">

                            <div class="transmission">
                                <p>Automatic</p>
                            </div>
                            <div class="transmission">
                                <p>Black</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="reservation.php">MAKE RESERVATION</a>

                            </button>
                        </div>
                    </div>
                </div>




                <div class="explore_card">
                    <div class="explore_car_image" style="background-image: url(./images/c-300.jpeg);">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Mercedes Benz C-300</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1,200 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">

                            <div class="transmission">
                                <p>Automatic</p>
                            </div>
                            <div class="transmission">
                                <p>Black</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="reservation.php">MAKE RESERVATION</a>

                            </button>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section>
        <div class="testiomonial_all">
            <div class="testimonial_title">
                <h1>What Our Clients Say</h1>
            </div>

            <div class="testimonial_slide">
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <div class="testimonial_box">
                                <div class="name">
                                    <h4>Moses Agyeman</h4>
                                </div>
                                <div class="message">
                                    <p>
                                        Xpress Car Rental made our trip a breeze with their top-notch service and reliable vehicles!" or "Absolutely thrilled with the smooth rental process at Xpress they really go the extra mile for their customers
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial_box">
                                <div class="name">
                                    <h4>Wendy Agudey</h4>
                                </div>
                                <div class="message">
                                    <p>
                                        Choosing Xpress Car Rental was the best decision for our family vacation – affordable rates and exceptional customer care!
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="testimonial_box">
                                <div class="name">
                                    <h4>James Naa</h4>
                                </div>
                                <div class="message">
                                    <p>
                                        Every time with Xpress is a five-star experience. Their cars are always clean and ready to go. Highly recommend!" Hope these inspire you! 🌟
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="testimonial_box">
                                <div class="name">
                                    <h4>Addai Rita</h4>
                                </div>
                                <div class="message">
                                    <p>
                                        Xpress Car Rental never disappoints. Their team is friendly and professional it's the only way I travel now!"
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="why_all">
            <div class="why_text">
                <h1>WHY CHOOSE US - XPRESS CAR RENTALS</h1>
                <p>
                    Xpress Car Rental stands out for its commitment to providing customers with exceptional service and a seamless
                    rental experience. With a wide selection of vehicles ranging from economy cars to luxury SUVs, Xpress Car Rental
                    caters to diverse needs and preferences.Their efficient booking process, transparent pricing, and flexible rental options make them a preferred choice for
                    travelers seeking reliability and convenience.
                </p>
                <p>
                    Moreover, Xpress Car Rental prioritizes customer satisfaction, ensuring that each vehicle
                    is well-maintained and equipped with the latest safety features, providing peace of mind to renters. Whether for business trips or leisure travel, choosing
                    Xpress Car Rental guarantees a stress-free and enjoyable journey.
                </p>
            </div>
            <div class="why_images" style="background-image: url(./images/crv-black.jpeg);">

            </div>
        </div>
    </section>

    <section>
        <div class="contact_all">
            <div class="contact_title">
                <h1>CONTACT US </h1>
            </div>
            <div class="contact_boxes">
                <div class="box">
                    <h1>Call</h1>
                    <p>0209855332 </p>
                    <p>0246046910</p>

                </div>
                <div class="box">
                    <h1>Mail</h1>
                    <p>info@xpresscarrental.com</p>
                </div>
                <div class="box">
                    <h1>Location</h1>
                    <p>Asafo, Near Ahmadiyya Mosque</p>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.6902498864156!2d-1.6116283999999998!3d6.6852385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb970a7421c4ef%3A0x7a3c86745ca8b5ba!2sXpress%20Car%20Rental!5e0!3m2!1sen!2sgh!4v1710843757766!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <?php include 'footer.php' ?>
    <script src="./js/testimonial.js"></script>
    <script src="./js/swiper.js"></script>
    <script src="./js/navbar.js"></script>
</body>

</html>