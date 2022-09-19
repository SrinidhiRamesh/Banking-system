<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- <link href="./css/style.css" rel="text/stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🏦Trust Bank🏦</title>
</head>
<body STYLE="background-color:#7FB77E">

  <!-- header with connection and sql code -->
  <?php require_once './include/header.php' ?>


      <!-- Carosoul part start -->
      <section id="top" class="top">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!--<img src="https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="d-block w-100 img-fluid"  alt="...">
            -->
			<!--<img src ="https://media.istockphoto.com/photos/person-holds-a-smartphone-with-mobile-banking-icons-projection-picture-id1304484797?b=1&k=20&m=1304484797&s=170667a&w=0&h=Z8RFNCQoyUz1lXq9eZK55DuwA8TPRcPcIAJDR7HDjpk=" style="width:1200px" height="500px">
			-->
			<img src="https://media.istockphoto.com/photos/banking-online-concept-internet-bank-picture-id1285809521?b=1&k=20&m=1285809521&s=170667a&w=0&h=tfuaMLlsjhU4GXmeTgfTFPklCBS8OEaCej_hMKL8evs=" style="width:1200px" height="500px">
			<div class="carousel-caption d-none d-md-block external-img" > 
              <h5 style="color:black;" ><mark>🏦Trust Bank🏦</h5>
              <p><mark>A trusted place for your transaction.</p>
            </div>
          </div>
          <div class="carousel-item">
		  <img src ="https://media.istockphoto.com/photos/man-using-online-banking-with-credit-card-on-touch-screen-device-picture-id962095876?k=20&m=962095876&s=612x612&w=0&h=yzt6qDr5tnD-vMBMiM_IMYXVPCRnfULnrFy_54w0ooM=" style="width:1200px" height="500px">
            <!--<img src="https://images.unsplash.com/photo-1601597111158-2fceff292cdc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100 img-fluid" alt="...">
            --><div class="carousel-caption d-none d-md-block external-img">
              <h5><mark>Transfers Money securely</h5>
              <!--<p>Transfering Money is just easy as Dialing a Phone.</p>;-->
            </div>
          </div>
          <div class="carousel-item">
            <!--<img src="https://images.unsplash.com/photo-1620714223084-8fcacc6dfd8d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="d-block w-100 img-fluid" alt="...">
            -->
			<img src ="https://media.istockphoto.com/photos/person-holds-a-smartphone-with-mobile-banking-icons-projection-picture-id1304484797?b=1&k=20&m=1304484797&s=170667a&w=0&h=Z8RFNCQoyUz1lXq9eZK55DuwA8TPRcPcIAJDR7HDjpk=" style="width:1200px" height="500px">
			<div class="carousel-caption d-none d-md-block external-img">
              <h5><mark>Banking is Easier and secure with TRUST BANK</h5>
              <p><mark>Know your transaction details</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
      <!-- CArosoul part end -->

        <!-- middle container start-->
        <section id="services" class="services">
        <div class="container my-5">
            <h1 class="text-dark text-center my-5">Services Provided</h1>
            <div class="container">
            <div class="row row-cols-2">       
              <div class="col ">
              <h3> Transcations and balance checking</h3>   
                <div class="container col my-5">
                   <p class="lead">See Customers</p>
                   <a href="customer.php"><button class="btn btn-primary" type="button" >CLICK HERE</button></a>
                </div>
                <div class="container col my-5">
                   <p class="lead"> See Transaction</p>
                   <a href="transaction.php"><button class="btn btn-primary" type="button" >CLICK HERE</button></a>
                </div>
               
              </div>

              <div class="col">
			  <!--<img src="https://images.unsplash.com/photo-1616514197671-15d99ce7a6f8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="rounded img-fluid float-right" alt="...">
              -->
			  <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxESEhMSExIVFhASFR4YGBgVFRcZGRgTGBcWFxgVGBcYHiggGx0lGxUVITEhJSkrLy4uFx8zODMtNygtLi0BCgoKDg0OGxAQGy0hICYtLS0wLTIxLy0uLS0tLy8tLy0tLS0tLTUvLS0tLS0tLS0tLy8tLS0tLS0tLS0tLS0tLf/AABEIALEBHAMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABgcDBAUBAgj/xABIEAABAwICAwoKBwYGAwAAAAABAAIDBBESIQUxUQYVIjJBYXGBkbEHExQ0UnKCktPiVGNzk6HB0SMzU7LC8EJig7PS4SREov/EABsBAQACAwEBAAAAAAAAAAAAAAAEBQEDBgIH/8QAPxEAAQMBBQUEBwYFBAMAAAAAAQACAxEEBRIhMUFRYYGREyJxsRQyM1LB0fAVNGKhsuEGI3KC8ZKi0uIkQlP/2gAMAwEAAhEDEQA/ALlREW5akRERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERF6iLxFy9JaciiBzDnDYch0u/IKFaW3TSSHLMA84HUPzKlQWSSXQUG9QrTeEUGpqdwVkooToXdccmyZjnOfUeXoKl1JWRyi7HX2jUR0ha5oHxHvBbLPa4px3Dy2rYREWlSURERERERERERERERERERERERERERERERERERERERERERERERERERERYKqqZGLvcAPxPQOVRXTW6212x5dGvrOod63RQPlPdCjz2qKAVeeW368VJa7SUcXGPC9Ea+vZ1qG6a3WOfdrNWwHLrPL1ZKN1dc+Qm5yPJ+u1bGgNG+UzMivYOPCOwAXNufK3WrWKxRwtxyZ0VDNeU1ocI4hSuXj9dOC056hzzdxv3DoCwq0x5HDI2mFOLnCL4Wuzfe1y44jxTc2Nkm0hRNE7jALQOaHfsm8IF2DE3aA4OB6EFvP/rGaGlOenVDdAzLphlWuR2Cp27ACqsW/Q6UkiIsSQNWdiOg8isaWuoWHOKPCC0Y/FttZ8Ze1w5SLC225C5+6TQEUtOZ44vFStbithDbtGZDmjIG2e3kKC3NfQPYQDv4/XJHXS+MF0UgcRnTMaczxpvXmht1b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6RmGqgn+8pfjLQ7ReSV1UWtRVD3tJfC+Ig2wvMZJFhwrxucLcmu+S2VqRERERERERERERERERERERERERERERERFlEREWERERZRERERERERERERERFhERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERF/9k=" style="width:400px">
			  </div>
            </div>
            </section>
            <section id="about" class="about">
      <div class="container">

      </div>
    </section>
             
            </div>
          </div>
        <!-- middle container end -->

         <!-- footer  -->
        <?php require_once './include/footer.php' ?>  
</body>

      <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>