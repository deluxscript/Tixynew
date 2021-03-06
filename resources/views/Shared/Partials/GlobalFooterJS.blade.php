@if(session()->get('message'))
    <script>showMessage('{{\Session::get('message')}}');</script>
@endif
<script>
    @if(env('GOOGLE_ANALYTICS_ID'))
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', '{{env('GOOGLE_ANALYTICS_ID')}}', 'auto');
        ga('require', 'displayfeatures');
        ga('send', 'pageview');
    @endif
</script>
<script src="https://cdn.logrocket.io/LogRocket.min.js" crossorigin="anonymous"></script>
<script>window.LogRocket && window.LogRocket.init('p1iqny/tixy-eikao');</script>
<script>
    var eemail = document.getElementsByClassName("eemail").value;
    var ffname = document.getElementsByClassName("ffname").value;
    var uid = Math.floor((Math.random() * 4500) + 1);

    LogRocket.identify(uid, {
        name: ffname,
        email: eemail,
    });
</script>