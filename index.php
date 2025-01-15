<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Cyril Tamine</title>
  <link rel="stylesheet" href="css/style.css">
  <meta name="description" content="A website made by Cyril T., studying Computer Sciences in AMU.">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body>

<?php include "navbar.php"; ?>

<section class="part" id="about">
  <h2>Who am I ?</h2>
  <p>My name is Cyril, I am studying Computer Science in Aix-en-Provence, France.
    Feel free to explore this website and reach out if you need my help !

  </p>
  <button>About Me</button>
</section>

<?php
$projects = [
  [
  "title"=> "Tile-matching game (C++)",
  "description"=>"A tile-matching game made with C++ and the library MinGL2.0, created by students in the IUT.",
  "github"=>"https://github.com/RIGAT-Pierre-andre-2326090par/SAECandyCrush"
],
[
  "title"=> "Connected TVs",
  "description" => "A PHP Project created in order to manage the televisions of the different department in the IUT.",
  "github"
],
[
  "title" => "Website for the IUT French Cup 2024",
  "description" => "A website created in order to promote the IUT French Cup 2024.",
  "github" => "https://github.com/RIGAT-Pierre-andre-2326090par/SAEBesoin"
],
[
  "title" => "Tenders Website",
  "description" => "A PHP website created for every fan of tenders and raclette.",
  "github" => "https://github.com/RIGAT-Pierre-andre-2326090par/Projet-Php_R3.01"
]

];

?>
<section class="part" id="project">
  <h2>My Projects</h2>
  <h3>I did a lot of different projects during my years at university, heres some of them !</h3>
  <p> Note : I got hacked on Github during the beginning of my second year. There are many projects where I am blacklisted.</p>

  <?php foreach ($projects as $project): ?>
    <section class="project">
    <h4><?php echo $projects["title"]; ?> </h4>
    <p><?php echo $projects["description"]; ?> </p>
    <a href="<?php echo $projects["github"]; ?>"><button>Github</button> </a>
  </section>
  <?php endforeach; ?>
</section>



<section class="part" id="contact">
  <h2>Contact</h2>
  <a href="https://github.com/Xanooo"><button>My Github</button></a>

  <p>You can contact me on my <a href="https://www.linkedin.com/in/cyril-tamine-9068642b4/">LinkedIn</a> account !</p>
  <button>taminecyril@gmail.com</button>

</section>

<?php include "footer.php"; ?>


</body>

</html>
