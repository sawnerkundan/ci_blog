<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <?=link_tag('Assets/css/bootstrap.min.css')?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Article Title</th>
      <th scope="col">Article Body</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($articles as $article):?>
    <tr class="table-active">
      <td><?= $article['article_title']?></td>
      <td><?= $article['article_body']?></td>
    </tr> 
	<?php endforeach; ?>
  </tbody>
</table>
<?=$this->pagination->create_links()?>
</div>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>