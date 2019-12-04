<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
</head>
<body>
<h2>{{$student->name}}</h2>
<img src="{{$student->profile_image}}">
<img src="{{ asset('img/'.$student->profile_image) }}">

    <form method="POST" action="{{ route('student.imagechang',$student->id) }}" enctype="multipart/form-data">
              @csrf

              <input type="file" name="image">

                <button type="submit" >
                    Upload
                  </button>
</form>
</body>
</html>