@extends('layout.app')

@section('content')
<div class="container d-flex justify-content-center w-100">
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Outfits</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Champion outfit</li>
                    </ol>
                </nav>
                <img class='w-50' src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="">
                <div class="photos">
                    <img src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="">
                    <img src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="">
                    <img src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="">
                </div>
                <div class="infoProduct">
                    <ul>
                        <li>
                            <p>Please check the size and measures</p>
                        </li>
                        <li>
                            <p>We don't accept exchanges or returns</p>
                        </li>
                        <li>
                            <p>Vintage clothing is used clothing</p>
                        </li>
                        <li>
                            <p>All clothes are sanitized and ironed (except wholesale)</p>
                        </li>
                        <li>
                            <p>If you have any questions, contact us before buying and we will help you</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6  productInfo">
                <h3>Champion outfit</h3>
                <div class="ref">
                    <p><strong> Champion outfit | add 30€</strong></p>
                    <p>REF: 114344</p>
                </div>
                <div class="sizeChart">
                    <p>
                        <a data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <i class='bi bi-card-list'></i> Size chart
                        </a>
                    </p>
                    <div class="collapse sizeChartInfo" id="collapseExample">
                        <div class="card card-body sizeChartInfo">
                            <p>Measures:</p>
                            <table class="table table-borderless tableSizeChart">
                                <tbody>
                                    <tr>
                                        <th scope="row">Garnet Nylon Jacket (size M)</th>
                                        <td>Lenght 75 cm - Chest 60 cm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Red Nebraska Swearshirt (Size M)</th>
                                        <td>Lenght 69 cm - Chest 57 cm</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Black Champion Swearshirt (Size M)</th>
                                        <td>Lenght 72 cm - Chest 56 cm</td>
                                    </tr>
                                </tbody>
                            </table>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="buttonsDetails">
                    <button class='btn btn-primary'>ADD TO WISHLIST</button>
                    <button class='btn btn-primary'>ADD TO CART</button>
                </div>
                <div class="RRSS">
                    <p>Sustainable fashion, saving the planet stylish</p>
                    <div class="icons">
                        <div class="RRSSIcons"><i class='bi bi-facebook'></i></div>
                        <div class="RRSSIcons"><i class='bi bi-chat-fill'></i></div>
                        <div class="RRSSIcons"><i class='bi bi-whatsapp'></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class='d-flex flex-row infoPayment'>
            <div class="info">
                <i class='bi bi-bag-fill'></i>
                <p><strong> 2000+ Clients Love us!</strong></p>
                <p>We offer best service and great prices onhigh quality products</p>
            </div>
            <div class="info">
                <i class='bi bi-globe'></i>
                <p><strong>Shipping to 185 countries</strong></p>
                <p>Our store operates all over the world and you can enjoy worldwide delivery</p>
            </div>
            <div class="info">
                <i class='bi bi-credit-card'></i>
                <p><strong>100% safe payment</strong></p>
                <p>Buy with confidenceusing the world's most popular and securepayment methods</p>
            </div>
            <div class="info">
                <i class='bi bi-shield-check'></i>
                <p><strong>3000+ succesful deliveries</strong></p>
                <p>Our Buyer Protection covers your purchasefrom click to delivery</p>
            </div>
        </div>
        <div class='d-flex flex-column otherProducts'>
            <h3>YOU MAY ALSO LIKE</h3>
            <div class="productMayLike d-flex flex-row">
                <div class=" product">
                    <div class="category">
                        <p>24€/KG</p>
                    </div>
                    <div class='productPrice'>
                        <p>8,64€</p>
                    </div>
                    <div class="card" style="width: 13rem;">
                        <img class="card-img-top" src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="product">
                    <div class="category">
                        <p>24€/KG</p>
                    </div>
                    <div class='productPrice'>
                        <p>11,52€</p>
                    </div>
                    <div class="card" style="width: 13rem;">
                        <img class="card-img-top" src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="product">
                    <div class="category">
                        <p>24€/KG</p>
                    </div>
                    <div class='productPrice'>
                        <p>9,60€</p>
                    </div>
                    <div class="card" style="width: 13rem;">
                        <img class="card-img-top" src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="product">
                    <div class="category">
                        <p>24€/KG</p>
                    </div>
                    <div class='productPrice'>
                        <p>10,88€</p>
                    </div>
                    <div class="card" style="width: 13rem;">
                        <img class="card-img-top" src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="product">
                    <div class="category">
                        <p>OUTFITS</p>
                    </div>
                    <div class='productPrice'>
                        <p>35€</p>
                    </div>
                    <div class="card" style="width: 13rem;">
                        <img class="card-img-top" src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="Card image cap">
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
