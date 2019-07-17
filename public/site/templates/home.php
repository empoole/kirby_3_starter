<?php snippet('header') ?>

<main>
  <header id="hero">
    <h1><?= $site->title() ?></h1>
    <p>Lorem ipsum dolor adipiscing elit.</p>
  </header>
  <section id="projects">
    <h2>Projects</h2>
  </section>
  <section id="about">
    <section id="bio">
      <h2>About</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </section>
    <section id="contact">
      <h2>Contact</h2>
      <form action="process/contact" method="post">
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="email" placeholder="Email">
        <textarea name="message" rows="8" cols="80" placeholder="message"></textarea>
        <button type="submit">Send</button>
      </form>
    </section>
  </section>
</main>

<?php snippet('footer') ?>
