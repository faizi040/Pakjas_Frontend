<?php include("inc/header.php"); ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 col-12">
            <p class="aim1"><a href="index.php">PAKJAS</a><strong>/Login</strong></p>
            <div class=" aim-para mt-5">
                <p class=" mt-3< "><h5 class="ms-4">On this page</h5></p>
            </div>
            <div class=" aim-para1 ">
                <p class="ms-4 mt-2">Login</p>
            </div>
            
        </div>
        <div class="col-lg-6 col-md-4 col-sm-12 col-12 px-5">
            
        <br>
        <!-- <h3>Aims and scope</h3> -->
        <div class="submission">
            <br>
            <br>
            
                <h2 class="mt-3">Login</h2>
                <form action="#">
                    <label for="email">Email :</label>
                        <input type="email" id="email">
                    <label for="password">Password :</label>
                        <input type="password" id="password">
                </form>
                <div id="submbtn">
                <button id="submission">Submit</button>
</div>
<span>Didn't have an account? </span> <a href="">Sign Up</a><br>
<span>Cann't get access to your Account?  </span> <a href="">Forgot Password</a>
<br><br><br>


</div>

            




        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-12 para mt-3 mqt">

            <div class="p1 border border-secondary ">


                <p class="py-3 ms-3"><img src="images/icon4.svg" alt="not found">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span>Journal metrics</span>
                </p>
            </div>
            <div class="p2 border border-secondary">

                <span>Acceptance rate</span> <span class="mx-5"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;22%</strong></span>
            </div>
            <div class="p2 border border-secondary">

                <span>Submission to final decision</span> <span class="mx-2"><strong>93 days</strong></span>
            </div>
            <div class="p2 border border-secondary">

                <span>Acceptance to publication</span> <span class="mx-3"><strong>&nbsp;48 days</strong></span>
            </div>
            <div class="p2 border border-secondary ">

                <span>Impact Factor</span> <span class="mx-5"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.856</strong></span>
            </div>
            <div class=" py-3  text-white" style="background-color:#4CA2AE ;">
                <span class="ms-2">Quick Links</span>
            </div>
            <div class="py-3" style="background-color:#F3F3F3">
                <span class="ms-3"><img src="images/icon5.svg" alt="Not Found">&nbsp;&nbsp;&nbsp;&nbsp;Login</span>
            </div>

            <div class="border border-primary rounded-2 mt-4 text-center py-3" style="background-color: #DEECF7;">
                <h5 class="text-primary">Search this Journel</h5>
                <form action="" class="myform">

                    <input type="radio" name="mygender"> Title
                    <input type="radio" name="mygender"> Authur
                    <input type="radio" name="mygender"> Keywords
                    <div class="mt-2 search">

                        <input type="search" name="search" id="search">
                    </div>
                    <button class="border border-primary text-success mt-2 btn">Search</button>
                </form>

            </div>





        </div>
    </div>
</div>



<?php include("inc/footer.php"); ?>