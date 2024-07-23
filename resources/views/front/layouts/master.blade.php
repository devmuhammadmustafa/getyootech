<!doctype html>
<html lang="{{app()->getLocale()}}">

<head>
        @include("front.partials.head")
</head>


<body>
<!-- body_wrap - start -->
<div class="body_wrap">

    <!-- backtotop - start -->
    @include('front.components.backtotop')
    <!-- backtotop - end -->

    <!-- preloader - start -->
    <div id="preloader"></div>
    <!-- preloader - end -->

    <!-- header_section - start
    ================================================== -->
    <header class="header_section">
        @include('front.partials.header.header-top')
        @include('front.partials.header.header-middle')
        @include('front.partials.header.header-bottom')
    </header>
    <!-- header_section - end
    ================================================== -->

    <!-- main body - start
    ================================================== -->
    <main>

        <!-- sidebar cart - start
        ================================================== -->
        @include('front.partials.sidebar.index')
        <!-- sidebar cart - end
        ================================================== -->

        <!-- product quick view modal - start
        ================================================== -->
        @include('front.partials.product.detail')
        <!-- product quick view modal - end
        ================================================== -->

        <!-- slider_section - start
        ================================================== -->
        @include('front.partials.home.main-slider')
        <!-- slider_section - end
        ================================================== -->

        <!-- policy_section - start
        ================================================== -->
        @include('front.partials.policy.index')
        <!-- policy_section - end
        ================================================== -->

        <!-- category_section - start
        ================================================== -->
        @include('front.partials.home.top-category')
        <!-- category_section - end
        ================================================== -->



        <!-- new_arrivals_section - start
        ================================================== -->
        @include('front.partials.home.new-arrival')
        <!-- new_arrivals_section - end
        ================================================== -->

        <!-- product_section - start
        ================================================== -->
        @include('front.partials.home.product-section')
        <!-- product_section - end
        ================================================== -->

        <!-- brand_section - start
        ================================================== -->
        @include('front.partials.brands.index')
        <!-- brand_section - end
        ================================================== -->

        <!-- newsletter_section - start
        ================================================== -->
        @include('front.partials.subscribe.index')
        <!-- newsletter_section - end
        ================================================== -->

    </main>
    <!-- main body - end
    ================================================== -->

    <!-- footer_section - start
    ================================================== -->
    <footer class="footer_section">
        @include('front.partials.footer.footer-top')
        @include('front.partials.footer.footer-bootom')
    </footer>
    <!-- footer_section - end
    ================================================== -->

</div>
<!-- body_wrap - end -->

<!-- fraimwork - jquery include -->
<script src="/front/assets/js/jquery.min.js"></script>
<script src="/front/assets/js/popper.min.js"></script>
<script src="/front/assets/js/bootstrap.min.js"></script>
<script src="/front/assets/js/bootstrap5-dropdown-ml-hack.js"></script>

<!-- carousel - jquery include -->
<script src="/front/assets/js/slick.min.js"></script>

<!-- popup - jquery include -->
<script src="/front/assets/js/magnific-popup.min.js"></script>

<!-- jquery-ui - jquery include -->
<script src="/front/assets/js/jquery-ui.js"></script>

<!-- off canvas sidebar - jquery include -->
<script src="/front/assets/js/mCustomScrollbar.js"></script>

<!-- select option - jquery include -->
<script src="/front/assets/js/nice-select.min.js"></script>

<!-- countdown timer - jquery include -->
<script src="/front/assets/js/countdown.js"></script>

<!-- counter up - jquery include -->
<script src="/front/assets/js/counterup.min.js"></script>
<script src="/front/assets/js/waypoints.min.js"></script>

<!-- custom - jquery include -->
<script src="/front/assets/js/main.js"></script>

</body>
</html>
