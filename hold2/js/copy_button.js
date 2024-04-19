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
        copyButton.textContent = "Copy";
        copyButton.style.position = "absolute";
        copyButton.style.top = "0";
        copyButton.style.right = "0";
        copyButton.style.zIndex = "1"; // Ensure button is above code block
        
        // Append the button to the container
        container.appendChild(copyButton);

        // Add click event listener to the button
        copyButton.addEventListener("click", function() {
            // Get the text content of the code block
            var codeText = codeBlock.textContent;

            // Create a range and selection
            var range = document.createRange();
            var selection = window.getSelection();

            // Select the content of the code block
            range.selectNodeContents(codeBlock);
            selection.removeAllRanges(); // Clear previous selections
            selection.addRange(range);

            // Execute the copy command
            document.execCommand("copy");

            // Clear the selection
            selection.removeAllRanges();
            
            // Change button text to indicate successful copy
            copyButton.textContent = "Copied!";
            setTimeout(function() {
                // Reset button text after a short delay
                copyButton.textContent = "Copy";
            }, 2000); // Reset after 2 seconds
        });
    });
});
