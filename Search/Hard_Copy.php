<html>

<head>


<link rel="stylesheet" href="Hard_Copy.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>SBB Access : Hard Copies</title>

<link rel ="icon" href="../img/ibooks_50px.png" type="image/x-icon">



</head>


<div class="w3-top">

    <div class="w3-bar w3-white w3-wide w3-padding w3-card">

        <a href="Hard_Copy.php" class="w3-bar-item w3-button"><img src = "../img/south_50px.png"><b>SBB </b>ACESS : SLTC Library Books</a>

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

   $sql = "SELECT * FROM Books WHERE Title_of_book LIKE '%$searchKey%'";
}
else

$sql = "SELECT * FROM books";
   
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



<table class = "styled-table"> <thead>
  <tr>
    <th></th>
    
    <th>BOOK_ID</th>
    
    <th>TITLE_OF_BOOK</th>
    
    <th>AUTHOR</th>
    
    <th>ISBN</th>
    
    <th>BOOK_LINK</th>
    
    <th>CATEGORY </th>
  </tr></thead>

  <?php while( $row = $result->fetch_object() ): ?>
        
        <tbody>

        <tr>
     
        <td><img src = "../img/read_30px.png" ></td>
     <td><?php echo $row->BOOK_ID ?></td>
     <td><?php echo $row->TITLE_OF_BOOK?></td>
     <td><?php echo $row->AUTHOR_NAME ?></td>
     <td><?php echo $row->ISBN ?></td>
     <td><a href = <?php echo $row->BOOK_LINK ?>><?php echo $row->BOOK_LINK ?></a></td>
     <td><?php echo $row->CATEGORY ?></td>

            
        
        </tr>
    
        </tbody>
    
        <?php endwhile; ?>

</table>



























</html>