@extends( 'master.default' )
@section( 'title' )

Scrybo | Panel

@stop

@section( 'content' )
<div id="primary" class="site-content span12">
    
<h1>Admin Panel</h1>

    <!-- .span12 -->
    <div class="span12">

        <h3>Welcome {{ $admin->first_name }} {{ $admin->last_name }}</h3>

        <!-- .tabs -->
        <div class="tabs">

            <!-- .tab-titles -->
                <ul class="tab-titles">
                <li><a class="active">DESIGN</a></li>
                <li><a>CODE</a></li>
            </ul>
            <!-- .tab-titles -->

            <!-- .tab-content -->
            <div class="tab-content">

                <!-- tab-1 -->
                <div>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                </div>
                <!-- tab-1 -->

                <!-- tab-2 -->
                <div>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                </div>
                <!-- tab-2 -->

            </div>
            <!-- .tab-content -->
        </div>
        <!-- .tabs -->

    </div>
    <!-- .span12 -->

</div>
    
@stop