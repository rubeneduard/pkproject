<!-- jQuery -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- wow animation -->
<script src="{{asset('assets/js/animate.js')}}"></script>
<!-- select country -->
<script src="{{asset('assets/js/bootstrap-select.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('assets/js/owl.carousel.js')}}"></script> 
<!-- chart js -->
<script src="{{asset('assets/js/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/utils.js')}}"></script>
<script src="{{asset('assets/js/analyser.js')}}"></script>
<!-- nice scrollbar -->
<script src="{{asset('assets/js/perfect-scrollbar.min.js')}}"></script>
<script>
   var ps = new PerfectScrollbar('#sidebar');
</script>
<!-- custom js -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/chart_custom_style1.js')}}"></script>

<script src="{{asset('assets/js/semantic.min.js')}}"></script>

<script>
   $.ajaxSetup({
headers: {
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
</script>