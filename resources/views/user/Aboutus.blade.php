<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .passport-photo {
            border: 1px solid black;
            border-radius: 70%;
        }

        .justified-paragraph {
            text-align: justify;
        }

        .full-width-footer {
            width: 100%;
            background-color: #f8f9fa;
            padding: 20px 0;
        }

        .name {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }
        .description{
            font-size:18px;
        }
       
    </style>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body>
    @include('user.Navbar')
    <br><br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2 data-aos="fade-up" data-aos-duration="1000">About Us</h2>
                <p data-aos="fade-up" data-aos-duration="1000" class="justified-paragraph">We are the students of M.Sc. in Information Technology. As students of this esteemed program during the period of 2023 to 2025, we find ourselves at the forefront of technological innovation and discovery. Within these classroom walls, we embark on a journey of exploration and mastery in the ever-evolving field of IT. Our diverse backgrounds and shared passion for technology converge as we delve into topics ranging from computer language papers to data structures, software testing to network infrastructure. Together, we embrace the challenges and opportunities presented by the digital age, equipping ourselves with the skills and knowledge needed to thrive in an increasingly interconnected world. As we navigate through this academic voyage, we foster collaboration, curiosity, and creativity, ensuring that each step we take brings us closer to becoming the leaders and innovators of tomorrow.</p>
            </div>
            
            <div class="col-md-6 text-center">
                <img data-aos="fade-up" data-aos-duration="1000" src="{{asset('/images/11.jpeg')}}" alt="Image" class="img-fluid">
            </div>
        </div>
         <!-- Finishing symbol image -->
         <div data-aos="fade-up" data-aos-duration="1000" class="text-center mt-1">
            <img src="{{asset('/images/symbol.jpg')}}" alt="Finishing Symbol" style="max-width: 200px;">
        </div>
        <!-- New Section with Image and Content -->
        <div class="row mt-5">
            <div class="col-md-4 text-center">
                <img data-aos="fade-up" data-aos-duration="1000" src="{{asset('/images/bernald.jpg')}}" alt="Left Image" class="img-fluid">
                <div class="name"><b>Dr.Z.John Bernard.,M.C.A.,M.Phil.,</b></div>
                
            </div>
            <div class="col-md-8">
                <h3 data-aos="fade-up" data-aos-duration="1000">Heartfelt Thanks to Our Mentor</h3>
                <p data-aos="fade-up" data-aos-duration="1000" class="description justified-paragraph"> We extend our heartfelt gratitude to our mentor, whose unwavering guidance and invaluable insights have been instrumental in our academic and personal growth. Their mentorship has not only equipped us with technical skills but also instilled in us a profound sense of curiosity and resilience. Through their encouragement and support, we have overcome challenges, embraced innovation, and developed a deep appreciation for the complexities of IT. We are profoundly thankful for their dedication to nurturing our potential and for inspiring us to push the boundaries of knowledge. Their influence will continue to shape our journey as we embark on new endeavors and pursue our aspirations with confidence and determination.</p>
            </div>
        </div>
        <!-- Finishing symbol image -->
        <div data-aos="fade-up" data-aos-duration="1000" class="text-center mt-1">
            <img src="{{asset('/images/symbol.jpg')}}" alt="Finishing Symbol" style="max-width: 200px;">
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" class="row mt-3">
            <div class="col-md-12 text-center">
                <h3>Thank you Seniors</h3>
            </div>
            <!-- <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4 text-center">
                        <img class="passport-photo" src="{{asset('/images/belgin.jpeg')}}" width="200" height="200">
                        <div class="name"><b>Belgin Deepak BCA.,M.Sc.(IT)</b></div>
                    </div>
                    <div class="col-md-4 text-center">
                        <img class="passport-photo" src="{{asset('/images/sneha.jpeg')}}" width="200" height="200">
                        <div class="name"><b>Sneha BCA.,M.Sc.(IT)</b></div>
                    </div>
                    <div class="col-md-4 text-center">
                        <img class="passport-photo" src="{{asset('/images/Hema.jpg')}}" width="200" height="200">
                        <div class="name"><b>Hema BCA.,M.Sc.(IT)</b></div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <div class="full-width-footer">
        @include('user.Footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--aos script-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
