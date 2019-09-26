<?php
include "Header.php";
?>
<div class="col-md-8 address_form">
    <h4>Add a new Details</h4>
    <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
        <section class="creditly-wrapper wrapper">
            <div class="information-wrapper">
                <div class="first-row form-group">
                    <div class="controls">
                        <label class="control-label">Full name: </label>
                        <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                    </div>
                    <div class="card_number_grids">
                        <div class="card_number_grid_left">
                            <div class="controls">
                                <label class="control-label">Mobile number:</label>
                                <input class="form-control" type="text" placeholder="Mobile number">
                            </div>
                        </div>
                        <div class="card_number_grid_right">
                            <div class="controls">
                                <label class="control-label">Landmark: </label>
                                <input class="form-control" type="text" placeholder="Landmark">
                            </div>
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="controls">
                        <label class="control-label">Town/City: </label>
                        <input class="form-control" type="text" placeholder="Town/City">
                    </div>
                    <div class="controls">
                        <label class="control-label">Address type: </label>
                        <select class="form-control option-w3ls">
                            <option>Office</option>
                            <option>Home</option>
                            <option>Commercial</option>
                        </select>
                    </div>
                </div>
                <button class="submit check_out">Delivery to this Address</button>
            </div>
        </section>
    </form>
    <div class="checkout-right-basket">
        <a href="payment.html">Make a Payment </a>
    </div>
</div>