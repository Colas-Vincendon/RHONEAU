
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link
    href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
    rel="stylesheet"
  />
  <link href="./css/galleryServices.css" rel="stylesheet" />
  <link href="./css/footer.css" rel="stylesheet" />

<?php
echo "<div class='container_fluid d-flex flex-column'>";
    echo "<div class='container_fluid'>";
    echo "<div style='display:block'>";
    require './components/header.html';
    echo "</div>";

    echo "<div style='display:block'>";
    require './components/galleryServices.html';
    echo "</div>";
    echo "<div style='display:block'>";
    require './components/footer.html';
    echo "</div>";
    echo "</div>";
echo "</div>";
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../front/script/header.js"></script>

<script src="../front/script/cardsServices.js"></script>