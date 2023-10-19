<?php
// Include the database connection
include 'conn.php';

// Query to retrieve all images from the database
$sql = "SELECT * FROM image";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if there are any images in the database
if (mysqli_num_rows($result) > 0) 
{
  // Start the row
  echo '<div class="row">';

  // Loop through each image and display it in a column
  while ($row = mysqli_fetch_assoc($result)) 
  {
    $image_path = $row['location'];
    $image_name = $row['image'];
    $artwork_name = $row['Name'];
    $price = $row['Price'];
    
    echo '<div class="col-md-4">';
    echo '<div class="card mb-4">';
    echo '<img src="'.$image_path.'" class="card-img-top" style="height: 350px; object-fit: cover;">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">'.$artwork_name.'</h5>';
    echo '<p class="card-text">$'.$price.'</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }

  // End the row
  echo '</div>';
} else {
  echo 'No images found.';
}
?>

