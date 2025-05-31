<div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="{{asset ('/template/img/logo/logo.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        
        @if (!isset($hideHeader) || !$hideHeader)
            @include('tampilan.header')
        @endif
        
        @if (!isset($hideFooter) || !$hideFooter)
            @include('tampilan.footer')
        @endif
</div>
    

