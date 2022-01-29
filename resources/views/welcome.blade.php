<!DOCTYPE html>
<html>
<body>

<h1>form</h1>
<div>
@foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
@endforeach
</div>

<form action="{{ route('store') }}" method="POST">
  @csrf
  <label for="fname">name:</label>
  <input type="text" id="fname" name="name" placeholder="your name"><br><br>

  <label for="fname">Roll:</label>
  <input type="text"  name="roll" placeholder="your Roll"><br><br>

  <label for="fname">Phone:</label>
  <input type="text"  name="phone" placeholder="your Phone"><br><br>

  <label for="fname">class:</label>
  <input type="text"  name="class" placeholder="your class"><br><br>

  <label for="fname">email:</label>
  <input type="email" name="email" placeholder="your email"><br><br>

  <label for="fname">address:</label>
  <input type="text"  name="address" placeholder="your address"><br><br>

  <label for="fname">balance</label>
  <input type="text"  name="balance" placeholder="balance"><br><br>

 
  <input type="submit" value="Submit">
</form><br/><br/>

<table border="2px" cellpadding="10px" style="border-collapse:collapse;" >
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Roll</th>
      <th>Phone</th>
      <th>Class</th>
      <th>Email</th>
      <th>Address</th>
      <th>Balance</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody >
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

</body>
</html>
