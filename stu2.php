<!DOCTYPE html>
<html>
<body>


   <?php
include('menubar.php');
?>
<pre></pre>

  <head>
    <title>UPLOAD DOCUMENTS</title>
    <h1>UPLOAD DOCUMENTS</h1>
    <link rel="stylesheet" href="css/stu2-style.css">
    <link href="css/font.css" rel='stylesheet' type='text/css'>
  </head>
  <pre></pre>


  
  <div class="overlay">
<form action="upload.php" method="POST" enctype="multipart/form-data">  
<div class="form" > 
  <b>Document 1 <caption>*Student's Undertaking*</caption></b>:<pre></pre><input type="file" name="pic[]" accept="image/*" required><pre></pre>
  

  <b>Document 2 <caption>*Parent's Undertaking*</caption></b>:<pre></pre><input type="file" name="pic[]" accept="image/*" required><pre></pre>
  

<b>Document 3 <caption>*Acknowledgement*</caption></b>:<pre></pre><input type="file" name="pic[]" accept="image/*" required><pre></pre>

<b><a href="http://www.antiragging.in/Site/Affidavits_Registration.aspx" title="Anti-Ragging Undertaking" >Anti-Ragging Undertaking</a></b>
<br>
<br>
<button type="submit" name="submit"><font size="5">Proceed</font></button><pre></pre>
</div>
</form>
</div>
</body>
</html>