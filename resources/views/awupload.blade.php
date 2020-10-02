<h1>Upload</h1> 

<form action="" method="POST" enctype='multipart/form-data'>
 @csrf
<input type="file" name="file">
<br>
<button type="submit">Upload file</button>
</form>