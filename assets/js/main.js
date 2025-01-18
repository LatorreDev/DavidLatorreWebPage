(function ($) {
    var $window = $(window),
        $body = $('body'),
        $nav = $('#nav');

    // Breakpoints.
    breakpoints({
        xlarge: ['1281px', '1680px'],
        large: ['981px', '1280px'],
        medium: ['737px', '980px'],
        small: [null, '736px'],
    });

    // Play initial animations on page load.
    $window.on('load', function () {
        window.setTimeout(function () {
            $body.removeClass('is-preload');
        }, 100);

        // Terminal typing effect.
        terminalTypingEffect(
            "#terminal-text",
            "Hi. I'm David Latorre.\nDevOps/Cloud Engineer/Site Reliability Engineer (SRE)",
            100
        );
    });

    // Scrolly.
    $('#nav a, .scrolly').scrolly({
        speed: 1000,
        offset: function () {
            return $nav.height();
        },
    });

    // Terminal typing effect function.
    function terminalTypingEffect(target, text, speed) {
        const element = document.querySelector(target);
        const cursor = document.createElement("span");
        cursor.textContent = "_";
        cursor.classList.add("blinking-cursor");
        element.innerHTML = ""; // Clear content initially.
        element.appendChild(cursor);

        let index = 0;

        function type() {
            if (index < text.length) {
                const char = text.charAt(index);
                if (char === "\n") {
                    element.innerHTML =
                        element.innerHTML.slice(0, -1) + "<br>" + "_";
                } else {
                    element.innerHTML =
                        element.innerHTML.slice(0, -1) + char + "_";
                }
                index++;
                setTimeout(type, speed);
            } else {
                cursor.remove(); // Remove the cursor once typing is complete.
            }
        }

        type();
    }
})(jQuery);
