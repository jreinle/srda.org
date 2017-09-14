<footer id="footer">
    <div class="inner">
        <ul class="icons">
            <li><a href="{{ config('services.social.twitter.link', '#') }}" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="{{ config('services.social.facebook.link', '#') }}" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="{{ config('services.social.instagram.link', '#') }}" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="{{ config('services.social.github.link', '#') }}" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="{{ config('services.social.linkedin.link', '#') }}" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; {{ date('Y') }}{{ config('app.name') }}</li>
        </ul>
    </div>
</footer>
