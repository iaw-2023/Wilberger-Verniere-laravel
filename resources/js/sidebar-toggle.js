var toggleBtn = document.querySelector('.sidenav-toggle');
var sidebar = document.querySelector('.sidenav');

toggleBtn.addEventListener('click', function() {
  toggleBtn.classList.toggle('is-closed');
  sidebar.classList.toggle('is-closed');
})