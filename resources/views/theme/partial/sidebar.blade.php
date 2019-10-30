<!-- [ Layout sidenav ] Start -->
<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo">
         <span class="app-brand-logo demo">
                        @if(isset($setting['logo']))
                 <img src="{{ asset('uploads/'.$setting['logo']) }}" alt="Brand Logo" style="width:60px; height: 50px" class="img-fluid">
             @else
                 <img src="{{asset('assets/img/logo.png')}}" alt="Brand Logo" class="img-fluid">
             @endif
         </span>
    <span class="app-brand-logo demo">
            @if(isset($setting['site_title']))

            <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">{{$setting['site_title']}}</a>
        @else
            <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Rehman</a>
        @endif

       </span>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>
    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">

        <!-- Dashboards -->
        <li class="sidenav-item open active">
            <a   href="{{route('dash')}}" class="sidenav-link ">
                <i class="sidenav-icon feather icon-home"></i>
                <div>Dashboards</div>

            </a>

        </li>



        <li class="sidenav-item open active">
            <a href="{{route('category.index')}}" class="sidenav-link ">

                    <i class="sidenav-icon feather  icon-share "></i>
                    <div> Categories  </div>

            </a>

            </li>
        <li class="sidenav-item open active">
            <a href="{{route('tag.index')}}" class="sidenav-link ">

                    <i class="sidenav-icon feather  icon-tag"></i>
                    <div> Tags  </div>

            </a>

            </li>
        <li class="sidenav-item open active">
            <a href="{{route('posts.index')}}" class="sidenav-link ">

                <i class="sidenav-icon feather icon-activity  "></i>
                <div> Posts</div>

            </a>

        </li>
        <li class="sidenav-item open active">
            <a href="{{route('web.index')}}" class="sidenav-link ">

                <i class="sidenav-icon feather  icon-aperture"></i>
                <div> Web Content</div>

            </a>

        </li>
        <li class="sidenav-item open active">
            <a href="{{route('setting.index')}}" class="sidenav-link ">

                <i class="sidenav-icon feather  icon-settings "></i>
                <div> Setting</div>

            </a>

        </li>











    </ul>
</div>
<!-- [ Layout sidenav ] End -->