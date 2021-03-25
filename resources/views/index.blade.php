@extends('layout.app')

    @section('content')

    <!--            CARROUSEL                        -->
    <div class="container">
        <div class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://demoprestashop.prestarocket.com/modules/ps_imageslider/images/sample-1.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="https://demoprestashop.prestarocket.com/modules/ps_imageslider/images/sample-2.jpg" class="d-block w-100" alt="..." />
                </div>
            </div>
        </div>
    </div>

    <!--            PRODUCTS                        -->
    <section class="container row mx-auto w-75 mainProducts">
        <div class="row justify-content-start">
            <div class="col-3 product">
                <div class="category">
                    <p>OUTFITS</p>
                </div>
                <div class='productPrice'>
                    <p>30€</p>
                </div>
                <div class="card" style="width: 13rem;">
                    <a href="/details"><img class="card-img-top" src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="Card image cap"></a>
                </div>
            </div>
            <div class="col-3 product">
                <div class="category">
                    <p>COMBOS</p>
                </div>
                <div class='productPrice'>
                    <p>30€</p>
                </div>
                <div class="card" style="width: 13rem;">
                <a href="/details"><img class="card-img-top" src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="Card image cap"></a>
                </div>
            </div>
            <div class="col-3 product">
                <div class="category">
                    <p>13€/KG</p>
                </div>
                <div class='productPrice'>
                    <p>30€</p>
                </div>
                <div class="card" style="width: 13rem;">
                <a href="/details"><img class="card-img-top" src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="Card image cap"></a>
                </div>
            </div>
            <div class="col-3 product">
                <div class="category">
                    <p>OUTFITS</p>
                </div>
                <div class='productPrice'>
                    <p>30€</p>
                </div>
                <div class="card" style="width: 13rem;">
                <a href="/details"><img class="card-img-top" src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="Card image cap"></a>
                </div>
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col-3 product">
                <div class="category">
                    <p>COLLECTORS</p>
                </div>
                <div class='productPrice'>
                    <p>30€</p>
                </div>
                <div class="card" style="width: 13rem;">
                <a href="/details"><img class="card-img-top" src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="Card image cap"></a>
                </div>
            </div>
            <div class="col-3 product">
                <div class="category">
                    <p>OUTFITS</p>
                </div>
                <div class='productPrice'>
                    <p>30€</p>
                </div>
                <div class="card" style="width: 13rem;">
                <a href="/details"><img class="card-img-top" src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="Card image cap"></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 ad">

            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col-3 product">
                <div class="category">
                    <p>OUTFITS</p>
                </div>
                <div class='productPrice'>
                    <p>30€</p>
                </div>
                <div class="card" style="width: 13rem;">
                <a href="/details"><img class="card-img-top" src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="Card image cap"></a>
                </div>
            </div>
            <div class="col-3 product">
                <div class="category">
                    <p>WHOLESALE</p>
                </div>
                <div class='productPrice'>
                    <p>30€</p>
                </div>
                <div class="card" style="width: 13rem;">
                <a href="/details"><img class="card-img-top" src="https://img01.ztat.net/article/spp-media-p1/19c03d22078d3bb28cc5096a39575bef/440317feb05742f3afce61c91e49682c.jpg" alt="Card image cap"></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 ad">
            </div>
        </div>

        <button type="button" class="btn btn-primary filter" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat"><i class='bi bi-funnel'></i></button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5 class="modal-title" id="exampleModalLabel">Franchise</h5>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select franchise</option>
                            <option value="1">Barcelona</option>
                            <option value="2">Madrid</option>
                            <option value="3">Sevilla</option>
                        </select>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title" id="exampleModalLabel">Sizes</h5>
                        <div class='buttons'>
                            <button class='sizes'>XS 80-88</button>
                            <button class='sizes'>S 88-96</button>
                            <button class='sizes'>M 96-104</button>
                            <button class='sizes'>L 104-112</button>
                            <button class='sizes'>XL 112-124</button>
                            <button class='sizes'>XXL 124-136</button>
                            <button class='sizes'>XXXL 136-148</button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title" id="exampleModalLabel">Price</h5>
                        <input class="multi-range" type="range" />
                    </div>
                    <div class="modalButtons">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                        <button type="button" class="btn btn-primary">APPLY FILTERS</button>
                </div>
            </div>
        </div>
    </section>
    @endsection
