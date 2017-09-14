@extends('layout')

@section('banner')
    @include('banners.01')
@endsection

@section('main_content')

    <div id="main">

        <!-- One -->
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h2>SKID ROW DENIM ACADEMY</h2>
                </header>
                <p>SKID ROW DENIM & ACADEMY is a Workforce Development Program designed to solve the gap in providing tools and resources for the formerly homeless to self sustain and give back to their communities after they’ve been supported.  By providing training to the formerly homeless people, SKID ROW DENIM & ACADEMY is creating a pipeline of proficient Advocates from underrepresented communities.

                    Through the curriculum based on real world scenarios and opportunities by partnering with community centric employment organizations, SKID ROW DENIM & ACADEMY provides the formerly homeless Residents with an unmatched experience that builds a proper foundation for employment opportunities allowing for the formerly homeless to give back and support the communities they were once homeless in.</p>
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
                            <h3>GOALS & ALLIANCES</h3>
                        </header>
                        <p>SKID ROW DENIM & ACADEMY believes that Workforce Development Programs and skills training should be accessible to everyone, particularly the Forgotten or ignored.  The ACADEMY believes paying attention drives solutions and finding creativity and solutions in areas society chooses to ignore.  Ignoring doesn’t drive action to solve and therefore continues to grow as a challenge.  The ACADEMY and their Residents demonstrate that solutions are found in humanity as a whole when they are solicited, believed in and developed.</p>
                        <ul class="actions">
                            <li><a href="{{ url('/page/default') }}" class="button">Learn more</a></li>
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
                            <h3>LEARNING</h3>
                        </header>
                        <p>The ACADEMY creates an environment for optimum and realistic skills development.  Equipment, connectivity, educators, food and transportation is provided while going through the courses and classes.</p>
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
                            <h3>JOB EXPERIENCE</h3>
                        </header>
                        <p>Work experience is critical to the success of the Residents.  The ACADEMY transitions from Learning to Working in transition program that offers the optimized solution for both the Learner / Employee and Partner / Employer.  It starts with a Volunteer Program, changes to Contract and Temporary Labor and graduates into Part Time Employment.  That structure allows for independence without risking health and human services Residents may have in place.  ACADEMY BASICS:
                        <li>Month 1 = Strengthsfinder Assessment</li>
                        <li>Month 2 – 4 = Basic Skills & Goal Identification</li>
                        <li>Month 5 - 7 = On The Job Training</li>
                        <li>Month 8 = Active Volunteerism & / OR Employment</li></p>
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
                    <h2>SUCCESS EQUATION</h2>
                </header>
                <p>$250 + Homeless Experience + Partners / Residents = Community Success <br><h6>Put high level metrics of how many have gone through this and been employed (including PMC)</h6></p>
                <ul class="actions">
                    <li><a href="{{ url('/page/default') }}" class="button next">Get Started</a></li>
                </ul>
            </div>
        </section>

    </div>

@endsection
