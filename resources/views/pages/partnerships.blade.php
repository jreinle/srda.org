@extends('layout')

@section('banner')
    @include('banners.02')
@endsection

@section('main_content')
    <div id="main">

        <!-- One -->
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h2>LEARN MORE</h2>
                </header>
                <p>SKID ROW DENIM & ACADEMY pursues strategic alliances with key Educators, Technology Companies and Employers.  The ACADEMY and the Residents are grateful for the time and resources that the employment Partners bring to the organization.</p>
            </div>
        </section>

        <!-- Two -->
        <section id="two" class="spotlights">
            <section>
                <a href="{{ url('/page/default') }}" class="image">
                    <img src="{{ url('images/pic08.jpg') }}" alt="" data-position="center center" />
                </a>
                <div class="content">
                    <div class="inner">
                        <header class="major">
                            <h3>SKID ROW DENIN & APPAREL</h3>
                        </header>
                        <p>SKID ROW DENIM & APPAREL INC. was founded with the belief that a future where humanity is connected to one another is more meaningful than one that is not.  We actively create products to make this possible with the ultimate goal of enabling dignity and purpose for all.</p>
                        <ul class="actions">
                            <li><a href="{{ url('pages/default') }}" class="button">Learn more</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section>
                <a href="{{ url('/page/default') }}" class="image">
                    <img src="{{ url('images/pic09.jpg') }}" alt="" data-position="top center" />
                </a>
                <div class="content">
                    <div class="inner">
                        <header class="major">
                            <h3>PARLAY</h3>
                        </header>
                        <p>PARLAY's short-term goals are to create products with meaning and thoughtfulness while our long-term aspirations are enabling everyone to opportunity to lead healthy, holistic lives.</p>
                        <ul class="actions">
                            <li><a href="{{ url('/page/default') }}" class="button">Learn more</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section>
                <a href="{{ url('/page/default') }}" class="image">
                    <img src="{{ url('images/pic10.jpg') }}" alt="" data-position="25% 25%" />
                </a>
                <div class="content">
                    <div class="inner">
                        <header class="major">
                            <h3>SKID ROW HOUSING TRUST</h3>
                        </header>
                        <p>Work experience is critical to the success of the Residents.  The ACADEMY transitions from Learning to Working in transition program that offers the optimized solution for both the Learner / Employee and Partner / Employer.  It starts with a Volunteer Program, changes to Contract and Temporary Labor and graduates into Part Time Employment.</p>
                        <ul class="actions">
                            <li><a href="{{ url('/page/default') }}" class="button">Learn more</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>

        <!-- Three -->
        <section id="three">
            <div class="inner">
                <header class="major">
                    <h2>WOULD YOU LIKE TO JOIN US?</h2>
                </header>
                <p>Click below to become part of the team.</p>
                <ul class="actions">
                    <li><a href="{{ url('/page/default') }}" class="button next">Get Started</a></li>
                </ul>
            </div>
        </section>

    </div>
@endsection
