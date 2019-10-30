<!-- [ Layout footer ] Start -->
<nav class="layout-footer footer bg-white">
    <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
        <div class="pt-3">
            <span class="footer-text font-weight-semibold">&copy; <a href="https://srthemesvilla.com" class="footer-link" target="_blank">Srthemesvilla</a></span>
        </div>
        <div>
<span class="ml-3">
            @if(isset($setting['facebook']))
        <a href="{{$setting['facebook']}}" class="footer-link pt-3 ">
            <img src="{{asset('assets/img/facebook.png')}}" style="width: 47px;">
        </a>
    @else
        <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Rehman</a>
    @endif

       </span>
            <span class="ml-3">
            @if(isset($setting['facebook']))
        <a href="{{$setting['github']}}" class="footer-link pt-3 ">
            <img src="{{asset('assets/img/github.png')}}" style="width: 40px;">
        </a>
    @else
        <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Rehman</a>
    @endif

       </span>

            </span>
            <span class=" ml-3">
            @if(isset($setting['facebook']))
        <a href="{{$setting['linkdin']}}" class="footer-link pt-3 ">
            <img src="{{asset('assets/img/linkdin.png')}}" style="width: 30px;">
        </a>
    @else
        <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Rehman</a>
    @endif

       </span>


        </div>
    </div>
</nav>
<!-- [ Layout footer ] End -->