 <!-- Sidebar  -->
 <link rel="stylesheet" href="css/sidebar.css">
 <link rel="stylesheet" href="css/dash.css">

 <!-- Sidebar  -->


 <div class="sidebar-header">
     <h3>{{ Auth::user()->name }} </h3>
 </div>

 <nav id="sidebar">
     <ul class="list-unstyled components">
         <li class="new1">
             <a href="/phyadmin" class="new1">Admin DashBoard</a>
         </li>
         <li >
             <a href="#homeSubmenu"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle new1">View
                 Complaint</a>
             <ul class="collapse list-unstyled" id="homeSubmenu">
                 <li>
                     <a href="/physicsadmincomplaint" class="new1" >Physics Lab</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="/feedbackphadmin" class="new1"> View Feedbacks</a>
         </li>


     </ul>


 </nav>