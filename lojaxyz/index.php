<?php
include "cabecalho.html";
include "conexao.php";
?>

<div class="container">
  <br>
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view hm-black-light">
                <img class="d-block w-100" src="imagens/s1.jpg" alt="First slide">
                <div class="mask"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive"></h3>
                <p>Texto 1</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-strong">
                <img class="d-block w-100" src="imagens/s2.jpg" alt="Second slide">
                <div class="mask"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive"></h3>
                <p>Texto2</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-slight">
                <img class="d-block w-100" src="imagens/s3.jpg" alt="Third slide">
                <div class="mask"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive"></h3>
                <p>Texto 3</p>
            </div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>

</div>


<div class="container">
<section class="text-center pb-3">

    <!--Section heading-->
    <h1 class="font-bold h3 py-5">OS MAIS VENDIDOS</h1>

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-r">

            <!--Card-->
            <div class="card card-cascade narrower" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <?php
                $sql = "SELECT * FROM produtos"; 

    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) {
	while($row = $result -> fetch_assoc()){
		{
           echo $row['nome'], "</br>"; 
            echo $row['preco'], "</br>"; 
         //echo $row['imagens/s2.jpg']; 
            
		//header('refresh: 3, index.php');
	}
}
    }
?>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        


</div>

</div>

<?php
include "rodape.php";
?>
<!--/.Footer-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>