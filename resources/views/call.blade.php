<h3>This is my First View</h3>
<!-- <?php
foreach ($users as $user ) {
	echo $user."<br/>";
	# code...
}
?> -->

 Developer Name: {{ $name }}<br><br>
@foreach($users as $user)
 {{ $user}}<br>

@endforeach