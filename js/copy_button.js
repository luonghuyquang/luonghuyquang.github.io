document.addEventListener('DOMContentLoaded', function () {
  var codeElements = document.querySelectorAll('code');
  codeElements.forEach(function (codeElement) {
    // Create copy button
    var copyButton = document.createElement('i');
    copyButton.className = 'fa fa-clipboard copy-btn'; // Use Font Awesome classes
    codeElement.parentNode.insertBefore(copyButton, codeElement.nextSibling);

    // Initialize Clipboard.js for each copy button
    var clipboard = new ClipboardJS(copyButton, {
      text: function () {
        return codeElement.textContent; // Get the code text to copy
      }
    });

    // Alert user when code is copied
    clipboard.on('success', function (e) {
      alert('Code copied !');
      e.clearSelection();
    });

    // Alert user if copying fails
    clipboard.on('error', function (e) {
      alert(' failed!');
    });
  });
});