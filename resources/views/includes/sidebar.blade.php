 <!-- Sidebar  -->
 <link rel="stylesheet" href="css/sidebar.css">

 <!-- Sidebar  -->


 <div class="sidebar-header">
     <h3>{{ Auth::user()->name }} </h3>
 </div>

 <nav id="sidebar">
     <ul class="list-unstyled components">
         <li class="">
             <a href="/userindex">Welcome</a>
         </li>
         <li >
             <a href="#addcomplaint" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Add
                 Complaint</a>
             <ul class="collapse list-unstyled" id="addcomplaint">
                 <li>
                     <a href="/computer">Computer Lab</a>
                 </li>
                 <li>
                     <a href="/physics">Physics Lab</a>
                 </li>
                 <li>
                     <a href="/chemistry">Chemistry Lab</a>
                 </li>
             </ul>
         </li>

         <li>
         <a href="#viewcomplaint" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">View
                 Complaints</a>
             <ul class="collapse list-unstyled" id="viewcomplaint">
                 <li>
                     <a href="/computerview">Computer Lab</a>
                 </li>
                 <li>
                     <a href="/physicsview">Physics Lab</a>
                 </li>
                 <li>
                     <a href="chemistrycomplaintview">Chemistry Lab</a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="/userfeedback">Add Feedback</a>
         </li>
         <li>
             <a href="/user">Complaint History</a>
         </li>

         <li>
             <a href="#">Account Setting</a>
         </li>

     </ul>


 </nav>
