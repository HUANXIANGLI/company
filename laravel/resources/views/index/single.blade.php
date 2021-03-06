@extends('layoutindex.index')
@section('content')
        <!--------------Content--------------->
<section class="container page-single">
    <div class="wrap-container zerogrid">
        <div class="col-2-3">
            <div id="main-content" class="wrap-col">
                <article class="single">
                    <div class="art-header">
                        <a href="#"><img src="images/img1.jpg" /></a>
                        <div class="info-single bg-red">
                            <ul class="clearfix">
                                <li><a href="#"><img src="images/avatar.png"/>Administrator</a></li>
                                <li><a href="#">March 1, 2015</a></li>
                                <li><a href="#">Technology</a></li>
                                <li class="last"><a href="#">Leave a comment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="art-content">
                        <div class="main-post">
                            <h2 class="title"><a href="#">Nunc vitae hendrerit leo</a></h2>
                            <p class="entry-meta">Posted on <a href="#">February 1, 2015</a> by vlad</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            <blockquote><p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet vultatup duista.</p></blockquote>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis
                                at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p>
                            <h3>Heading 1</h3>
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse lorem ipsum dolor sit amet.</p>
                            <h3>Heading 2</h3>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                                At vero eos et accusam et justo.</p>
                            <h3>Heading 3</h3>
                            <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                At vero eos et accusam et justo duo dolores et ea rebum hendrerit in vulputate velit esse molestie.</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            <p><code>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</code></p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            <div class="note">
                                <ol>
                                    <li>Lorem ipsum</li>
                                    <li>Sit amet vultatup nonumy</li>
                                    <li>Duista sed diam</li>
                                </ol>
                                <div class="clear"></div>
                            </div>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>
                            <div class="row">
                                <div class="content-social">
                                    <a href="#"><img src="images/facebook.png" title="facebook"/></a>
                                    <a href="#"><img src="images/twitter.png" title="twitter"/></a>
                                    <a href="#"><img src="images/google.png" title="google"/></a>
                                    <a href="#"><img src="images/pinterest.png" title="pinterest"/></a>
                                    <a href="#"><img src="images/instagram.png" title="instagram"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="art-related">
                        <div class="wrap-art-related">
                            <h1 class="title"><a href="#">Related Posts</a></h1>
                            <div class="row">
                                <div class="col-1-3"><div class="wrap-col">
                                        <a href="#"><img src="images/thumb2.jpg"></a>
                                        <a href="#"><h4>Grandma's Village</h4></a>
                                    </div></div>
                                <div class="col-1-3"><div class="wrap-col"></a>
                                        <a href="#"><img src="images/thumb4.jpg">
                                            <a href="#"><h4>Wind</h4></a>
                                    </div></div>
                                <div class="col-1-3"><div class="wrap-col"></a>
                                        <a href="#"><img src="images/thumb3.jpg">
                                            <a href="#"><h4>Animal Kingdom</h4></a>
                                    </div></div>
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



