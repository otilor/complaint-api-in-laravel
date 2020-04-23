@extends ('layouts.app')

@section ('content')
<header id = "topnav">
    <div class = "topbar-main">
        <div class ="container-fluid">
        <div class="logo">
            <!-- Text Logo -->
            <a href="index.php" class="logo">
            AnCounsel
            </a>
            <!-- Image Logo 
            <a href="index.html" class="logo">
                <img src="assets/images/logo.png" alt="" class="logo-large">
            </a>
    -->
        </div>
        </div>
    </div>
</header>

<body>
    <div class="accountbg"></div>
         <div class="wrapper-page">
 
             <div class="card">
                 <div class="card-body">
 
                     <div class="text-center mt-2 mb-3">
                         <a href="index.html" class="logo logo-admin"><img src="assets/images/anchor_logo.png" height="40" alt="logo"></a>
                     </div>
 
                     <div class="p-3">
                         <form class="form-horizontal" action="">
 
                             <div class="form-group row">
                                 <div class="col-12">
                                     <input class="form-control" type="email" required="" placeholder="Student Email">

                                 </div>
                             </div>
 
                             
 
                            
 
                             
 
                             <div class="form-group text-center row m-t-20">
                                 <div class="col-12">
                                     <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Book Appointment</button>
                                 </div>
                             </div>
 
                             <div class="form-group m-t-10 mb-0 row">
                                 <div class="col-12 m-t-20 text-center">
                                     <a href="#" class="text-muted">Check Appointment Status</a>
                                 </div>
                             </div>
                         </form>
                     </div>
 
                 </div>
             </div>
         </div>
 


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
</body>
@endsection