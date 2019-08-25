<h6>Name : {{$teacher->user->name}}</h6>
<h6>Email : {{$teacher->user->email}}</h6>
<h6>Address : {{$teacher->address}}</h6>
<h6>Gender : {{$teacher->gender}}</h6>
<h6>Contact : {{$teacher->contact}}</h6>
<h6>Salary : {{$teacher->salary}}</h6>
<h6>Duration : {{ duration($teacher->date_of_joining) }}</h6>
