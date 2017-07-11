$(document).ready(function() {

  // Find first paragraph and isolate
  var firstP = $('.post-content').firstChild('p');
  console.log(firstP);

  // Find everything in the first para before the first space
  var text = firstP.value;
  var dropCap = text + text.substring(0, text.indexOf(' '));

  // Apply styles to the first word of the first paragraph
  dropCap.css( "color", "red" );
});

