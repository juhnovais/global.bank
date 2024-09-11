<?php $pageTitle = !isset($pageTitle) ? $pageTitle : 'Staff Menu'; ?>
<!doctype html>

<html lang="en">
  <head>
    <title>GBI - <?php echo h($pageTitle) ?></title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>

  <body>

  <header class="bg-success text-light text-center">
    <h1 class="mb-0"> GBI Staff Area</h1>
  </header>
  
  <nav class="navbar navbar-expand-lg bg-body-tertiary pt-0 mb-5">
    <div class="container-fluid">
      <div class="navbar-collapse justify-content-center fw-bold" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo WWW_ROOT; ?>">Menu</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>