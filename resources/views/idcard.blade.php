<!DOCTYPE html>

<html>

<head>

<style>

body{
    font-family: Arial, sans-serif;
}


.card{

width:350px;
height:220px;
border:2px solid #000;
border-radius:10px;
padding:15px;
margin:auto;
position:relative;

}


.header{

text-align:center;
font-size:18px;
font-weight:bold;
margin-bottom:10px;

}


.photo{

width:80px;
height:80px;
border-radius:50%;
object-fit:cover;
border:1px solid #555;

}


.details{

font-size:12px;
margin-top:10px;

}


.details p{

margin:5px 0;

}


.qr{

width:90px;
height:90px;
position:absolute;
right:15px;
bottom:15px;

}


.footer{

position:absolute;
bottom:5px;
left:15px;
font-size:10px;

}


</style>


</head>


<body>


<div class="card">


<div class="header">

STUDENT ID CARD

</div>



@if($student->photo)

<img 
class="photo"
src="{{public_path('storage/'.$student->photo)}}">

@else

<div class="photo"
style="background:#ddd;text-align:center;padding-top:30px;box-sizing:border-box">

N/A

</div>

@endif



<div class="details">


<p>
<b>Name:</b>

{{$student->first_name}}
{{$student->middle_name}}
{{$student->last_name}}

</p>



<p>
<b>Admission No:</b>

{{$student->admission_number}}

</p>



<p>
<b>Program:</b>

{{$student->program->name}}

</p>



<p>
<b>Department:</b>

{{$student->program->department->name}}

</p>



<p>
<b>Status:</b>

{{$student->status}}

</p>


</div>




<img 
class="qr"
src="data:image/svg+xml;base64,{{$qrCode}}">



<div class="footer">

Student Management System

</div>



</div>


</body>


</html>