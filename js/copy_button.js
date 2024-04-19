document.addEventListener('DOMContentLoaded', function () {
  var codeElements = document.querySelectorAll('code');
  codeElements.forEach(function (codeElement) {
    // Create copy button
    var copyButton = document.createElement('i');
    copyButton.className = 'fa fa-clipboard copy-btn'; // Use Font Awesome classes
    codeElement.appendChild(copyButton);

    // Initialize Clipboard.js for each copy button
    var clipboard = new ClipboardJS(copyButton, {
      target: function (trigger) {
        return codeElement; // Get the parent code element to copy
      }
    });

    // Alert user when code is copied
    clipboard.on('success', function (e) {
      alert('Code copied successfully!');
      e.clearSelection();
    });

    // Alert user if copying fails
    clipboard.on('error', function (e) {
      alert('Copying failed!');
    });
  });
});