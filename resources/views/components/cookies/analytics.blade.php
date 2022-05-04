<script>
    window.dataLayer = window.dataLayer || [];
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(initGTM, 3500);
    });
    document.addEventListener('scroll', initGTMOnEvent);
    document.addEventListener('mousemove', initGTMOnEvent);
    document.addEventListener('touchstart', initGTMOnEvent);
    function initGTMOnEvent(event) {
        initGTM();
        event.currentTarget.removeEventListener(event.type, initGTMOnEvent); // remove the event listener that got triggered
    }
    function initGTM() {
        if (window.gtmDidInit) {
            return false;
        }
        window.gtmDidInit = true; // flag to ensure script does not get added to DOM more than once.
        const script = document.createElement('script');
        script.type = 'text/javascript';
        script.async = true;
        script.onload = () => {
            window.dataLayer.push({ event: 'gtm.js', 'gtm.start': new Date().getTime()});
        }; // this part ensures PageViews is always tracked
        script.src = 'https://www.googletagmanager.com/gtm.js?id={{ config('web.tracking.google_tag_manager') }}&l=dataLayer';
        document.head.appendChild(script);
    }
</script>
