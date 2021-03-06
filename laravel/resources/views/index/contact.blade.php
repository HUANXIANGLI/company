@extends('layoutindex.index')
@section('content')
        <!--------------Content--------------->
<section class="container page-single">
    <div class="wrap-container zerogrid">
        <div class="col-2-3">
            <div id="main-content" class="wrap-col">
                <article class="single">
                    <div class="wrap-art">
                        <div class="col-1-2">
                            <div class="wrap-col">
                                <h2 class="title"><a href="#">Contact Us</a></h2>
                                <div class="row contact">
                                    <p class="address">JL.Kemacetan timur no.23. block.Q3<br>
                                        Jakarta-Indonesia</p>
                                    <p class="phone">+6221 888 888 90 <br>
                                        +6221 888 88891</p>
                                    <p class="mail">info@yourdomain.com</p>
                                </div>

                                <div class="google-maps">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7098.94326104394!2d78.0430654485247!3d27.172909818538997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1385710909804" width="400" height="300" frameborder="0" style="border:0"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-2">
                            <div class="wrap-col">
                                <div id="contact_form">
                                    <form name="form1" id="ff" method="post" action="contact.php">
                                        <label>
                                            <span>Enter your name:</span>
                                            <input type="text"  name="name" id="name" required>
                                        </label>
                                        <label>
                                            <span>Enter your email:</span>
                                            <input type="email"  name="email" id="email" required>
                                        </label>
                                        <label>
                                            <span>Your message here:</span>
                                            <textarea name="message" id="message"></textarea>
                                        </label>
                                        <center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="col-1-3">
            <div id="sidebar" class="wrap-col">
                <div class="wrap-slidebar">
                    <div class="widget wid-about">
                        <div class="wid-header">
                            <a href="#"><img src="images/49.jpg"></a>
                            <h4>About Us</h4>
                        </div>
                        <div class="wid-content">
                            <p>Hey there! I'm Elaine - a web designer + front-end developer from Ireland.
                                I work with bloggers and other passionate creatives to create a design that reflects them and helps them grow their audience!</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="wid-header">
                            <h4>Tags</h4>
                        </div>
                        <div class="wid-content">
                            <a href="#">animals ,</a>
                            <a href="#">cooking ,</a>
                            <a href="#">countries ,</a>
                            <a href="#">home ,</a>
                            <a href="#">likes ,</a>
                            <a href="#">photo ,</a>
                            <a href="#">travel ,</a>
                            <a href="#">video </a>
                        </div>
                    </div>
                    <div class="widget wid-posts">
                        <div class="wid-header">
                            <h4>Latest Posts</h4>
                        </div>
                        <div class="wid-content">
                            <div class="row post">
                                <a href="#"><img src="images/thumb4.jpg"/></a>
                                <div class="resent">
                                    <h6><a href="#">Lorem ipsum sit amet</a></h6><br>
                                    <p>March 1, 2015</p>
                                </div>
                            </div>
                            <div class="row post">
                                <a href="#"><img src="images/thumb5.jpg"/></a>
                                <div class="resent">
                                    <h6><a href="#">Lorem ipsum dolor sit</a></h6><br>
                                    <p>March 1, 2015</p>
                                </div>
                            </div>
                            <div class="row post">
                                <a href="#"><img src="images/thumb6.jpg"/></a>
                                <div class="resent">
                                    <h6><a href="#">Lorem sit amet</a></h6><br>
                                    <p>March 1, 2015</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget wid-archives">
                        <div class="wid-header">
                            <h4>Archives</h4>
                        </div>
                        <div class="wid-content">
                            <select>
                                <option value="empty" selected>Select Month</option>
                                <option value="3">March 2015</option>
                                <option value="2">Febuary 2015</option>
                                <option value="1">January 2015</option>
                            </select>
                        </div>
                    </div>
                    <div class="widget wid-flick">
                        <div class="wid-header">
                            <h4>Flick</h4>
                        </div>
                        <div class="wid-content">
                            <div class="row">
                                <div class="col-1-2">
                                    <div class="wrap-col">
                                        <a href="#"><img src="images/thumb1.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-1-2">
                                    <div class="wrap-col">
                                        <a href="#"><img src="images/thumb5.jpg"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1-2">
                                    <div class="wrap-col">
                                        <a href="#"><img src="images/thumb2.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-1-2">
                                    <div class="wrap-col">
                                        <a href="#"><img src="images/thumb4.jpg"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1-2">
                                    <div class="wrap-col">
                                        <a href="#"><img src="images/thumb3.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-1-2">
                                    <div class="wrap-col">
                                        <a href="#"><img src="images/thumb6.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection