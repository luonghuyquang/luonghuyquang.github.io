document.addEventListener("DOMContentLoaded", function() {
    var codeBlocks = document.querySelectorAll("pre > code");
    codeBlocks.forEach(function(codeBlock) {
        // Create copy icon element
        var copyIcon = document.createElement("i");
        copyIcon.className = "far fa-clipboard copy-icon";
        copyIcon.setAttribute("title", "Copy to clipboard");
        copyIcon.setAttribute("data-clipboard-target", "#" + codeBlock.id); // Set data-clipboard-target attribute
        
        // Append copy icon to code block parent element (pre)
        codeBlock.parentNode.insertBefore(copyIcon, codeBlock);
        
        // Initialize Clipboard.js for the copy icon
        var clipboard = new ClipboardJS(copyIcon);
    });
});