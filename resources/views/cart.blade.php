@extends('layout.app')

    @section('content')
    <div class="container d-flex justify-content-center w-100">
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <div class='products d-flex'>
                        <img src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="" class='w-25'>
                        <ul >
                            <li class='list-group-item'><strong>Champion outfit</strong></li>
                            <li class='list-group-item'>Unit: 1 ud</li>
                            <li class='list-group-item'>Price: 30€</li>
                        </ul>
                        <button>DELETE</button>
                    </div>
                    <div class='products d-flex'>
                        <img src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="" class='w-25'>
                        <ul>
                            <li class='list-group-item' ><strong>Cheerleader Top</strong></li>
                            <li class='list-group-item'>Weight: 0.25 kg</li>
                            <li class='list-group-item'>Price: 39€/kg</li>
                            <li class='list-group-item'>Total price: 9.75€</li>
                        </ul>
                        <button>DELETE</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class='totalWeight'>
                        <pre>TOTAL WEIGHT                0.25kg</pre>
                        <img src="https://i.imgur.com/KGTaRPk.png" alt="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="discount" placeholder="Discount code">
                <button>APPLY</button>
            </div>
            <div class='d-flex flex-row price'>
                <div class='totalPrice'>
                    <p>TOTAL 39.75€</p>
                </div>
                <p class='shippingCheckout'>*Shipping is calculated at checkout</p>
            </div>
            <div class='d-flex flex-row'>
                <textarea placeholder="Add a note to your order..." cols="50" rows="5"></textarea>
                <div class='refundsCheck'>
                    <input type="checkbox">
                    <p>I agree. No returns, refundsor exchange</p>
                    <button class='btn btn-primary'>KEEP BUYING</button>
                    <button class='btn btn-primary'>CHECK OUT</button>
                </div>

            </div>
        </div>
    </div>
    @endsection
