// Execute the code when the DOM is ready
document.addEventListener('DOMContentLoaded', function () {
  // Find all code blocks in the document
  var codeBlocks = document.querySelectorAll("pre > code");

  // Loop through each code block
  codeBlocks.forEach(function (codeBlock) {
    // Create a container div for positioning
    var container = document.createElement("div");
    container.style.position = "relative";
    container.style.paddingTop = "2em"; // Adjust padding to create space for the button

    // Append the container before the code block
    codeBlock.parentNode.insertBefore(container, codeBlock);

    // Append the code block to the container
    container.appendChild(codeBlock);

    // Create a button element
    var copyButton = document.createElement("button");
    copyButton.className = "copy-button";
    copyButton.innerHTML = '<i class="fa fa-copy"></i>';

    // Append the button to the container
    container.appendChild(copyButton);

    // Add click event listener to the button
    copyButton.addEventListener("click", function () {
      var codeText = codeBlock.textContent.trim();
      // If browser supports clipboard API, use the navigator.clipboard
      if (navigator.clipboard && navigator.clipboard.writeText) {
        // Copy the string codeText to clipboard directly
        navigator.clipboard.writeText(codeText)
          .then(function () {
            console.log('Text copied to clipboard successfully');
          })
          .catch(function (err) {
            console.error('Unable to copy text to clipboard: ', err);
          });
      } else {
        // Fallback method using textarea for unsupported browsers
        // Create a temporary element named textarea
        var textarea = document.createElement("textarea");
        textarea.value = codeText;
        // Append the textarea to the document body
        document.body.appendChild(textarea);
        // Select the text inside the textarea
        textarea.select();
        // Execute the copy command
        document.execCommand("copy");
        // Remove the temporary textarea
        document.body.removeChild(textarea);
      }
      // Change button text to indicate successful copy
      copyButton.innerHTML = '<i class="fa fa-check"></i>';
      setTimeout(function () {
        // Reset button text after a short delay
        copyButton.innerHTML = '<i class="fa fa-copy"></i>';
      }, 1000); // Reset after 1 second
    });
  });
});