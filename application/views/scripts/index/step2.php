<!-- Steps Breadcramps -->
<div id="steps-progress">
        <ul>
            <li><strong>Step 1.</strong> Choose Template</li>
            <li><strong>Step 2.</strong> Preview &amp; Edit</li>
            <li class="last"><strong>Step 3.</strong> Check &amp; Share</li>
        </ul>
    </div>
<!-- Templates Carousel -->
    <div class="bg-carousel">
    <section class="container_12 clearfix">
        <div class="grid_12">
            <div id="carousel2" class="es-carousel-wrapper">
                <div class="es-carousel">
                    <ul id="templatesMenu">
                        <li class="free_template">
                            <a href="template1">
                                <img src="img/car-img1.jpg">
                            </a>
                        </li>
                        <li class="free_template">
                            <a href="template2">
                                <img src="img/car-img1.jpg">
                            </a>
                        </li>
                        <li class="paid_template">
                            <a href="template3">
                                <img src="img/car-img1.jpg">
                            </a>
                        </li>
                        <li class="paid_template">
                            <a href="template4">
                                <img src="img/car-img1.jpg">
                            </a>
                        </li>
                        <li class="free_template">
                            <a href="template4">
                                <img src="img/car-img1.jpg">
                            </a>
                        </li>
                        <li class="paid_template">
                            <a href="template4">
                                <img src="img/car-img1.jpg">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    </div>
<!-- Resume Container -->
    <div class="resume-bg">
    <section class="container_12 clearfix">
        <div class="grid_12">
            <h1 class="aligncenter">Preview &amp; Edit</h1>
            <div id="resume">
            <!-- ******************** Profile Begin ******************** -->
                Text
                <div id="param_name" class="param">
                    Text <a href="#" class="hide-show">hide</a>
                    <p>Ivan Ivanov<br>bla<br>bla</p>
                </div>
                <div id="param_name2" class="param">
                    Text <a href="#" class="hide-show">hide</a>
                    <p>Ivan Ivanov<br>bla<br>bla<br>bla<br>bla</p>
                </div>
            <!-- ******************** Profile End ******************** -->
            </div>
        </div>
    </section>
    </div>
<!-- Steps Menu -->
    <div id="steps-menu">
        <div id="steps-menu-container">
            <a href="" id="prev">prev</a>
            <a href="step3.html" id="next">next</a>
            <a href="buy" id="buy">buy</a>
        </div>
    </div>
<!-- Buy Modal Window -->   
    <div id="buyWindow">
        <div id="buyBg"></div>
        <div id="part">
            <h2>buy template</h2>
            <div id="buyButtons">
                <a href="#" id="buyTemp">buy</a>
                <a href="#" id="closeBuyTemp">close</a>
            </div>
        </div>
    </div>
<!-- Carousel -->
<script src="js/jquery.elastislide.js"></script>
    <script type="text/javascript">
        jQuery('#carousel2').elastislide({
            imageW  : 187,
            minItems    : 4,
            onClick     : function() {}
        });
    </script>