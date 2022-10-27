<html>

<head>


<link rel="stylesheet" href="Movies.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>SBB Access : Movies</title>

<link rel ="icon" href="../img/movies_folder_50px.png" type="image/x-icon">



</head>


<div class="w3-top">

    <div class="w3-bar w3-white w3-wide w3-padding w3-card">

        <a href="Movies.php" class="w3-bar-item w3-button"><img src = "../img/south_50px.png"><b>SBB </b>ACESS : Movie Library</a>

        <!-- Float links to the right. Hide them on small screens -->

        <div class="w3-right w3-hide-small">

            <a href="../Home.php" class="w3-bar-item w3-button">HOME</a>

            <a href="https://sltc.ac.lk/" class="w3-bar-item w3-button">SLTC</a>

        </div>

    </div>
</div>



<body>



<?php 

$conn = new mysqli('192.168.1.101','root','890/Fuck','library');

if(isset($_GET['search']))
{
   $searchKey = $_GET['search'];

   $sql = "SELECT * FROM movies WHERE Movie_Title LIKE '%$searchKey%' OR Released_Year LIKE '%$searchKey%' OR GENRE LIKE '%$searchKey%' OR DIRECTOR LIKE '%$searchKey%'";
}
else

$sql = "SELECT * FROM movies";
   
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

     <th>Movie ID</th>
     
     <th>Movie Title</th>

     <th>year</th>
   
     <th>Certificate</th>

     <th>RUNTIME</th>

     <th>GENRE</th>

     <th>URL</th>

     <th>DIRECTOR</th>

     <th>DISCRIPTION</th>

    </tr>

</thead>

  <?php while( $row = $result->fetch_object() ): ?>
        
        <tbody>

        <tr>
            <td><img src = "../img/movies_folder_30px.png" ></td>
     
            <td><?php echo $row->Movie_ID ?></td>
    
            <td><?php echo $row->Movie_Title ?></td>
     
            <td><?php echo $row->Released_Year ?></td>
     
            <td><?php echo $row->Certificate ?></td>

            <td><?php echo $row->RUNTIME ?></td>

            <td><?php echo $row->GENRE ?></td>
     
            <td><a href = <?php echo $row->URL ?>>Link</a></td>
    
            <td><?php echo $row->DIRECTOR ?></td>
     
            <td><?php echo $row->DISCRIPTION ?></td>
        </tr>
    
        </tbody>
    
        <?php endwhile; ?>

</table>

</html>