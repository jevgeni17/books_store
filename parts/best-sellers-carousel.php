<section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best sellers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                
                            <?php
                                $books=mysqli_query($link, "SELECT * FROM `best-sellers` ORDER BY num");
                                while($book=mysqli_fetch_assoc($books)){
                                    echo '<div class="col-lg-3 col-sm-6">
                                            <div class="single_product_item">
                                                <img src="img/'.$book['img'].'" alt="">
                                                <div class="single_product_text">
                                                    <h4>'.$book['title'].'</h4>
                                                    <h3>'.$book['price'].'</h3>
                                                    <a href="?book-id='.$book['book-id'].'" class="add_cart">+ add to cart</a>
                                                </div>
                                            </div>
                                        </div>';
                                }
                            ?>   
                            </div>
                        </div>
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="img/product/example.jpeg" alt="">
                                        <div class="single_product_text">
                                            <h4>Sherlock Holmes</h4>
                                            <h3>$15.00 €</h3>
                                            <a href="#" class="add_cart">+ add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="img/product/example.jpeg" alt="">
                                        <div class="single_product_text">
                                            <h4>Sherlock Holmes</h4>
                                            <h3>$15.00 €</h3>
                                            <a href="#" class="add_cart">+ add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="img/product/example.jpeg" alt="">
                                        <div class="single_product_text">
                                            <h4>Sherlock Holmes</h4>
                                            <h3>$15.00 €</h3>
                                            <a href="#" class="add_cart">+ add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="img/product/example.jpeg" alt="">
                                        <div class="single_product_text">
                                            <h4>Sherlock Holmes</h4>
                                            <h3>$15.00 €</h3>
                                            <a href="#" class="add_cart">+ add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    