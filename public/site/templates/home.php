<?php snippet('header') ?>

<main>
  <header id="hero">
    <div class="container">
      <h1><?= $site->title() ?></h1>
      <p>Lorem ipsum dolor adipiscing elit.</p>
    </div>
  </header>
  <section id="projects">
    <div class="container">
      <h2>Projects</h2>
    </div>
  </section>
  <section id="about">
    <section id="bio">
      <div class="container">
        <h2>About</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </section>
    <?php snippet('contact'); ?>
  </section>
</main>

<?php snippet('footer') ?>
