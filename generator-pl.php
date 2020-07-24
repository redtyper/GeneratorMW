<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mistrzowie wyzwania 222</title>
    <link href="assets/css/all.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/mdb.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/image-picker.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/steppers.min.css">

    <style>
        img {
            width: 100%;
            height: 100%;
        }

        .template_bg {
            width: 300px;
            height: 390px;
        }

        body {
            background-color: #1bb4de;
        }

        .class2 {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            width: 70%;
            margin-top: 50px;
        }
        .photoI{
            width: 217px;position: absolute;left: 41px;top: 119px;height: 193px;background-size: cover;background-position: center;
        }
        .photoD{
            width: 150px;position: absolute;left: 76px;top: 136px;height: 150px;background-size: cover;background-position: center;
        }
    </style>
</head>
<body class="design6 design7">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.stepper').mdbStepper();
    })

    function someFunction22() {
        setTimeout(function () {
            $('#horizontal-stepper-fix').nextStep();
        }, 1000);
    }
</script>
<script type="application/javascript">
    window.onload = function () {
        var photo, urlString;
        photo = sessionStorage.getItem('photo');
        urlString = 'url(upload/' + photo + ')';
        document.getElementById('photoC').style.backgroundImage = urlString;
    }
    function saveBG() {
        var savebg;
        savebg = document.getElementById("tempBG").src;
        sessionStorage.setItem("tempBG", savebg);
    }
    function getBG() {
        var getBG, BGi, BGd;
        getBG = sessionStorage.getItem("tempBG");
        BGi = "https://itdevweb.pl/generator/template-insta2.jpg";
        BGd = "https://itdevweb.pl/generator/template-dyplom2.jpg";
        document.getElementById('setBG').src = getBG;
        if (getBG === BGd) {
            document.getElementById('photoC').setAttribute('class','rounded-circle photoD');
            document.getElementById('setName').setAttribute('class','tempNameD');
        } else if (getBG === BGi) {
            document.getElementById('photoC').setAttribute('class','photoI');
            document.getElementById('setName').setAttribute('class','tempNameI');
        } else {
            alert("Błąd");
        }
    }
</script>
<!--Main Navigation-->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">
        <div id="navbarSupportedContent-7">
          <a class="navbar-brand" href="#">
            <img src="assets/images/logo.png">
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <h4>Mistrzowie wyzwania 222</h4>
        </div>
      </div>
    </nav>
  </header>
<!--Intro Section-->
<main>
    <div class="container">
        <div class="card card-cascade narrower">
            <!-- Grid column -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 mr-0 pb-5">
                    <div class="view view-cascade gradient-card-header custom-gradient">
                        <h2 class="h2-responsive mb-0 font-weight-500">NAGRODA</h2>
                        <h4 class="h4-responsive mb-0 font-weight-500">Indywidualne wyróżnienie cyfrowe</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="stepper horizontal horizontal-fix" id="horizontal-stepper-fix">
                        <li class="step active">
                            <div class="step-title waves-effect waves-dark"></div>
                            <div class="step-new-content">
                                <!-- Card content -->
                                <div class="card-body">
                                    <div class="card-header">
                                        <h4 class="text-center">Wybierz grafikę </h4>
                                    </div>
                                    <select class="image-picker" id="templatepicker">
                                        <option value="assets/images/template-dyplom2.jpg"
                                                data-img-src="template-dyplom2.jpg"
                                                >
                                        </option>
                                        <option value="assets/images/template-insta2.jpg"
                                                data-img-src="template-insta2.jpg">
                                        </option>
                                    </select>
                                    <div class="text-center">
                                        <button class="btn btn-sm btn-success m-0 mt-4 next-step"
                                                data-feedback="someFunction22" onclick="saveBG();">"DALEJ"
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li class="step">
                            <div class="step-title waves-effect waves-dark"></div>
                            <div class="step-new-content">
                                <div class="card-body">
                                    <div class="card-header">
                                        <h4 class="text-center">Wpisz swoje imię (opcjonalne) </h4>
                                    </div>
                                    <div class="md-form md-outline">
                                        <input type="text" id="inputPassword6MD" class="form-control" value=""
                                               placeholder="..."
                                               style="width: auto;">
                                    </div>

                                </div>
                                <div class="text-center">
                                    <button class="btn btn-sm btn-grey m-1 back-step">WSTECZ
                                    </button>
                                    <button class="btn btn-sm btn-success m-1  next-step" onclick="getBG();"
                                            data-feedback="someFunction22">DALEJ
                                    </button>

                                </div>
                            </div>
                        </li>
                        <li class="step">
                            <div class="step-title waves-effect waves-dark"></div>
                            <div class="step-new-content">
                                <div class="card-body">
                                    <div class="card-header">
                                        <h4 class="text-center">Zobacz podgląd </h4>
                                    </div>

                                    <div class="class2">
                                        <div class="template_bg" id="template_bg" style="position: relative;">
                                            <img class="template_bgs" id="setBG" src="">
                                                <div id="photoC"></div>
                                                <div id="setName"></div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-danger m-0 " type="button" onclick="generate()">
                                            Generuj PDF
                                            <i class="far fa-magic ml-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function generate() {
        // Get the element
        var element = document.getElementById('template_bg');
        //var sessionElement = sessionStorage.getItem("tempBG");
        // Generate the PDF.
        html2pdf().from(element).set({
            margin: 3,
            filename: 'generator.pdf',
            html2canvas: {
                scale: 2,
                width: 300
            },
            jsPDF: {
                orientation: 'portrait',
                unit: 'mm',
                format: 'letter'
            }
        }).save();
    }
    
</script>
<script type="text/javascript" src="assets/js/pdfmake.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/image-picker.js"></script>
<script type="text/javascript" src="assets/js/steppers.min.js"></script>
<script>
    $("input")
        .keyup(function () {
            var value = $(this).val();
            $("#setName").text(value);
        })
        .keyup();

    jQuery("select.image-picker").imagepicker({
        hide_select: true,
    })
</script>
<script type="text/javascript" src="assets/js/material-select.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/mdb.min.js"></script>
<script>
    new WOW().init();
</script>
</body>

</html>