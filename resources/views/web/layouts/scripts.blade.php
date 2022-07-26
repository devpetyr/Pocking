    <script src="{{asset('web/js/wow.js')}}"></script>
    <script src="{{asset('web/js/slick/slick.js')}}"></script>
    <script src="{{asset('web/js/slick/slick.min.js')}}"></script>
    <script src="{{asset('web/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('web/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('web/js/bootstrap.js')}}"></script>
    <script src="{{asset('web/js/custom.js')}}"></script>
    <script src="{{asset('web/js/toastr.min.js')}}"></script>
<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>
@stack('js')
