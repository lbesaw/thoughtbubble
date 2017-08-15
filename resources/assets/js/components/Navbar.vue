<template>
<nav class="navbar">
          <div class="navbar-brand">
            <a class="navbar-item" href="/">
              <img src="/images/comicserv-logo.png" alt="ComicServ: a comic based social platform" width="112" height="28">
            </a>

            <div class="navbar-burger burger" data-target="navMenuExample">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>

          <div id="navMenuExample" class="navbar-menu">
            <div class="navbar-start">
              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link  is-active" href="#">
                  Comics
                </a>
                <div class="navbar-dropdown ">
                  <a class="navbar-item " href="/">
                    Front
                  </a>
                  <a class="navbar-item " href="/newest">
                    Newest
                  </a>
                  <a class="navbar-item " href="/top10">
                    Top 10
                  </a>
                
                </div>
              </div>
              
              
              <a class="navbar-item " href="/comic/create">
                <span class="emoji">🎨</span>
                Upload Comic
              </a>
              <a class="navbar-item " href="http://bulma.io/love/">
                <span class="emoji">❤️</span>
                Love
              </a>
            </div>

            <div class="navbar-end">
            <slot name="loginlogout"></slot>
            <slot name="register"></slot>

            </div>
          </div>
        </nav>
</template>

<script>
document.addEventListener('DOMContentLoaded', function () {

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any nav burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});
    export default {
        mounted() {
            console.log('Navbar mounted.')
        }
    }
</script>
