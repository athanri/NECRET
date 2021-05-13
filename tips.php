<!doctype html>
<html lang="en">
    <head>
        <?php include 'includes/head.php'; ?>
    </head>

    <body>
        <?php include 'includes/navbar.php'; ?>

            <div id="tips" class="container-fluid navySection text-center pt-4 pb-3">
                <h2>Coping Tips and Advice</h2>
                <div class="container">                                
                    <div class="row pt-2 pb-5">
                        <div class="col-md-6 col-12 col-lg-6 col-sm-12 col-xl-6 text-center borderTips">
                            <img src="./img/coping.png" alt="Coping" class="img-fluid">
                            <h4>Calming Breathing Technique</h4>
                            <p>When we are feeling anxious and stressed a number of physiological changes can occur in our body.</p>
                            <p>We may notice our heart beating fast, we may feel warm and sweaty, our muscles may tighten, we may feel light headed or our body can tremble. Psychologically we may notice our thoughts racing and we can feel overwhelmed.</p>
                            <!-- Button trigger modal -->
                            <a type="button" class="btn btn-primary btn-tips" href="./tips-breathing.php">
                                <i class="fa fa-info"></i> Read More
                            </a>
                        </div>
                        <div class="col-md-6 col-12 col-lg-6 col-sm-12 col-xl-6 text-center borderTips">
                            <img src="./img/chemo.png" alt="Chemotherapy" class="img-fluid">
                            <h4>Chemotherapy</h4>
                            <p>Coping Strategies that maybe of Help.</p>
                            <p>MD Anderson Cancer Centre one of the leading cancer treatment centres in the world, recently asked their Facebook community for some shared tips on how patients can cope with chemotherapy, including creating a sense of normalcy and asking for help when they need it.</p>
                            <p>In the article by Mila Clarke Buckley, 10 chemotherapy tips were put forward by patients:</p>
                            <!-- Button trigger modal -->
                            <a type="button" class="btn btn-primary btn-tips mt-2" href="./tips-chemotherapy.php">
                                <i class="fa fa-info"></i> Read More
                            </a>
                        </div>
                        <div class="col-md-4 col-12 col-lg-4 col-sm-12 col-xl-4 text-center borderTips">
                            <img src="./img/chemoBrain.png" alt="Chemo Brain" class="img-fluid">
                            <h4>Chemo Brain</h4>
                            <p>There's a number of things that you can do that should help you cope better with chemo brain:</p>
                            <br>
                            <br>
                            <!-- Button trigger modal -->
                            <a type="button" class="btn btn-primary btn-tips" href="./tips-chemobrain.php">
                                <i class="fa fa-info"></i> Read More
                            </a>
                        </div>
                        <div class="col-md-4 col-12 col-lg-4 col-sm-12 col-xl-4 text-center borderTips">
                            <img src="./img/dehydration.png" alt="Dehydration" class="img-fluid">
                            <h4>Side Effect: Dehydration</h4>
                            <p>Do you feel thirstier than usual?</p>
                            <p>Are you experiencing dry lips or skin? <br>These may be signs of dehydration.</p>
                            <!-- Button trigger modal -->
                            <a type="button" class="btn btn-primary btn-tips" href="./tips-dehydration.php">
                                <i class="fa fa-info"></i> Read More
                            </a>
                        </div>
                        <div class="col-md-4 col-12 col-lg-4 col-sm-12 col-xl-4 text-center borderTips">
                            <img src="./img/insomnia.png" alt="Insomnia" class="img-fluid">
                            <h4>Insomnia</h4>
                            <p>Tips for Managing Insomnia During Cancer Treatment</p>
                            <br>
                            <!-- Button trigger modal -->
                            <a type="button" class="btn btn-primary btn-tips mt-2" href="./tips-insomnia.php">
                                <i class="fa fa-info"></i> Read More
                            </a>
                        </div>
                        <div class="col-md-12 col-12 col-lg-12 col-sm-12 col-xl-12 text-center borderTips">
                            <img src="./img/nutrition.jpg" alt="Nutrition" class="img-fluid">
                            <h4>Nutrition</h4>
                            <p>No appetite? How to get nutrition during cancer treatment</p>
                            <br>
                            <!-- Button trigger modal -->
                            <a type="button" class="btn btn-primary btn-tips mt-2" href="./tips-nutrition.php">
                                <i class="fa fa-info"></i> Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container-fluid fullSize">
            <div class="col-md-12 pt-3 mb-5 copingText text-center">
                <h2>Maintaining Physical Exercise</h2>
            </div>
            <div class="container">
                <div class="row pt-2">
                    <div class="imgButton col-md-6 col-12 col-lg-6 col-sm-12 col-xl-6 mt-5 mb-5 text-center">
                        <img src="./img/video1.png" alt="Fitness">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary video-btn" data-bs-toggle="modal" data-bs-target="#myModal">
                            <i class="fa fa-youtube fa-2x"></i>
                        </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">    
                                <div class="modal-body modalBody">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>        
                                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/LcRr23-AgS4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div> 


                    <div class="col-md-6 col-12 col-lg-6 col-sm-12 col-xl-6 copingText text-center">
                        <h4>From Home Workout</h4>
                        <p>Big thanks to Local Physiotherapists Vikki McGinn and Kelvin Finegan along with videographer Ciaran McIvor for putting together this excellent exercise from home routine.</p>
                        <p>The workout includes:</p>
                        <ul class="list-group grey">
                            <li class="list-group-item greyGroup">A Warm Up</li>
                            <li class="list-group-item greyGroup">Strength Training</li>
                            <li class="list-group-item greyGroup">Cardio Training</li>
                            <li class="list-group-item greyGroup">Functional Daily Movements</li>
                        </ul>
                        <p>The full video can be found on our newly launched <a href="https://www.youtube.com/watch?v=LcRr23-AgS4&feature=youtu.be" target="_blank">NECRET YouTube Channel</a></p>
                        <p>Please feel free to share to anyone who this might be of help too.</p>
                    </div>
                </div>
            </div>
        </div>
 
        <?php include 'includes/iconBar.php'; ?>

        <?php include 'includes/footer.php'; ?>

        <?php include 'includes/bodyScripts.php'; ?>
    </body>
</html>