// Execute the code when the DOM is ready
document.addEventListener('DOMContentLoaded', function () {
  // Get all <code> elements
  var codeElements = document.getElementsByTagName("code");

  // Loop through each <code> element
  for (var i = 0; i < codeElements.length; i++) {
    var codeElement = codeElements[i];

    // Create container for positioning
    var container = document.createElement("div");
    container.className = "clipboard-container";

    // Create code text element
    var codeText = document.createElement("span");
    codeText.className = "code-text";
    codeText.textContent = codeElement.textContent;

    // Check if the code element has a copyable class
    if (codeElement.classList.contains("copyable")) {
      // Create clipboard icon element
      var clipboardIcon = document.createElement("i");
      clipboardIcon.className = "far fa-clipboard clipboard-icon";
      clipboardIcon.title = "Copy to clipboard";

      // Append the clipboard icon to the container
      container.appendChild(clipboardIcon);

      // Initialize Clipboard.js for the current clipboard icon
      new ClipboardJS(clipboardIcon, {
        target: function (trigger) {
          return trigger.previousElementSibling;
        }
      }).on("success", function (e) {
        e.clearSelection(); // Clear the selection after successful copy
        e.trigger.className = "far fa-check-circle clipboard-icon";
        setTimeout(function () {
          e.trigger.className = "far fa-clipboard clipboard-icon";
        }, 1000); // Reset the icon after 1 second
      });
    }

    // Append the code text to the container
    container.appendChild(codeText);

    // Replace the <code> element with the container
    codeElement.parentNode.replaceChild(container, codeElement);
  }
});