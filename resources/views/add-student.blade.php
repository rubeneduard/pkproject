@extends('layout.apps')
@section('content')
<div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Add Student</h2>
                           </div>
                        </div>
                     </div>                
                  </div>

               
                  <div class="row column4 graph">
                        <!-- tab style 1 -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Student Form</h2>
                                 </div>
                              </div>
                              

                  <div class="full graph_head"> 
                              @if ($errors->any())
                              <div class="alert alert-danger">
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          @endif
                  </div> 


                     <div class="full inner_elements mb-3">
                              <form method="POST" action="/save/student">
                              @csrf 
                                    <div class="row pl-5">
                                          <div class="col-6">
                                  
                                       <input type="hidden" name="studentid">

                      <!-- FIRST NAME -->
                     <div class="form-group">
                           <label for="FirstName">FirstName</label>
                           <input type="text" class="form-control" name="FirstName" placeholder="Enter First Name">
                     </div>

                      <!-- LAST NAME -->
                     <div class="form-group">
                           <label for="LastName">LastName</label>
                           <input type="text" class="form-control" name="LastName" placeholder="Enter Last  Name">
                     </div>

                     <!-- MIDDLE NAME -->
                     <div class="form-group">
                           <label for="LastName">MiddleName</label>
                           <input type="text" class="form-control" name="MiddleName" placeholder="Enter Middle Name">
                     </div>

                              <button type="submit" class="btn btn-primary">Submit</button>

               </div>

                     <!-- SUFFIX -->
                     <div class="col-6">
                           <div class="form-group">
                                 <label for="Suffix">Suffix</label>
                                       <select class="form-control" name="Suffix">
                                             <option selected></option>
                                             <option value="JR">JR</option>
                                             <option value="SR">SR</option>
                                             <option value="II">II</option>
                                             <option value="III">III</option>
                                       </select>
                     </div>

                     <!-- GENDER -->
                     <div class="form-group">
                           <label for="Gender">Gender</label>
                                 <select class="form-control" name="Gender">
                                       <option value="male">Male</option>
                                       <option value="female">Female</option>
                                 </select>
                     </div>

                     <!-- BIRTH DATE -->
                     <div class="form-group">
                                 <label for="BirthDate">BirthDate</label>
                                 <input type="date" class="form-control" name="BirthDate">
                     </div>


                                      
                                       
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
                        
   </div>
@endsection