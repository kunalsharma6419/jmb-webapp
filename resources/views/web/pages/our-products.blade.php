@extends('web.layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- ========================
           page title
        =========================== -->
    <section id="page-title" class="page-title page-title-layout4 bg-overlay bg-parallax text-center">
        <div class="bg-img"><img src="web/assets/images/page-titles/111.avif" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <h1 class="pagetitle__heading">Our Products</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Products</li>
                        </ol>
                    </nav>
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
          Blog Grid
        ========================= -->
    <section id="blogGrid" class="blog blog-grid pt-120">
        <div class="container">
            <div class="row">
                <!-- Blog Item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/blog/grid/a.png" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">

                                </div><!-- /.blog-meta-cat -->
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#">Flexible Packaging</a></h4>

                            <p class="blog__desc">Lightweight, versatile packaging options suitable for food and beverages,
                                ensuring freshness and extending shelf life.

                            </p>

                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Blog Item #2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/blog/grid/b.jpeg" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">

                                </div><!-- /.blog-meta-cat -->
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#"> Agri Shed Nets</a></h4>

                            <p class="blog__desc">Durable nets that protect crops while allowing essential sunlight, perfect
                                for agriculture and horticulture.
                            </p>

                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Blog Item #3 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/blog/grid/c.jpeg" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">

                                </div><!-- /.blog-meta-cat -->
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#">PP Bags for Garment Packaging
                                </a></h4>

                            <p class="blog__desc">High-quality polypropylene bags designed to keep garments safe from dust
                                and moisture during transit.
                            </p>

                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Blog Item #4 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/blog/grid/d.webp" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">

                                </div><!-- /.blog-meta-cat -->
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#">PE Bags for Nurseries</a></h4>

                            <p class="blog__desc">Specialized polyethylene bags ideal for young plants, providing durability
                                and flexibility.</p>

                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Blog Item #5 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/blog/grid/e.webp" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">

                                </div><!-- /.blog-meta-cat -->
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#">Garbage Bags</a></h4>

                            <p class="blog__desc">Heavy-duty, environmentally friendly garbage bags for efficient waste
                                disposal in various settings.
                            </p>

                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Blog Item #6 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/blog/grid/f.jpg" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">

                                </div><!-- /.blog-meta-cat -->
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#"> D-Cut Garment Bags</a></h4>

                            <p class="blog__desc">Convenient D-cut bags providing excellent protection and presentation for
                                retail and e-commerce.
                            </p>

                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->

                <!-- Blog Item #6 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/blog/grid/g.jpeg" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">

                                </div><!-- /.blog-meta-cat -->
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#"> Environmentally Friendly Biodegradable Bags</a>
                            </h4>

                            <p class="blog__desc">Sustainable bags that degrade naturally, ensuring minimal environmental
                                impact while providing quality performance.

                            </p>

                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->

                <!-- Blog Item #6 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/blog/grid/h.jpeg" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">

                                </div><!-- /.blog-meta-cat -->
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#"> PE Shrink Film</a></h4>

                            <p class="blog__desc">A versatile film for securing and enhancing beverage products, available
                                in printed and plain options.
                            </p>

                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->

                <!-- Blog Item #6 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/blog/grid/i.webp" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">

                                </div><!-- /.blog-meta-cat -->
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#"> Printed Labels</a></h4>

                            <p class="blog__desc">Eye-catching printed labels that provide valuable information while
                                boosting brand visibility.
                            </p>

                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->

                <!-- Blog Item #6 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/blog/grid/j.jpg" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">

                                </div><!-- /.blog-meta-cat -->
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#"> Heavy Duty Tarpaulin</a></h4>

                            <p class="blog__desc">Sturdy tarps for outdoor events, construction sites, and temporary
                                covers, available in various sizes.
                            </p>

                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->

                <!-- Blog Item #6 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/blog/grid/k.jpeg" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">

                                </div><!-- /.blog-meta-cat -->
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#"> Plastic Rope and Sutli</a></h4>

                            <p class="blog__desc">Durable ropes and sutlis for bundling, securing, or temporary setups,
                                designed for strength and weather resistance.
                            </p>

                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

        </div><!-- /.container -->
    </section><!-- /.blog Grid -->
@endsection
