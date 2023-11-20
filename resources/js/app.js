import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('section');
  
    window.addEventListener('scroll', function () {
      let currentSection = '';
  
      sections.forEach(function (section) {
        const sectionTop = section.offsetTop - 50;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= sectionTop && pageYOffset < sectionTop + sectionHeight) {
            currentSection = section.id;
        }
      });
  
      setActiveLink(currentSection);
    });
  
    function setActiveLink(sectionId) {
      const links = document.querySelectorAll('.nav-links a');
      links.forEach(function (link) {
        link.classList.remove('active');
        if (link.getAttribute('href').slice(1) === sectionId) {
            link.classList.add('active');
        }
      });
    }
});