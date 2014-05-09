@extends( 'master.default' )

@section( 'title' )

Scrybo | Inscribing Thoughts

@stop
@section( 'content' )

    <!-- #primary -->
    <div id="primary" class="site-content span7">

        <!-- #content -->
        <div id="content" role="main">

            <!-- blog-posts -->
            <div class="blog-posts row">    

            @include( 'blog.home' )

            </div>
            <!-- .blog-posts -->

        </div>
        <!-- #content -->

    </div>
    <!-- #primary -->

    <!-- #secondary -->
    <div id="secondary" class="widget-area span5" role="complementary">

        <!-- widget : search -->
        <aside class="widget widget_search">
            <h3 class="widget-title">Search</h3>
            <form role="search" method="get" id="searchform" action="#">
                <div>
                    <label class="screen-reader-text" for="s">Search for:</label>
                    <input type="text" value="" name="s" id="s" placeholder="ENTER KEYWORD">
                    <input type="submit" id="searchsubmit" value="Search">
                </div>
            </form>
        </aside>
        <!-- widget : search -->

        <!-- widget : text -->
        <aside class="widget widget_text">
            <h3 class="widget-title">ABOUT SCRYBO</h3>
            <div class="textwidget"></div>
        </aside>
        <!-- widget : text -->

        <!-- widget : tag_cloud -->
        <aside class="widget widget_tag_cloud">
            <h3 class="widget-title">Tags</h3>
            <div class="tagcloud"> 
                <a href="#" style="font-size: 8pt;">adaptive</a>
                <a href="#" style="font-size: 22pt;">design</a>
                <a href="#" style="font-size: 8pt;">html</a>
                <a href="#" style="font-size: 22pt;">responsive</a>
                <a href="#" style="font-size: 22pt;">think</a>
                <a href="#" style="font-size: 8pt;">web design</a>
                <a href="#" style="font-size: 8pt;">css</a>
                <a href="#" style="font-size: 22pt;">animations</a>
                <a href="#" style="font-size: 8pt;">layout</a>
                <a href="#" style="font-size: 14pt;">mobile</a>
                <a href="#" style="font-size: 22pt;">think</a>
                <a href="#" style="font-size: 8pt;">typography</a> 
            </div>
        </aside>
        <!-- widget : tag_cloud -->

        <!-- widget : recent_entries -->
        <aside class="widget widget_recent_entries">
            <h3 class="widget-title">Recent Posts</h3>
            <ul>
                <li><a href="#" title="Thinking About Responsive Design">Thinking About Responsive Design</a></li>
                <li><a href="#" title="Adaptive Vs. Responsive Layouts And Optimal Form Field Labels">Adaptive Vs. Responsive Layouts And Optimal Form Field Labels</a></li>
                <li><a href="#" title="Hello world!">Hello world!</a></li>
            </ul>
        </aside>
        <!-- widget : recent_entries -->

        <!-- widget : popular_entries -->
        <aside class="widget widget_popular_entries">
        <h3 class="widget-title">Popular Posts</h3>
            <ul>
                <li><a href="#" title="Thinking About Responsive Design">Thinking About Responsive Design</a></li>
                <li><a href="#" title="Adaptive Vs. Responsive Layouts And Optimal Form Field Labels">Adaptive Vs. Responsive Layouts And Optimal Form Field Labels</a></li>
                <li><a href="#" title="Hello world!">Hello world!</a></li>
            </ul>
        </aside>
        <!-- widget : popular_entries -->

        <!-- widget : categories -->
        <aside class="widget widget_categories">
        <h3 class="widget-title">Categories</h3>
            <ul>
                <li><a href="#" title="View all posts filed under Uncategorized">Web Design</a></li>
                <li><a href="#" title="View all posts filed under Uncategorized">Javascript</a></li>
                <li><a href="#" title="View all posts filed under Uncategorized">Typography</a></li>
                <li><a href="#" title="View all posts filed under Uncategorized">Freebies</a></li>
            </ul>
        </aside>
        <!-- widget : categories -->

        <!-- widget : newsletter -->
        <aside class="widget eemail_widget">
            <h3 class="widget-title">Email newsletter</h3>
            <div>
                <div class="eemail_caption"> Subscribe your email </div>
                <div class="eemail_msg"> <span id="eemail_msg"></span> </div>
                <div class="eemail_textbox">
                    <input type="email" class="eemail_textbox_class" id="eemail_txt_email" placeholder="ENTER EMAIL" maxlength="150" >
                    <div class="eemail_caption">
                        {{ $captchaURL }}
                    </div>
                    <div class="eemail_caption"> Not readable? <b class="changeCaptchaImage">Change text.</b> </div>
                    <input class="captcha_textbox" id="captcha_textbox" placeholder="ENTER THE TEXT FROM THE IMAGE" maxlength="150" type="text">
                </div>
                <div>
                    <input class="button blue d3"  value="Submit" type="button">
                </div>
            </div>
        </aside>
        <!-- widget : newsletter -->

    </div>
    <!-- #secondary -->

@stop