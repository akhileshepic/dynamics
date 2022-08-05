<script src="{{ URL::asset('public/admin/assets/js/admin/jquery-3.4.1.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('public/admin/assets/js/admin/popper.min.js') }}"></script>
<script src="{{ URL::asset('public/admin/assets/js/admin/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/admin/assets/js/admin/main1.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/admin/assets/js/admin/parsley.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/admin/assets/js/admin/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/admin/assets/js/admin/chosen.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/admin/assets/js/admin/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/admin/assets/js/admin/sweetalert.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('public/admin/assets/js/admin/jquery.email.multiple.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('public/admin/assets/plugins/select2/js/select2.min.js') }}"></script>

<script src="{{ URL::asset('public/admin/assets/js/admin/coreui.bundle.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
{{--<script src="{{ URL::asset('public/admin/assets/js/admin/coreui-chartjs.bundle.js') }}"></script>--}}
<script src="{{ URL::asset('public/admin/assets/js/admin/coreui-utils.js') }}"></script>
{{--<script src="{{ URL::asset('public/admin/assets/js/admin/main.js') }}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  {{-- <script src="https://js.pusher.com/7.0/pusher.min.js"></script> --}}
 
<script type="text/javascript">



		document.getElementById("year").innerHTML = new Date().getFullYear();

    

		$(document).ready(function(){

        setTimeout(function(){
         	$("div.alert").remove();
     	}, 5000 );

	    
       });

	@if(Session::has('message'))

		  toastr.options =
		  {
		  	"closeButton" : true,
		  	"progressBar" : true
		  }
		  toastr.success("{{ session('message') }}");

	@endif

	@if(Session::has('password'))

		  toastr.options =
		  {
		  	"closeButton" : true,
		  	"progressBar" : true
		  }
		  toastr.success("{{ session('password') }}");

	@endif

	@if(Session::has('error'))

	  toastr.options =
	  {
	  	"closeButton" : true,
	  	"progressBar" : true
	  }
	  		toastr.error("{{ session('error') }}");
	@endif

	  @if(Session::has('info'))
	  toastr.options =
	  {
	  	"closeButton" : true,
	  	"progressBar" : true
	  }
	  		toastr.info("{{ session('info') }}");
	  @endif

	  @if(Session::has('warning'))
	  toastr.options =
	  {
	  	"closeButton" : true,
	  	"progressBar" : true
	  }
	  		toastr.warning("{{ session('warning') }}");
	  @endif

	@if(count($errors) > 0)
        @foreach($errors->all() as $error)
        	toastr.options =
			  {
			  	"closeButton" : true,
			  	"progressBar":true,
			 	"timeOut": 30000,
			  }
            toastr.error("{{ $error }}");
        @endforeach
    @endif
	
	$('.sform').parsley();

	

</script>

