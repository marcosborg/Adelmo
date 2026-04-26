$(function () {
  const $header = $(".site-header");
  const revealItems = $(".reveal").toArray();

  const toggleHeader = () => {
    $header.toggleClass("scrolled", $(window).scrollTop() > 12);
  };

  toggleHeader();
  $(window).on("scroll", toggleHeader);

  if (!("IntersectionObserver" in window)) {
    $(revealItems).addClass("visible");
    return;
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        $(entry.target).addClass("visible");
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.18,
    rootMargin: "0px 0px -40px 0px"
  });

  revealItems.forEach((item) => observer.observe(item));
});
