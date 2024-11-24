<div class="col-md-3 col-sm-12 col-xs-12 sidebar-side">
                    <div class="sidebar-content">

                    <?php 
                        if(is_active_sidebar('main_sidebar')){
                            echo dynamic_sidebar('main-sidebar');
                        }
                    ?>

                        <div class="sidebar-about centred">
                            <div class="sidebar-title">ABOUT ME</div>
                            <figure class="img-box"><img src="<?php echo get_template_directory_uri();?>/images/home/1.png" alt=""></figure>
                            <h5 class="name">Jassy Beula</h5>
                            <div class="text"><p>These days are all share them with me oh baby just sit right back and you will hear a tale a tale of a fateful trip that started.</p></div>
                            <ul class="social-link">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>


                        <div class="sidebar-post">
                            <?php
                                if(is_active_sidebar('footer-sidebar')){
                                    echo dynamic_sidebar('footer-sidebar');
                                }
                            ?> 
                            <div class="sidebar-title">RECENT POST</div>
                                <div class="single-post">
                                    <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri();?>/images/home/p1.jpg" alt=""></figure></a></div>
                                    <h6><a href="post1.html">Fleeing from the Cylon tyre</a></h6>
                                    <div class="text">JULY 09, 2018</div>
                                </div>
                                <div class="single-post">
                                    <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri();?>/images/home/p2.jpg" alt=""></figure></a></div>
                                    <h6><a href="post1.html">Life support systems return</a></h6>
                                    <div class="text">MAY 19, 2018</div>
                                </div>
                                <div class="single-post">
                                    <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri();?>/images/home/p3.jpg" alt=""></figure></a></div>
                                    <h6><a href="post1.html">Eoner on a crusade</a></h6>
                                    <div class="text">AUGUST 09, 2018</div>
                                </div>
                                <div class="single-post">
                                    <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri();?>/images/home/p4.jpg" alt=""></figure></a></div>
                                    <h6><a href="post1.html">Aboard were expecting you</a></h6>
                                    <div class="text">SEPTEMBER 10, 2018</div>
                                </div>
                                <div class="single-post">
                                    <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri();?>/images/home/p5.jpg" alt=""></figure></a></div>
                                    <h6><a href="post1.html">Our dreams come true</a></h6>
                                    <div class="text">OCTOBER 09, 2018</div>
                                </div>
                             </div>


                        <div class="sidebar-newsletter centred">
                            <div class="title"><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;NEWSLETTER</div>
                            <div class="text">These days are all share them wit me</div>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email Address" required="">
                                    <button type="submit" class="btn-one">SUBSCRIBE</button>
                                </div>
                            </form>
                        </div>


                        <div class="sidebar-instagram">
                            <div class="sidebar-title">INSTAGRAM</div>
                            <ul class="img-list clearfix"> 
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/home/i1.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/home/i2.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/home/i3.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/home/i4.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/home/i5.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/home/i6.jpg" alt=""></a></figure></li>
                            </ul>
                        </div>


                        <div class="sidebar-categories">
                            <div class="sidebar-title">CATEGORIES</div>
                            <ul class="categories-list"> 
                                <li><a href="#">Beauty<span>(3)</span></a></li>
                                <li><a href="#">Dressing<span>(8)</span></a></li>
                                <li><a href="#">Fitness <span>(7)</span></a></li>
                                <li><a href="#">Lifestyle<span>(6)</span></a></li>
                                <li><a href="#">Travel<span>(9)</span></a></li>
                            </ul>
                        </div>


                        <div class="sidebar-img-content">
                            <div class="single-item">
                                <figure class="img-box"><img src="<?php echo get_template_directory_uri();?>/images/home/12.jpg" alt=""></figure>
                                 <div class="inner-box">
                                    <div class="content">
                                        <div class="meta-text"><a href="#">Travel</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <figure class="img-box"><img src="<?php echo get_template_directory_uri();?>/images/home/13.jpg" alt=""></figure>
                                 <div class="inner-box">
                                    <div class="content">
                                        <div class="meta-text"><a href="#">MUSIC</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                