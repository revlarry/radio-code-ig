
<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
      }

      #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: green;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
      }

      #myBtn:hover {
        background-color: #555;
      }
    </style>

</head>
<body>

<div class="container">

  <h1> Search <span><i class="fas fa-search"></i></span> Past Programmes</h1>

  <p>Enter search text<input type="text" onkeyup="loadDoc(this.value)" name="txt" id="txt">
  </p>
  <!-- <h4> Hint: Search by word(s) from title,guest name, description or host(ess)</h4> -->
  <p id="demo"></p>


    <script>
    function loadDoc(str) {
      // alert(str);

      if (str.length==0){
        document.getElementById('txt').innerHTML='';
        return;
      }
      else 
      {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var x = document.getElementById("txt").value;
            document.getElementById("demo").innerHTML = this.responseText;

           }
         };
        xhttp.open("GET", "http://localhost/projects/test/index.php/getdata/?txt="+str, true);
        xhttp.send();
        // xhttp.send();
      }
    }
    </script>

 <style>
     li:hover {
      background-color: yellow;
      }
    </style>
  

  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
   <!--  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("myBtn").style.display = "block";
          } else {
              document.getElementById("myBtn").style.display = "none";
          }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }
    </script>


    <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
</div>
</body>
</html>
