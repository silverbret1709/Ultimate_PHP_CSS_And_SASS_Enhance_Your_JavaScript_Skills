<div class="cart-section">
    <div class="col-md-12">
        <div class="heading-tertiary">Your Unpaid Posts</div>
    </div>
    <p class="text-left shopping_bag_heading">
        Items in Your Cart
    </p>
    <div class="cart-wrapper">
        <div class="shopping_cart d-flex">
            <div class="shopping_bag d-flex">
                <img src="img/stephan-bechert.jpg" alt="" class="shopping_bag-img">
                <div class="shopping_bag-description d-flex flex-column">
                    <p class="title">House for Sale in Victoria</p>
                    <p class="red">Realestate</p>
                    <p class="price">$550,600</p>
                </div>
                <div class="shopping_bag-remove d-flex flex-column">
                    <p class="quantity"><span class="quantity-col">1 Item</span></p>
                    <a href="cart.php?action=delete" class="remove">Remove</a>
                </div>

                <div class="shopping_bag-outside">
                    <p class="price-outside"><sup>$</sup>550600 </p>
                </div>
            </div> <!--Shopping Bag ends-->
        </div> <!--Shopping Cart ends-->
        <div class="checkout_box">
            <div class="checkout_box__order-summary text-center">
                <p class="order">Order Summary</p>
            </div>
            <div class="checkout_box__total-price text-center">
                <p class="subtotal">Subtotal:</p>
                <p class="subtotal_price"><sup>$</sup>0.00</p>
            </div>
            <div class="checkout_box__checkout">
                <a href="#payment" class="btn checkout_box__button text-center"><i class="fa fa-lock"></i>Checkout</a>
            </div>
            <div class="checkout_box-payment-icons d-flex flex-row justify-content-center align-items-center">

                <svg class="checkout__icon">
                    <use xlink:href="img/SVG/symbol-defs.svg#icon-paypal"></use>
                </svg>
                <svg class="checkout__icon">
                    <use xlink:href="img/SVG/symbol-defs.svg#icon-visa"></use>
                </svg>

                <svg class="checkout__icon">
                    <use xlink:href="img/SVG/symbol-defs.svg#icon-americanexpress"></use>
                </svg>

                <svg class="checkout__icon">
                    <use xlink:href="img/SVG/symbol-defs.svg#icon-cc-stripe"></use>
                </svg>

                <svg class="checkout__icon">
                    <use xlink:href="img/SVG/symbol-defs.svg#icon-mastercard"></use>
                </svg>

            </div>
        </div> <!--Checkbox ends-->

    </div> <!--Shopping Wrapper ends-->

    <div class="col-md-12" id="payment">
        <h1 class="heading-tertiary">Payment Section</h1>
    </div>
    <article class="card col-md-12">
        <div class="card-body p-5">
            <ul class="nav bg-light nav-pills rounded nav-fill" role="tablist">
                <li class="nav-item">
                    <a href="#nav-tab-card" class="nav-link active" data-toggle="pill">
                        <i class="fa fa-credit-card"></i> Credit Card
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#nav-tab-paypal" class="nav-link" data-toggle="pill">
                        <i class="fa fa-paypal"></i> Paypal
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#nav-tab-bank" class="nav-link" data-toggle="pill">
                        <i class="fa fa-university"></i> Bank Transfer
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="nav-tab-card">
                    <div class="form-row">
                        <form action="" method="post" class="margin-lg-t" id="payment-form">
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            <label for="card-element">
                                Credit or Debit Card
                            </label>
                            <input type="text" class="form-control" id="card-element" placeholder="Your Card Number">
                            <button class="btn btn-primary btn-block mt-4">Submit Payment</button>
                        </form>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-tab-paypal">
                    <form action="" method="post" id="paypal_form" class="paypal">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-paypal"></i> Paypal
                        </button>
                    </form>
                    <p><strong>Paypal Payment here</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse minima molestiae odio optio provident quam, quis quisquam rem similique soluta?</p>
                </div>
                <div class="tab-pane fade" id="nav-tab-bank">
                    <p>Bank Account Details</p><p>Name of Bank: ANZ</p>
                    <p>Account Number: 1124235465465</p>
                    <p>BSB Number: 124235</p>
                    <p>IBAN Number: 2134gsrgsgrthdfb</p>
                    <p><strong>Bank Payment Details here</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, perferendis?</p>
                </div>
            </div>
        </div>
    </article>
</div>
