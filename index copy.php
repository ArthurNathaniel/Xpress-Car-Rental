<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Ogazy Car Rental</title>
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
                <button>
                    <a href="">MAKE A RESERVATION</a>
                </button>
            </div>
        </div>
        <div class="hero_cars_slide">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./images/car-slide-1.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/car-slide-1.png" alt="">
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
                <?php include'booking.php'?>
                <!-- <form action="">
                    <div class="forms_all">
                        <div class="forms_title">
                            <h1>Ogazy CAR RENTAL</h1>
                        </div>
                        <div class="forms">
                            <label>Pick Up Location:</label>
                            <select name="pickup" id="pickup" required>
                                <option value="Office">Main Office</option>
                                <option value="Ypur_Location">Your Location</option>
                            </select>
                        </div>
                        <div class="forms">
                            <label>Pickup Date:</label>
                            <input type="date" placeholder="Select Pickup Date" required />
                        </div>
                        <div class="forms">
                            <label>Return Date:</label>
                            <input type="date" placeholder="Select Return Date" required />
                        </div>
                        <div class="forms">
                            <label>Available Cars:</label>
                            <select name="car" id="cars" required>
                                <option value="camry">Camry</option>
                                <option value="vitz">Vitz</option>
                            </select>
                        </div>
                        <div class="forms">
                            <button type="submit">make a reservation</button>
                        </div>
                    </div>
                </form> -->
            </div>
            <div class="about_us_all">
                <div class="about_text">
                    <h4>About us - <span>Ogazy Car Rentals</span></h4>
                    <h1>We are Providing Best Car Rental Services</h1>
                </div>
                <div class="about_p">
                    <p>
                        Welcome to Ogazy Car Rental, your premier destination for reliable and affordable vehicle rentals. At Ogazy, we pride ourselves on offering top-notch customer service and a wide selection of vehicles to meet your transportation needs. </p>
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
                        <a href="#">Read more</a>
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
                    <div class="explore_car_image">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Honda Accord 5 Seater Car</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1000 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">
                            <div class="transmission">
                                <p>20K</p>
                            </div>
                            <div class="transmission">
                                <p>Auto</p>
                            </div>
                            <div class="transmission">
                                <p>Petrol</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="#">MAKE RESERVATION</a>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="explore_card">
                    <div class="explore_car_image">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Honda Accord 5 Seater Car</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1000 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">
                            <div class="transmission">
                                <p>20K</p>
                            </div>
                            <div class="transmission">
                                <p>Auto</p>
                            </div>
                            <div class="transmission">
                                <p>Petrol</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="#">MAKE RESERVATION</a>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="explore_card">
                    <div class="explore_car_image">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Honda Accord 5 Seater Car</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1000 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">
                            <div class="transmission">
                                <p>20K</p>
                            </div>
                            <div class="transmission">
                                <p>Auto</p>
                            </div>
                            <div class="transmission">
                                <p>Petrol</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="#">MAKE RESERVATION</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="explore_card">
                    <div class="explore_car_image">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Honda Accord 5 Seater Car</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1000 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">
                            <div class="transmission">
                                <p>20K</p>
                            </div>
                            <div class="transmission">
                                <p>Auto</p>
                            </div>
                            <div class="transmission">
                                <p>Petrol</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="#">MAKE RESERVATION</a>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="explore_card">
                    <div class="explore_car_image">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Honda Accord 5 Seater Car</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1000 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">
                            <div class="transmission">
                                <p>20K</p>
                            </div>
                            <div class="transmission">
                                <p>Auto</p>
                            </div>
                            <div class="transmission">
                                <p>Petrol</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="#">MAKE RESERVATION</a>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="explore_card">
                    <div class="explore_car_image">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Honda Accord 5 Seater Car</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1000 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">
                            <div class="transmission">
                                <p>20K</p>
                            </div>
                            <div class="transmission">
                                <p>Auto</p>
                            </div>
                            <div class="transmission">
                                <p>Petrol</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="#">MAKE RESERVATION</a>
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
                                    <h4>Nathaniel Arthur</h4>
                                </div>
                                <div class="message">
                                    Dynamically unleash market positioning convergence for scalable infrastructure Rapidly virtual infrastructures rather than market-driven items. without resourceleveling process improvement.
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial_box">
                                <div class="name">
                                    <h4>Nathaniel Arthur</h4>
                                </div>
                                <div class="message">
                                    Dynamically unleash market positioning convergence for scalable infrastructure Rapidly virtual infrastructures rather than market-driven items. without resourceleveling process improvement.
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="testimonial_box">
                                <div class="name">
                                    <h4>Nathaniel Arthur</h4>
                                </div>
                                <div class="message">
                                    Dynamically unleash market positioning convergence for scalable infrastructure Rapidly virtual infrastructures rather than market-driven items. without resourceleveling process improvement.
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="testimonial_box">
                                <div class="name">
                                    <h4>Nathaniel Arthur</h4>
                                </div>
                                <div class="message">
                                    Dynamically unleash market positioning convergence for scalable infrastructure Rapidly virtual infrastructures rather than market-driven items. without resourceleveling process improvement.
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
                <h1>WHY CHOOSE US - Ogazy CAR RENTALS</h1>
                <p>
                    Dynamically unleash market positioning convergence for scalable infrastructure Rapidly virtual infrastructures rather than market-driven items. without resourceleveling process improvement.
                    Dynamically unleash market positioning convergence for scalable infrastructure Rapidly virtual infrastructures rather than market-driven items. without resourceleveling process improvement.

                </p>
                <p>
                    Dynamically unleash market positioning convergence for scalable infrastructure Rapidly virtual infrastructures rather than market-driven items. without resourceleveling process improvement.
                    Dynamically unleash market positioning convergence for scalable infrastructure Rapidly virtual infrastructures rather than market-driven items. without resourceleveling process improvement.

                </p>
            </div>
            <div class="why_images">

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
                    <p>info@Ogazycarrental.com</p>
                </div>
                <div class="box">
                    <h1>Location</h1>
                    <p>Asafo, Near Ahmadiyya Mosque</p>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8115589.631767379!2d-11.3674878!3d6.6852385!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb970a7421c4ef%3A0x7a3c86745ca8b5ba!2sOgazy%20Car%20Rental!5e0!3m2!1sen!2sgh!4v1710518362733!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <?php include 'footer.php' ?>
    <script src="./js/testimonial.js"></script>
    <script src="./js/swiper.js"></script>
    <script src="./js/navbar.js"></script>
</body>

</html>