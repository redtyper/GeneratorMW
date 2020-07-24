<?php
session_start();
$id = uniqid();
$_SESSION['id'] = $id

?>
<!DOCTYPE html>
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
  <link href="assets/css/microupload.css" rel="stylesheet">

  <style>
    body {
      background-color: #1bb4de;
    }
    .card{
      margin-left: auto;
      margin-right: auto;
      max-width: 70%;
    }
  </style>
</head>
<body class="design6 design7">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/microupload.js"></script>
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
  <main>
    <div class="container">
      <div class="card card-cascade narrower">
        <!-- Grid column -->
        <div class="row d-flex justify-content-center">
          <div class="col-md6 mt-4 mb-5">
            <hr class="upload-top">
            <h3 style="text-align: center;">NAGRODA<br>Indywidualne wyróżnienie cyfrowe</h3>
            <hr class="upload">
            <img class="upload-icon" src="assets/images/upload-icon.png" alt="upload icon" id="uploadpreview">
            <div id="form2_attach" style="text-align: center;">
              <div class="microupload_item" id="microupload_item">
              </div>
            </div>
            <form class="design7 form2 md_form" method="post" targedt="_blank" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="file-field">
                <div class="d-flex justify-content-center">
                  <div class="btn oranges3 btn-rounded float-left" id="uploadImage">
                    <span>Wybierz zdjęcie z dysku</span>
                    <input type="file" id="form2_file" name="file_uploada"><br>
                  </div>
                  <a id="nextStep" class="btn btn-success btn-rounded" role="button" href="generator-pl.php" style="display:none;">Przejdź do generatora</a>
                </div>
              </div>
              <div class="text-center uploads">
                Zdjęcie musi być w formacie JPG, a jego rozmiar nie może przekraczać 3MB.
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script type="text/javascript" src="assets/js/image-picker.js"></script>
  <script type="text/javascript">
    microupload('#form2_file', {
      url: 'upload.php',
      data: {
        aaa: 'bbb',
        ccc: 'ddd'
      },
      container: '#form2_attach',
      extensions: 'jpeg,jpg,bmp,png,gif',
      max_file_size: 15 * 1024 * 1024,
      preview: true,
      preview_max_width: 200,
      preview_max_height: 200,
      cancelable: true,
      onerror: function(errorcode, filedata, fileid) {
        console.log(['onerror', errorcode, filedata, fileid]);
        if (errorcode === 'maxsize') {
          alert('File ' + filedata.name + ' too large!');
        }
      },
      oncomplete: function mycomplete(file, file_id, responseText) {
        console.log(['oncomplete', file, file_id, responseText]);
        var obj = document.getElementById(file_id);
        if (obj) {
          var data = responseText;
          if ((data.substr(0, 10) == '[response]') && (data.substr(data.length - 11) == '[/response]') && (data.length > 21)) {
            obj_input = document.createElement('input');
            obj_input.value = data.substr(10, data.length - 21);
            obj_input.setAttribute("type", 'hidden');
            obj_input.setAttribute("name", 'file[]');
            obj.appendChild(obj_input);
            var previewimg = document.getElementById('uploadpreview').setAttribute("style", "display:none;");
            var image = (obj_input.value);
            sessionStorage.setItem('photo', image);
            var uploadImage = document.getElementById('uploadImage').setAttribute("style", "display:none;");
            var nextStep = document.getElementById('nextStep').setAttribute("style", "display:block;");
            return true;
          }
        }
        return false;
      },
      onbeforesubmit: function mybegin(file, file_id) {
        console.log(['onbegin', file, file_id]);
        return true;
      },
      onprogress: function(file, file_id, percentComplete) {
        console.log(['onprogress', file, file_id, percentComplete]);
      },
      ontrycancel: function(file, file_id) {
        console.log(['ontrycancel', file, file_id]);
        sessionStorage.removeItem('photo');
        var uploadImage = document.getElementById('uploadImage').setAttribute("style", "display:block;");
        var nextStep = document.getElementById('nextStep').setAttribute("style", "display:none;");
        var previewimg = document.getElementById('uploadpreview').setAttribute("style", "display:block;");
        return true;
      }
    });
  </script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <script>
    new WOW().init();
  </script>
</body>
</html>