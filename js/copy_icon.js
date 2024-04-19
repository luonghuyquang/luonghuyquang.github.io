<script>
    document.addEventListener("DOMContentLoaded", function() {
        var copyIcons = document.querySelectorAll('.copy-icon');
        copyIcons.forEach(function(copyIcon) {
            // Initialize Clipboard.js for each copy icon
            var clipboard = new ClipboardJS(copyIcon, {
                target: function(trigger) {
                    return trigger.previousElementSibling.querySelector('code');
                }
            });

            // Add event listener for success and error events
            clipboard.on('success', function(e) {
                // Provide feedback to the user (e.g., change icon color)
                e.trigger.classList.add('copied');
                setTimeout(function() {
                    e.trigger.classList.remove('copied');
                }, 1000); // Reset after 1 second
            });

            clipboard.on('error', function(e) {
                // Provide error feedback to the user
                console.error('Action:', e.action);
                console.error('Trigger:', e.trigger);
            });
        });
    });
</script>