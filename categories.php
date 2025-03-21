<?php
include("heading.php");
?>
<!-- Modal Search End -->


<!-- Single Page Header start -->
<div class="container-fluid page-header py-5 A ">
    <h1 class="text-center text-white display-6">Shop</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Category</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Fruits Shop Start-->
<div class="container-fluid fruite py-5 ">
    <div class="container py-5">
        <h1 class="mb-4 A">Fresh fruits shop</h1>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4 B">
                    <div class="col-xl-3">
                        <div class="input-group w-100 mx-auto d-flex ">
                            <input type="search" class="form-control p-3 " placeholder="keywords"
                                aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-xl-3">
                        <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                            <label for="fruits">Default Sorting:</label>
                            <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3"
                                form="fruitform">
                                <option value="volvo">Nothing</option>
                                <option value="saab">Popularity</option>
                                <option value="opel">Organic</option>
                                <option value="audi">Fantastic</option>
                            </select>
                        </div>
                    </div>
                </div>





                <div class="row g-4">

                    <div class="col-lg-12">
                        <div class="row g-4 justify-content-center">







                            <?php
                            include("config.php");

                            $query = "SELECT * FROM `category`";

                            $res = mysqli_query($db, $query);


                            while ($data = mysqli_fetch_assoc($res)) {

                                ?>
                                <div class="col-md-6 col-lg-6 col-xl-4 B">
                                    <div class="rounded position-relative fruite-item ">
                                        <div class="fruite-img">
                                            <img src="category_image/<?php 
                                             echo $data['image'];
                                            ?>" class="img-fluid rounded-top" alt="">
                                        </div>

                                        <div class='p-4 border border-secondary border-top-0 rounded-bottom'>
                                            <h4 class='text-center'>
                                                <?php
                                                echo $data["category_name"];
                                                ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <?php

                            }
                            ?>















                            <!-- <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Grapes</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te
                                            incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Raspberries</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te
                                            incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="img/fruite-item-4.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Apricots</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te
                                            incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="img/fruite-item-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Banana</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te
                                            incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Oranges</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te
                                            incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Raspberries</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te
                                            incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Grapes</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te
                                            incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Oranges</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te
                                            incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->




                            <div class="col-12">
                                <div class="pagination d-flex justify-content-center mt-5">
                                    <a href="#" class="rounded">&laquo;</a>
                                    <a href="#" class="active rounded">1</a>
                                    <a href="#" class="rounded">2</a>
                                    <a href="#" class="rounded">3</a>
                                    <a href="#" class="rounded">4</a>
                                    <a href="#" class="rounded">5</a>
                                    <a href="#" class="rounded">6</a>
                                    <a href="#" class="rounded">&raquo;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fruits Shop End-->


<?php
include("footer.php")
    ?>