<div class="row">
    <?php
    include 'conn.php';

    // Query to retrieve all images from the database
    $sql = "SELECT * FROM image";
    
    // Execute the query
    $artists = mysqli_query($conn, $sql);
    foreach ($artists as $artist) {
    ?>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="<?php echo $artist['image']; ?>" class="card-img-top" alt="Artist Image" style="height: 400px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $artist['Name']; ?></h5>
            <p class="card-text">$<?php echo $artist['Price']; ?></p>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
</div>
