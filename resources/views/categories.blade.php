<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
    font-family: "Lato", sans-serif;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;

  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 50%;
}

.sidenav {
    height: 100%;
    width: 250px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 20px 16px;
    text-decoration: none;
    font-size: 13px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 260px; /* Same as the width of the sidenav */
    font-size: 16px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>


<div class="main">
  <h2><span class="glyphicon glyphicon-menu-right"></span>&nbsp;Admin Accounts</h2>
  <ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Categories</a></li>       
  </ul>
  

  
<form method="POST" action="categoriesstore">
  {{csrf_field() }}
  <fieldset>
    <legend>Personalia:</legend>
    <label for="fname">category name:</label><br>
    <input type="text" id="fname" name="title" ><br>
    

  <button type="submit">add</button>

  </fieldset>
</form>



  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Names</th>
  

      </tr>
    </thead>
    <tbody>
    @foreach($data as $product)
          <tr> <td>{{$product->id}}</td>
        <td>{{$product->title}}</td>

    

     </tr>
     @endforeach


    </tbody>
  </table>

  </div>
   
 

</body>
</html> 
