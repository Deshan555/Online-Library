<html>

<head>


<link rel="stylesheet" href="Pdf.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>SBB Access : PDF Books</title>

<link rel ="icon" href="../img/pdf_50px.png" type="image/x-icon">



</head>


<div class="w3-top">

    <div class="w3-bar w3-white w3-wide w3-padding w3-card">

        <a href="Pdf.php" class="w3-bar-item w3-button"><img src = "../img/south_50px.png"><b>SBB </b>ACESS : SLTC Digital Book Collection</a>

        <!-- Float links to the right. Hide them on small screens -->

        <div class="w3-right w3-hide-small">

            <a href = "../Home.php" class="w3-bar-item w3-button">HOME</a>

            <a href = "https://sltc.ac.lk/" class="w3-bar-item w3-button">SLTC</a>

        </div>

    </div>
</div>



<body>



<?php 

$conn = new mysqli('192.168.1.101','root','890/Fuck','library');

if(isset($_GET['search']))
{
   $searchKey = $_GET['search'];

   $sql = "SELECT * FROM pdf_books WHERE title LIKE '%$searchKey%'";
}
else

$sql = "SELECT * FROM pdf_books";
   
$result = $conn->query($sql);


?>

</body>

<form action="" method="GET"> 
     
<div class="searchBox">
    
    <input class="searchInput" type="text" name="search" class='form-control' placeholder="Find.." value=<?php echo @$_GET['search']; ?>>
            
    <button class="searchButton" href="#">
                
    <i class="material-icons">
        <img src = "../img/search_30px.png">    
    </i>
    
</button>
        
</div>
     
</form>

</div>



<table class = "styled-table"> 
<thead>
  <tr>
     <th></th>

     <th>Book ID</th>
     
     <th>Book Title</th>

     <th>Author</th>
   
     <th>ISBN</th>

     <th>LANGUAGE</th>

     <th>URL</th>

     <th>Genres</th>

     <th>DISCRIPTION</th>
  </tr>
</thead>

  <?php while( $row = $result->fetch_object() ): ?>
        
        <tbody>

        <tr>
            <td><img src = "../img/pdf_30px.png" ></td>
     
            <td><?php echo $row->ID ?></td>
    
            <td><?php echo $row->title?></td>
     
            <td><?php echo $row->author ?></td>
     
            <td><?php echo $row->ISBN?></td>

            <td><?php echo $row->language?></td>
     
            <td><a href = <?php echo $row->url ?>><?php echo $row->url ?></a></td>
    
            <td><?php echo $row->generes ?></td>
     
            <td><?php echo $row->description ?></td>
        </tr>
    
        </tbody>
    
        <?php endwhile; ?>

</table>

</html>