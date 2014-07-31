var tour = new Tour({
 steps: [
 {
  element: ".one",
  title: "Welcome",
  content: "Welcome to our app, take this tour to be familirized with it."
 }
]
});

tour.init();
tour.start();
