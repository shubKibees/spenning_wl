@extends('include.app')
@section('content')
<section class="banner inner-banner">
    <img class="w-100" src="images/banner-product-detail.jpg" alt="">   
    <div class="banner-text">
        <div class="container text-center">
            <div class="breadcrumb">
                <ul class="d-flex justify-content-center">
                    <li><a href="index.php">Home</a></li>
                    <li>Products</li>
                </ul>
            </div>
            <div class="heading">                                  
                Products
            </div>               
        </div>
    </div>     
</section>
<section class="product-detail-page prodouct-overview-sec common-spacing-top-bottom">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="left d-flex justify-content-between">
            <div class="tabs">
                <ul>
                    <li><a class="active" href="#product-1"><img src="images/austin-club-plus.jpg" alt=""></a></li>
                    <li><a href="#product-2"><img src="images/austin-club-plus-1.jpg" alt=""></a></li>
                    <li><a href="#product-3"><img src="images/austin-club-plus-2.jpg" alt=""></a></li>
                </ul>
            </div>
            <div class="large-image">
                <div class="inner active" id="product-1">
                    <img src="images/austin-club-plus.jpg" alt="">
                </div>
                <div class="inner" id="product-2">
                    <img src="images/austin-club-plus-1.jpg" alt="">
                </div>
                <div class="inner" id="product-3">
                    <img src="images/austin-club-plus-2.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="right">
            <div class="w-100 d-flex justify-content-between">
                <div class="title-text">Austin Club Plus</div>
                <div class="features d-flex justify-content-end">
                    <span>Waterproof </span>
                    <span>Super Premium</span>
                </div>
            </div>
            <div class="description">
                <p>
                Austin Club Plus is structural plywood with more tensile and compressive strength. It is manufactured with IS 10701 standards and is made to go through the best preservatives to ensure long-term durability and strength. It comes in a variety of sizes and thicknesses, which makes it fit for various building applications. We believe in our product, which is why we offer a 500% LIFETIME WARRANTY ON AUSTIN CLUB PLUS. This is the first time any plywood brand has done this in India.</p>
                <div class="others-feature">
                    <div class="availbility-other-sec">
                        <p>Also Available in Blockboard <a href="#">Click Here</a></p>
                    </div>
                    <div class="available-sec">
                        <div class="title-text">AVAILABLE IN</div>
                        <div class="title-text products-sizes">SIZE: 6x3, 6x4, 7x3, 7x4, 8x3, 8x4</div>
                        <div class="title-text products-sizes thickness">THICKNESS: 4mm, 6mm, 9mm, 12mm, 16mm, 19mm, 25mm</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-detail-page usp-section common-spacing-top-bottom">
    <div class="container d-flex justify-content-end">
        <div class="data d-flex justify-content-end">
            <div class="specification">
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <div class="icon"><img src="images/icon-usp.png" alt=""></div>
                    <div class="title-text">
                       500% Lifetime Warranty
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <div class="icon"><img src="images/icon-usp.png" alt=""></div>
                    <div class="title-text">
                    Triple Calibration
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <div class="icon"><img src="images/icon-usp.png" alt=""></div>
                    <div class="title-text">
                    Fire-Guard Technology
                    </div>
                </div>
            </div>
            <div class="specification">
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <div class="icon"><img src="images/icon-usp.png" alt=""></div>
                    <div class="title-text">
                    Anti Virus 
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <div class="icon"><img src="images/icon-usp.png" alt=""></div>
                    <div class="title-text">
                    Structural Grade

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-detail-page common-spacing-top-bottom">
    <div class="container">
        <div class="heading text-center"> Technical Specifications</div>
        <div class="row">
            <div class="col-md-12">
            <div class="product-table">
                        
                        <table>
                            <tbody><tr>
                                <th style="
    width: 311px;
