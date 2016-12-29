        <footer class="container">

            <div class="col-md-4">
                <ul class="list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a href="">Missions</a></li>
                    <li><a href="">War Room</a></li>
                    <li><a href="">Standard Operating Procedures</a></li>
                    <li><a href="">Basic Combat Training</a></li>
                    <li><a href="">SOAR</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-unstyled">
                    <li><a href="/">Mod Setup & Installation</a></li>
                    <li><a href="">Tutorials</a></li>
                    <li><a href="">Members</a></li>
                    <li><a href="">My Profile</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-unstyled">
                    <li><a href="http://www.alivemod.com/war-room/showorbat/140">7-75th Alive War Room</a></li>
                    <li><a href="http://www.youtube.com/user/7th75thRangers?feature=watch">7-75th YouTube</a></li>
                    <li><a href="http://www.armaholic.com/">Armaholic</a></li>
                    <li><a href="http://www.arma3.com/">Arma 3</a></li>
                    <li><a href="http://radio.task-force.ru/en/">Task Force Radio</a></li>
                    <li><a href="http://vbundeswehr.de/">XMedSys</a></li>
                </ul>
            </div>

            <p class="copyright">Copyright &copy; {{ date('Y') }} www.7-75th.com All Rights Reserved.</p>

        </footer>

        @include('layouts.common.footerscripts')
        @yield('scripts.footer')

    </body>
</html>