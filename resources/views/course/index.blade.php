<!DOCTYPE html>
<html>
<head>
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
        <li><a href="#">Services </a></li>
        <li><a href="#">Careers </a></li>
        <li><a href="#">Blog</a></li>
        <li class="no_bg ped"><a href="#">Contact us</a></li>
      </ul>
      <div class="clear"></div>
    </div>
 <div>

<div class="container">
<div class="container-in">{!!Html::image('student/images/container-bg.jpg','alt text',array('class'=>''))!!}
<div class="page-header">
    <h1>Student Total Basic Information </h1>
<div>
    <small>A Bootstrap template showing a registration form with standard fields</small></h1>

</div>
<div>
  

<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
{!!Html::script('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js')!!}
{!!Html::script('http://getbootstrap.com/dist/js/bootstrap.min.js')!!}
{!!Html::script('student/jquery-1.10.2.min.js')!!}
<div class="container">
  <div class="row">
    
        
        <div class="col-md-12">
        <h4>Total Student information</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th>Id No.</th>
                   <th>Student Name</th>
                   <th>Email</th>
                   <th>Department No</th>
                   <th>Department Name</th>
                   <th>Course No</th>
                   <th>Building No</th>
                   
                   <th>Contact No.</th>
                   <th>Year</th>
                   <th>Term</th>
                      
                   <th>Action</th>
                   </thead>
          <tbody>
    
            @foreach($alldata as $data)
                    <tr>

                        <td>{{$data->std_id}}</td>
                        <td>{{$data->std_name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->dept_code}}</td>
                        <td>{{$data->dept_name}}</td>
                        <td>{{$data->course_no}}</td>
                        <td>{{$data->building_no}}</td>
                        <td>{{$data->con_no}}</td>

                        <td>{{$data->year}}</td>

                        <td>{{$data->term}}</td>
                        <td>
                        <a href="{{Route('course.edit',
                        $data->std_id)}}"
                        class="btn btn-info">
                        Edit</a>
                        {!! Form::open(array('route' => ['course.destroy',$data->std_id],
                        'class'=>'form-horizental',
                        'method'=>'delete')) !!}
                        {!!Form::hidden('id',$data->std_id)!!}
                        {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!}
                        </td>                                       
                    </tr>
              @endforeach
               {!!$alldata->render()!!} 
            <td><p data-placement="top" data-toggle="tooltip" title="Edit">
            <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >
            <span class="glyphicon glyphicon-pencil"></span></button>
            </p></td>
            <td><p data-placement="top" data-toggle="tooltip" title="Delete">
            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
            <span class="glyphicon glyphicon-trash"></span></button>
            </p></td>
            </tr> 
            
            </tbody>
                
        </table>
          
                
    </div>

            
        </div>


  </div>

</div>

</div>
     </div>
     <div>
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

  

<!-- Registration form - END -->

</body>
</html>