">Tests</th>
                                <th>Requirement as per IS 10701:2012</th>
                                <th>Test Result</th>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Dimension and Tolerance</span></p>
                                <p>a) Length, mm </p>
                                <p> b) Width, mm </p>
                                <p> c) Thickness, %</p>
                                <ul>
                                    <li>Less than 6mm</li>
                                    <li>6mm and above</li>                            
                                </ul>
                                <p>Squareness, %</p>
                                <p>Edge Straightness, %</p>
                                </td>
                                <td>
                                    <p>-</p>
                                    <p>+6mm, -0mm</p>
                                    <p>+3mm, -0mm</p>
                                    <p>-</p>
                                    <p>+10%</p>
                                    <p>+5%</p>
                                    <p>Max 0.2%</p>
                                    <p>Max 0.2%</p>
                                </td>
                                <td>
                                <p>-</p>
                                    <p>+2mm, -0mm</p>
                                    <p>+1mm, -0mm</p>
                                    <p>-</p>
                                    <p>+2.5%</p>
                                    <p>+1.75%</p>
                                    <p>0.09</p>
                                    <p>0.08</p>
                                </td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png">
                                <span> Workmanship &amp; Finish</span></p>
                                </td>
                                <td>Satisfactory</td>
                                <td>Satisfactory</td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Moisture Content, %</span></p></td>
                                <td>5-15%</td>
                                <td>8-10%</td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Glue Shear Strength in dry state,
                                    Glue shear strength, N</span></p></td>
                                    <td>Min. 1350</td>
                                    <td>1650</td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Resistance to water<br>(After 72 hrs boiling). Glue shear strength, N</span></p></td>
                                <td>Min.1000</td>
                                <td>1290</td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Resistance to micro-organism,<br>Glue shear strength, N</span></p></td>
                                <td>Min.1000</td>
                                <td>1250</td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Tensile strength, N/mm<sup>2</sup</span></p>
                                <ul>
                                    <li>Along the grain</li>
                                    <li>Across the grain</li>                            
                                </ul>
                            </td>
                                <td>
                                    <p>-</p>
                                    <p>Min. 55</p>
                                    <p>Min. 35</p>
                                </td>
                                <td>
                                    <p>-</p>
                                    <p>75</p>
                                    <p>44</p>
                                </td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Compressive strength, N/mm<sup>2</sup</span></p>
                                <ul>
                                    <li>Along the grain</li>
                                    <li>Across the grain</li>                            
                                </ul>
                            </td>
                                <td>
                                    <p>-</p>
                                    <p>Min. 35</p>
                                    <p>Min. 30</p>
                                </td>
                                <td>
                                    <p>-</p>
                                    <p>45.7</p>
                                    <p>39.5</p>
                                </td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Panel shear strength, N/mm<sup>2</sup</span></p>
                            </td>
                                <td>
                                12.5
                                </td>
                                <td>
                                14.25
                                </td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Modulus of Rigidity, N/mm<sup>2</sup</span></p>
                            </td>
                                <td>
                                Min. 588
                                </td>
                                <td>
                                605
                                </td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Rolling shear strength, N/mm<sup>2</sup</span></p>
                            </td>
                                <td>
                                Min. 3
                                </td>
                                <td>
                                3.65
                                </td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Static Bending Strength Modulus of Elasticity, N/mm<sub>2</sub></span></p>
                                <p>a) Parallel to face grain </p>
                                <ul>
                                    <li>Average</li>
                                    <li>Minimum individual</li>                            
                                </ul>
                                <p>b)Perpendicular to face grain</p>
                                <ul>
                                    <li>Average</li>
                                    <li>Minimum individual</li>                            
                                </ul>
                                </td>
                                <td>
                                    <p>-</p>
                                    <p>-</p>
                                    <p>7500</p>
                                    <p>6700</p>
                                    <p>-</p>
                                    <p>4000</p>
                                    <p>3600</p>
                                </td>
                                <td>
                                <p>-</p>
                                    <p>-</p>
                                    <p>9350</p>
                                    <p>8120</p>
                                    <p>-</p>
                                    <p>6230</p>
                                    <p>5590</p>
                                </td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Static Bending Strength Modulus of Rupture, N/mm<sub>2</sub></span></p>
                                <p>a) Parallel to face grain </p>
                                <ul>
                                    <li>Average</li>
                                    <li>Minimum individual</li>                            
                                </ul>
                                <p>b)Perpendicular to face grain</p>
                                <ul>
                                    <li>Average</li>
                                    <li>Minimum individual</li>                            
                                </ul>
                                </td>
                                <td>
                                    <p>-</p>
                                    <p>-</p>
                                    <p>50</p>
                                    <p>45</p>
                                    <p>-</p>
                                    <p>30</p>
                                    <p>27</p>
                                </td>
                                <td>
                                <p>-</p>
                                    <p>-</p>
                                    <p>69.0</p>
                                    <p>61.0</p>
                                    <p>-</p>
                                    <p>55.6</p>
                                    <p>52.0</p>
                                </td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Wet Bending Strength | Modulus of Elasticity,, N/mm<sub>2</sub></span></p>
                                <p>a) Parallel to face grain </p>
                                <ul>
                                    <li>Average</li>
                                    <li>Minimum individual</li>                            
                                </ul>
                                <p>b)Perpendicular to face grain</p>
                                <ul>
                                    <li>Average</li>
                                    <li>Minimum individual</li>                            
                                </ul>
                                </td>
                                <td>
                                    <p>-</p>
                                    <p>-</p>
                                    <p>3750</p>
                                    <p>3400</p>
                                    <p>-</p>
                                    <p>2000</p>
                                    <p>1800</p>
                                </td>
                                <td>
                                <p>-</p>
                                    <p>-</p>
                                    <p>5430</p>
                                    <p>4950</p>
                                    <p>-</p>
                                    <p>4430</p>
                                    <p>3950</p>
                                </td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Wet Bending Strength | Modulus of Rupture, N/mm<sub>2</sub></span></p>
                                <p>a) Parallel to face grain </p>
                                <ul>
                                    <li>Average</li>
                                    <li>Minimum individual</li>                            
                                </ul>
                                <p>b)Perpendicular to face grain</p>
                                <ul>
                                    <li>Average</li>
                                    <li>Minimum individual</li>                            
                                </ul>
                                </td>
                                <td>
                                    <p>-</p>
                                    <p>-</p>
                                    <p>25</p>
                                    <p>22</p>
                                    <p>-</p>
                                    <p>15</p>
                                    <p>13</p>
                                </td>
                                <td>
                                <p>-</p>
                                    <p>-</p>
                                    <p>39.2</p>
                                    <p>33.0</p>
                                    <p>-</p>
                                    <p>45.5</p>
                                    <p>39.6</p>
                                </td>
                            </tr>
                            <tr>
                                <td><p><img src="http://49.205.180.247/austin-landing-2/img/go-map-icon.png"><span>Preservative Treatment Test Preservative Chemicals, in Kg/m<sub>2</sub></span></p>
                                <p>a) Copper </p>
                                <p>b)Chromium</p>
                                <p>c) Retention of total preservative</p>
                                </td>
                                <td>
                                    <p>-</p>
                                    <p>-</p>
                                    <p>-</p>
                                    <p>Min 12.0 Kg</p>
                                    
                                </td>
                                <td>
                                <p>-</p>
                                    <p>9.1</p>
                                    <p>6.5</p>
                                    <p>15.6</p>
                                    
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
            </div>
        </div>
    </div>
</section>

@stop