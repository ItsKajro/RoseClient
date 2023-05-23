const navLinks = document.querySelectorAll('nav ul li a');

navLinks.forEach(link => {
  link.addEventListener('mouseover', () => {
    link.style.backgroundColor = '#555';
  });

  link.addEventListener('mouseout', () => {
    link.style.backgroundColor = '';
  });
});
