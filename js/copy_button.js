document.addEventListener('DOMContentLoaded', function () {
  var codeBlocks = document.querySelectorAll("pre > code");

  codeBlocks.forEach(function (codeBlock) {
    var container = document.createElement("div");
    container.classList.add("code-container"); // Apply CSS class for styling

    codeBlock.parentNode.insertBefore(container, codeBlock);
    container.appendChild(codeBlock);

    var copyButton = document.createElement("button");
    copyButton.className = "copy-button";
    copyButton.innerHTML = '<i class="fa fa-copy"></i>';

    container.appendChild(copyButton);

    copyButton.addEventListener("click", function () {
      var codeText = codeBlock.innerText.trim(); // Use innerText for compatibility

      // Copy code text directly
      navigator.clipboard.writeText(codeText).then(function() {
        copyButton.innerHTML = '<i class="fa fa-check"></i>';
        setTimeout(() => {
          copyButton.innerHTML = '<i class="fa fa-copy"></i>';
        }, 1000);
      }).catch(function(error) {
        console.error('Failed to copy code text: ', error);
      });
    });
  });
});