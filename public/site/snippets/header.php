<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/css/index.css', 'assets/dist/styles.css', '@auto']) ?>

</head>
<body>
  <header class="header">
    <div class="container">
      <section id="logo">

      </section>
      <section id="nav">
        <nav>
          <ul>
            <li>
              <a href="#projects">Projects</a>
            </li>
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="/resume">Resume</a>
            </li>
            <li>
              <a href="#contact">Contact</a>
            </li>
          </ul>
        </nav>
      </section>
    </div>
  </header>