<!DOCTYPE html>
<html>
<head>
    <title>Add Again Same Course</title>
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta charset="utf-8" />
    <title>Registration Student</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!!Html::style('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css')!!}
    {!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js')!!}
    {!!Html::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')!!}

    {!!Html::script('student/js/jquery-1.10.2.min.js')!!}
    {!!Html::script('student/bootstrap/js/bootstrap.min.js')!!}
    {!!Html::style('student/bootstrap/css/bootstrap.min.css')!!}
    {!!Html::style('student/font-awesome/css/font-awesome.min.css')!!} 
    <!-- SET: FAVICON -->

    <!-- END: FAVICON -->

    <!-- SET: STYLESHEET -->
    {!!Html::style('student/css/style.css')!!}
    <!-- END: STYLESHEET -->

    <!-- SET: SCRIPTS -->
    {!!Html::script('student/text/javascript')!!}
    <!-- END: SCRIPTS -->

</head>
<body>
<div class="wrapper"> 
  
  <!-- Header Starts -->
  <div class="header">

    <div class="header-container">

      <div class=""> 
         <div class="logo"> <a href="www.ku.ac.bd">Khulna University</a> 
         <font size="6" color="green">Student Information System</font>
         </div>
         
       </div>  
                 
        <div class="toll-free">
        <button type="button" class="btn btn-success" onClick="location.href='/auth/register'">Sign Up</button>
        <button type="button" class="btn btn-success" onClick="location.href='/auth/logout'">Sign Out</button>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <!-- Header ends --> 
  
  <!-- Nav start -->
  <div class="nav">
    <div class="nav-in">
      <ul>
        <li class="last"><a href="/course/create">Home </a></li>
        <li><a href="#">About us </a></li>
        
      
        <li class="no_bg ped"><a href="#">Contact us</a></li>
      </ul>
      <div class="clear"></div>
    </div>
 <div>

<div class="container">
<div class="container-in">{!!Html::image('student/images/container-bg.jpg','alt text',array('class'=>''))!!}
<div class="page-header">
    <h1>Student Basic Information Registration Form </h1>
<div>
    <small>A Bootstrap template showing a registration form with standard fields</small></h1>

</div>
    
<!-- Registration form - START -->
<div class="container">
<div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong>
</div>
<div class="col-md-10">
    <div class="row">
      {!! Form::open(array('route' => ['course.update',$course->std_id,],'class'=>'form-horizental','method'=>'PUT')) !!}
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="InputName">Enter Student id</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="std_id" value="{{$course->std_id}}" id="InputName" placeholder="Enter Student id" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Enter Student Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="std_name" value="{{$course->std_name}}" id="InputName" placeholder="Enter Student Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email" value="{{$course->email}}" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Confirm Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailSecond" name="email" value="{{$course->email}}" placeholder="Confirm Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Department Code</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailSecond" name="dept_code" value="{{$course->dept_code}}" placeholder="Department Code" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Department Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailSecond" name="dept_name" value="{{$course->dept_name}}"placeholder="Department Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Course No</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailSecond" name="course_no" value="{{$course->course_no}}" placeholder="Course No" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Building No</label>
                    <div class="input-group">
                    <select name="building_no" value="{{$course->building_no}}" required>
                        <option value="0" selected>please select your building no</option>
                        <option value="01">First Academic building</option>
                        <option value="02">Second Academic building</option>
                        <option value="03">Third Academic building</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Enter Student Contact Number</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="con_no" value="{{$course->con_no}}" id="InputName" placeholder="Enter Student Contact Number" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Enter Student Year</label>
                    <div>
                        <select name="year" value="{{$course->year}}" required>
                        <option value="0" selected>please select your year</option>
                        <option value="First Year">First Year</option>
                        <option value="Second Year">Second Year</option>
                        <option value="Third Year">Third Year</option>
                        <option value="Four Year">Four Year</option>
                        </select>
                       
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Enter Student Term</label>
                    <div>
                    <select name="term" value="{{$course->term}}" required>
                      <option value="First Term">First Term</option>
                      <option value="Second Term">Second Term</option>
                    </select>
                    </div>
                </div>
                {!!Form::submit('Update',$attributes=array('class'=>'btn btn-info'))!!}
            </div>
          </div>
        </div>          
        {!!Form::close()!!}
        </div>
        </div>        
     </div>
            <div class="footer">
            <div class="footer-in">
              <div class="social-icons">
                <ul>
                  {!!Html::image('student/images/face-book.png','alt text',array('class'=>'last'))!!}
          
                  {!!Html::image('student/images/twitter.png','alt text',array('class'=>'last'))!!}
          
                  {!!Html::image('student/images/google.png','alt text',array('class'=>'last'))!!}
                </ul>
                <div class="clear"></div>
              </div>
              <div class="copy">
                <p>Copyright © 2015 Student Information System All rights reserved. Design by <a href="www.facebook.com/Sobuzcse12" target="_blank" rel="nofollow"></a>Group no.11</p>
              </div>
              <div class="clear"></div>
            </div>
            </div>
            </div>
    
        </div>
</div>
<!-- Registration form - END -->

</div>
</body>
</html>
