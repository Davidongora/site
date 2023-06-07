<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "post");

// Retrieve post from the database
$sql = "SELECT * FROM post";
$result = mysqli_query($conn, $sql);

// Generate HTML for each post
while ($row = mysqli_fetch_assoc($result)) {
  echo '<div class="post">';
  echo '<img src="' . $row['image'] . '" alt="' . $row['description'] . '">';
  echo '<div class="description">';
  echo '<h2>' . $row['title'] . '</h2>';
  echo '<p>' . $row['description'] . '</p>';
  echo '<div class="comments">';
  echo '<span class="comment-count">' . $row['comment_count'] . '</span>';
  echo '<i class="fas fa-comments"></i>';
  echo '</div>';
  echo '<div class="insights">';
  echo '<span class="insights-count">' . $row
  ['insights_count'] . '</span>';
  echo '<i class="fas fa-chart-bar"></i>';
  echo '</div>';
  echo '<div class="date">' . $row['date'] . '</div>';
  echo '</div>';
  echo '</div>';
  }
  
  // Close the database connection
  mysqli_close($conn);
  ?>
  
  