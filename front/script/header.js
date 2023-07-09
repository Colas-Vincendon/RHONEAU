const navLink = document.querySelectorAll('.nav-link');
const windowPathname = window.location.pathname;

console.log(navLink);
console.log(window.location.pathname);

navLink.forEach((navLink) => {
  const navLinkPathname = new URL(navLink.href).pathname;
  console.log(navLinkPathname);
  console.log(windowPathname);

  if (windowPathname === navLinkPathname) {
    navLink.classList.add('actives');
  }
});