<?php require('partial/head.php')?>

<?php require('partial/nav.php')?>

<?php require('partial/banner.php')?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
<P>hello welcome to my Scenery page </P>
    </div>
<?php
foreach(glob("scenery.jpg") as $filename) {
    echo "<img src='$filename' alt='scenery image'/>";                    
}
foreach(glob("river.jpg") as $filename) {
    echo "<img src='$filename' alt='river image'/>";                    
}

?>
  </main>
  
<?php require('partial/footer.php')?>


