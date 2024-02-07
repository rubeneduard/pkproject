<!DOCTYPE html>
<html lang="en">
   @include('layout.header')
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            @include('layout.sidebar_menu')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  @include('layout.topbar')
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  @yield('content')
                  <!-- footer -->
                  @include('layout.footer')
               <!-- end dashboard inner -->  
            </div>
         </div>
      </div>
      @yield('script')
      @include('layout.script')
     
   </body>
</html>