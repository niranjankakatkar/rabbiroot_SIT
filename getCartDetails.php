<?php 
 
 

include 'niru_collection.php';


   
echo "__AJAX-";
$login_key=$_POST['login_key'];
?>

                                        <div class="onhover-dropdown header-badge">
                                            <button type="button" class="btn p-0 position-relative header-wishlist">
                                                <i data-feather="shopping-cart"></i>
                                               
                                                <?php if ($total_cart_items > 0): ?>
                                                    <span class="position-absolute top-0 start-100 translate-middle badge">
                                                    <span class="cart-count"><?= $total_cart_items; ?></span>
                                                      </span>
                                                <?php endif; ?>
                                              
                                            </button>

                                            <div class="onhover-div">
                                                <ul class="cart-list">
                                                <?php

                                                // Fetch cart items for the logged-in user

                                                        $query = "SELECT * FROM cart_master WHERE login_key='$login_key'";
                                                        // echo "".$query;
                                                        $result = mysqli_query($conn, $query);

                                                        $total_cart_items = mysqli_num_rows($result); // Count of items
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                           $productkey=$row['product_key'];
                                                        
                                                
                                                 ?>
                                                    <li class="product-box-contain">
                                                        <div class="drop-cart">
                                                        <a href="ProductDetails.php?product_key=<?= $row['product_key']; ?>" class="drop-image">
                                                            <img src="ADMIN/uploads/category/706594.png" class="blur-up lazyload" alt="">
                                                        </a>

                                                        <div class="drop-contain">
                                                            <h5><?=givedata($conn, "products","key_",$productkey,"product_title")?></h5>
                                                            <h6><span><?= $row['qty']; ?> x</span> £<?= $row['rate']; ?></h6>
                                                        </div>
                                                        </div>
                                                    </li>

                                                <?php } ?>    
                                                </ul>

                                                <div class="price-box">
                                                <h5>Total :</h5>
                                                    <h4 class="theme-color fw-bold">£<?= $total_cart_value; ?></h4>
                                                   
                                                    
                                                </div>
                                                <div class="button-group">
                                                    <a href="checkout.php" class="btn btn-sm cart-button theme-bg-color text-white">Checkout</a>
                                                    <a href="cart.php" class="btn btn-sm cart-button">View Cart</a>
                                                </div>
                                            </div>
                                        </div>