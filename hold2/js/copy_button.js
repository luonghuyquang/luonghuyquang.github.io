document.addEventListener("DOMContentLoaded", function() {
    // Find all code blocks in the document
    var codeBlocks = document.querySelectorAll("pre > code");

    // Loop through each code block
    codeBlocks.forEach(function(codeBlock) {
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
        copyButton.textContent = "Copy code";
        copyButton.style.position = "absolute";
        copyButton.style.top = "0";
        copyButton.style.right = "0";
        copyButton.style.zIndex = "1"; // Ensure button is above code block
        
        // Append the button to the container
        container.appendChild(copyButton);

        // Add click event listener to the button
        copyButton.addEventListener("click", function() {
            // Get the text content of the code block and trim it
            var codeText = codeBlock.textContent.trim();
            console.log("Code Text:", codeText);

            // Create a range and selection
            var range = document.createRange();
            var selection = window.getSelection();

            // Clear previous selections
            selection.removeAllRanges();

            // Create a new text node with the trimmed content
            var textNode = document.createTextNode(codeText);

            // Select the trimmed content of the code block
            range.selectNodeContents(textNode);
            console.log("Selected Node:", textNode);

            // Add the range to the selection
            selection.addRange(range);
            console.log("Selection Range:", selection);

            // Execute the copy command
            var success = document.execCommand("copy");
            console.log("Copy Success:", success);

            // Change button text to indicate successful copy
            copyButton.textContent = "Copied!";
            setTimeout(function() {
                // Reset button text after a short delay
                copyButton.textContent = "Copy code";
            }, 1000); // Reset after 1 second

            // Clear the selection
            selection.removeAllRanges();
        });
    });
});