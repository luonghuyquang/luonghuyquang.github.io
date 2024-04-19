document.addEventListener("DOMContentLoaded", function() {
    // Find all code blocks in the document
    var codeBlocks = document.querySelectorAll("pre > code");

    // Loop through each code block
    codeBlocks.forEach(function(codeBlock) {
        // Create a button element
        var copyButton = document.createElement("button");
        copyButton.className = "copy-button";
        copyButton.textContent = "Copy code";

        // Append the button to the code block
        codeBlock.parentNode.insertBefore(copyButton, codeBlock);

        // Add click event listener to the button
        copyButton.addEventListener("click", function() {
            // Get the text content of the code block
            var codeText = codeBlock.textContent.trim(); // Remove leading and trailing whitespace

            // Create a temporary textarea element
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

            // Change button text to indicate successful copy
            copyButton.textContent = "Copied!";
            setTimeout(function() {
                // Reset button text after a short delay
                copyButton.textContent = "Copy code";
            }, 1000); // Reset after 1 seconds
        });
        document.addEventListener("DOMContentLoaded", function() {
            // Find all code blocks in the document
            var codeBlocks = document.querySelectorAll("pre > code");
        
            // Loop through each code block
            codeBlocks.forEach(function(codeBlock) {
                // Create a button element
                var copyButton = document.createElement("button");
                copyButton.className = "copy-button";
                copyButton.textContent = "Copy";
        
                // Append the button to the code block
                codeBlock.parentNode.insertBefore(copyButton, codeBlock);
        
                // Add click event listener to the button
                copyButton.addEventListener("click", function() {
                    // Get the text content of the code block
                    var codeText = codeBlock.textContent.trim(); // Remove leading and trailing whitespace
        
                    // Create a temporary textarea element
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
        
                    // Change button text to indicate successful copy
                    copyButton.textContent = "Copied!";
                    setTimeout(function() {
                        // Reset button text after a short delay
                        copyButton.textContent = "Copy";
                    }, 2000); // Reset after 2 seconds
                });
        
                // Position the copy button in the top right corner of the code block
                copyButton.style.position = "absolute";
                copyButton.style.top = "0";
                copyButton.style.right = "0";
            });
        });
        
    });
});
