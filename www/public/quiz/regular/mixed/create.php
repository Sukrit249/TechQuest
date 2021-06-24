<?php 

$info = [

  "mixed",                    // name of the quiz
  "Harry",                    // quiz created by ...
  "/images/mixed-pic-1.jpg"   // path to the image (size of the image width=278px height=341px)
];

$qs = [
  ["What is the correct HTML for inserting a background image?", "body style='background-image:url(background.gif)'"],     // define question and correct answer
  ["Which CSS property is used to change the text color of an element?", "color"],
  ["The Bootstrap grid system is based on how many columns?", "zwölf"],
  ["How do you create a function in JavaScript?", "function myFunction()"],
  ["How do you create an array in PHP?", "group['Volvo', 'BMW', 'Toyota]"]
];

$as = [
  ["background img='background.gif'", "body style='background-image:url(background.gif)'", "body bg='background.gif'"], // define possile answers for the question with the same index
  ["fgcolor", "text-color", "color"],
  ["sechs", "zwölf", "neun"],
  ["function = myFunction()", "function myFunction()", "function:myFunction()"],
  ["group['Volvo', 'BMW', 'Toyota]", "group('Volvo', 'BMW', 'Toyota')", "group 'Volvo','BMW', 'Toyota'"]
];


