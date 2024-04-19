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

    // Create container for positioning
    var container = document.createElement("div");
    container.className = "clipboard-container";
    container.appendChild(codeElement.cloneNode(true));
    container.appendChild(clipboardIcon);

    // Replace <code> element with the container
    codeElement.parentNode.replaceChild(container, codeElement);

    // Initialize Clipboard.js for the current clipboard icon
    new ClipboardJS(clipboardIcon, {
      target: function(trigger) {
        return trigger.previousElementSibling;
      }
    });
  }
});