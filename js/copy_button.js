// Execute the code when the DOM is ready
document.addEventListener('DOMContentLoaded', function() {
  // Get all <code> elements
  var codeElements = document.getElementsByTagName("code");

  // Loop through each <code> element
  for (var i = 0; i < codeElements.length; i++) {
    var codeElement = codeElements[i];

    // Create clipboard icon element
    var clipboardIcon = document.createElement("i");
    clipboardIcon.className = "far fa-clipboard clipboard-icon";
    clipboardIcon.title = "Copy to clipboard";

    // Append the clipboard icon to the <code> element
    codeElement.parentNode.insertBefore(clipboardIcon, codeElement.nextSibling);

    // Initialize Clipboard.js for the current <code> element
    new ClipboardJS(clipboardIcon, {
      target: function(trigger) {
        return trigger.previousSibling;
      }
    });
  }
});