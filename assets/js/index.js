let url = location.href;
let navList = document.querySelectorAll('.sidebar-nav a');

for (let i = 0; i < navList.length; i++) {
  if (url === navList[i].href) {
    navList[i].classList.add('active');
  }
}