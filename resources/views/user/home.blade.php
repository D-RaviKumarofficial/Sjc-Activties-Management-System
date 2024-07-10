<!DOCTYPE html>
<html lang="en">

<head>
    <title>HomePage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .center-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 100%;
            height: auto;
        }

        .justified-paragraph {
            text-align: justify;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
        }

        .carousel-inner {
            width: 100%;
        }
    </style>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body>
    @include('user.Navbar')
    <br><br><br><br>
    <div class="container-fluid p-0">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
            <!-- Indicators -->
            <!-- <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
            </ol> -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('/images/1.png')}}" alt="Los Angeles" class="d-block">
                </div>

                <div class="carousel-item">
                    <img src="{{asset('/images/2.png')}}" class="d-block">
                </div>

                <div class="carousel-item">
                    <img src="{{asset('/images/3.png')}}" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/4.png')}}" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/5.png')}}" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/6.png')}}" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/7.png')}}" class="d-block">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Finishing symbol image -->
    <div class="text-center mt-1">
        <img src="{{asset('/images/symbol.jpg')}}" alt="Finishing Symbol" style="max-width: 200px;">
    </div>
    <!-- Grid for paragraph and images -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <p class="justified-paragraph">St. Joseph’s College is a legacy of the 19th century, handed down to us by the venerable fathers of the society of the Foreign Mission of Paris. Its nucleus was the St. Joseph’s High School which was started in 1868 A.D. This School was elevated into a college in 1884 A.D. through the efforts of Father Tarbes and was affiliated to the University of Madras. The District- Gazetteer, South Arcot District, has recorded that the prime educational institution and the only college in the District in the 19th century was St. Joseph’s College. It once again became a high school in 1909 due to financial and other constraints. Since then, there had been several attempts to revitalize the college. The dream became a reality when the college was reborn as St. Joseph’s College of Arts & Science in 1991. The college was inaugurated on 11th October 1991, at a stately function presided over by His Excellency Bhishma Narain Singh, the then Governor of Tamil Nadu through the efforts of Rev. Fr. R. Ratchagar, the then Secretary of the College. The college obtained Permanent Affiliation on 08.02.2008, the Autonomous status on 09.06.2008 and 12(B) Status by the University Grants Commission on 28th August, 2015. The NAAC 3rd Cycle of Re-Accreditation with CGPA of 3.31 on seven point scale at “A” Grade was declared on 22nd February, 2017. Under the leadership of the present Secretary of the College Rev. Fr. Dr. M. Swaminathan our institution is marching towards excellence. The College bears the Motto “Labor Omnia Vincit”, meaning “Hard Work conquers All”. With an abiding faith in the efficacy of her labours, the college strives hard to impart value based education aimed at the formation of the integral personality of the student. With the willing co-operation of parents and the whole hearted support of the public, the college hopes to march triumphantly in its noble endeavour.</p>
            </div>
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="col-md-12 mb-3">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video class="embed-responsive-item" src="{{asset('/images/intro.mp4')}}" controls loop autoplay muted></video>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5">
                        <img src="{{asset('/images/logo.png')}}" alt="logo" class="center-image" style="max-width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Finishing symbol image -->
    <div class="text-center mt-1">
        <img src="{{asset('/images/symbol.jpg')}}" alt="Finishing Symbol" style="max-width: 200px;">
    </div>
    <!--the counts-->
    <div class="container mt-3">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Count</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Teaching Staffs</td>
                        <td>174</td>
                    </tr>
                    <tr>
                        <td>Administrative Staffs</td>
                        <td>74</td>
                    </tr>
                    <tr>
                        <td>Students</td>
                        <td>5245</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
    @include('user.Footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
