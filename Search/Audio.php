<html>

<head>


<link rel="stylesheet" href="Audio.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>SBB Access : Audio Books</title>

<link rel ="icon" href="../img/music_folder_50px.png" type="image/x-icon">


</head>


<div class="w3-top">

    <div class="w3-bar w3-white w3-wide w3-padding w3-card">

        <a href="Audio.php" class="w3-bar-item w3-button"><img src = "../img/south_50px.png"><b>SBB </b>ACESS : Audio Books</a>

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

   $sql = "SELECT * FROM audiobooks WHERE NAME LIKE '%$searchKey%'";
}
else

$sql = "SELECT * FROM audiobooks";
   
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
     
     <th>Audio Book ID</th>

     <th>Title Of Audieo Book</th>
   
     <th>Written By</th>

     <th>Run Time</th>

     <th>BOOK_LINK</th>

     <th>Genres</th>

     <th>Summary</th>
  </tr>
</thead>

  <?php while( $row = $result->fetch_object() ): ?>
        
        <tbody>

        <tr>
            <td><img src = "../img/audio_wave_30px.png" ></td>
     
     
            <td><?php echo $row->ID ?></td>
    
            <td><?php echo $row->NAME?></td>
     
            <td><?php echo $row->Written_By ?></td>
     
            <td><?php echo $row->Listening_Time?></td>
     
            <td><a href = <?php echo $row->URL ?>><?php echo $row->URL ?></a></td>
    
            <td><?php echo $row->Genres ?></td>
     
            <td><?php echo $row->Summery ?></td>
        </tr>
    
        </tbody>
    
        <?php endwhile; ?>

</table>



























</html>