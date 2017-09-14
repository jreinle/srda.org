@extends('layout')

@section('banner')
    <section id="banner" class="major">
        <div class="inner">
            <header class="major">
                <h1>Workforce Development Program</h1>
            </header>
            <div class="content">
                <p>SKID ROW DENIM ACADEMY provides the formerly homeless Residents with an unmatched experience that builds a proper foundation for employment opportunities allowing for the formerly homeless to give back and support the communities they were once homeless in.</p>
                <ul class="actions">
                    <li><a href="#one" class="button next scrolly">Get Started</a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('main_content')
    <div id="main">

        <!-- One -->
        <section id="one" class="tiles">
            <article>
                <span class="image">
                    <img src="{{ url('images/pic01.jpg') }}" alt=""/>
                </span>
                <header class="major">
                    <h3><a href="{{ url('about') }}" class="link">ABOUT</a></h3>
                    <p>SKID ROW DENIM ACADEMY</p>
                </header>
            </article>
            <article>
                <span class="image">
                    <img src="{{ url('images/pic02.jpg') }}" alt=""/>
                </span>
                <header class="major">
                    <h3><a href="{{ url('partnerships') }}" class="link">PARTNERSHIPS</a></h3>
                    <p>WORKING TOGETHER</p>
                </header>
            </article>
            <article>
                <span class="image">
                    <img src="{{ url('images/pic03.jpg') }}" alt=""/>
                </span>
                <header class="major">
                    <h3><a href="{{ url('pages/default') }}" class="link">MISSION</a></h3>
                    <p>END HOMELESSNESS</p>
                </header>
            </article>
            <article>
                <span class="image">
                    <img src="{{ url('images/pic04.jpg') }}" alt=""/>
                </span>
                <header class="major">
                    <h3><a href="{{ url('curriculum') }}" class="link">CURRICULUM & SUPPORT</a></h3>
                    <p>ACTIVE PROGRAMS</p>
                </header>
            </article>

        </section>

        <!-- Two -->
        <section id="two">
            <div class="inner">
                <header class="major">
                    <h2>DONATE</h2>
                </header>
                <p>We apprecaite your donation to helping end homelessness.</p>
                <ul class="actions">
                    <li><a href="{{ url('about') }}" class="button next">DONATE NOW</a></li>
                </ul>
            </div>
        </section>

    </div>
@endsection
