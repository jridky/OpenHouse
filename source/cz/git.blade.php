@extends('_layouts.page')

@section('social')
<meta property="og:title" content="Red Hat Czech Open House, Brno - Czechia">
<meta property="og:site_name" content="Red Hat Czech Open House">
<meta property="og:description" content="Red Hat Czech Open House is the annual, free, virtual event organized by Red Hat Czech associates who are keen to present their work and experience and share Red Hat culture and values.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://openhouse.redhat.com">
<meta property="og:image" content="https://openhouse.redhat.com/assets/images/oh-social.png">
<meta property="twitter:image" content="https://openhouse.redhat.com/assets/images/oh-social.png">
@endsection

@section('css')
<link rel="stylesheet" href="{{ mix('css/site.css', 'assets/build') }}">
<link rel="stylesheet" href="{{ mix('css/subsite.css', 'assets/build') }}">
@endsection

@section('title')
<title>Mastering Git</title>
@endsection


@section('body')
<section class="mx-auto col-lg-10 py-5 text-center">
    <div class="row pt-5">
        <div class="col-lg-4 px-5 text-center">
            <img src="/assets/images/oh-logo.svg">
        </div>

        <div class="col-lg-6 mx-5 text-left">
            <h1 class="rhd-700 pt-3">Mastering Git</h1>
        </div>
    </div>

    <div class="row mt-4 py-5">
        <div class="col-lg-12 px-5 text-left">
            <h4 class="rhd-700 underline pb-4">About the course</h4>
            <div class="rhd-400">
                <p>Git is a powerful and easy to learn software which is mainly used for collaborative software development. During this course you will learn unique benefits and concepts of Git as well as its core features via
                 extensive examples and hands-on exercises. We hope you will develop the joy of working with it. This course doesn’t require any prior knowledge of Git and is perfect for anyone who wants a jump start in learning it.
                  If you already have some experience with Git, then this course will make you an expert, since it gives a deep look at the fundamental commands. </p>
            </div>
    	</div>
    </div>
    
    <div class="row mt-4 py-5">
        <div class="col-lg-4 mx-5 mb-5 text-center">
            <h4 class="rhd-700 underline pb-4">Lectors</h4>
            <p class="rhd-400">Irina Gulina (Senior Software Quality Engineer)<br>
	       Tomáš Tomeček (Principal Software Engineer)</p>

        </div>
        <div class="col-lg-6 px-5 text-left">
            <h4 class="rhd-700 underline pb-4">Key info</h4>
            <div class="rhd-400">
                <p>This course starts on FI MUNI in <i>Autumn 2022</i>.</p>
                
                <p>Capacity is 20 people.</p>
                
                <p>The course is worth 1 ECTS credit.</p>
                
                <p>There will be 6 weeks of teaching. A class will be composed of theoretical and practical parts.</p>
                
                <p>Every class is followed by a homework, you need to complete 5 out of 6 assignments to pass the course.</p>
                
                <p>Anyone can sign up for this course: students of all programs.</p>
                
                <p>The course is a seminar group of class <i>PV177 Laboratory of Advanced Network Technologies</i></p>
            </div>
    	</div>
    </div>
    <div class="row py-5">
        <div class="col-lg-4 mx-5 mb-5 text-center">
            <h4 class="rhd-700 underline pb-4">Prerequisities</h4>
            <p class="rhd-400">Be comfortable in a command-line environment.</p>
            <p class="rhd-400">Understand basic programming concepts.</p>            

        </div>
        <div class="col-lg-6 px-5 text-left">
            <h4 class="rhd-700 underline pb-4">Lessons</h4>
            <div class="rhd-400">
            	<p>This is a half-course. It's taught only first 6 weeks of the semester.</p>
            	
                <p>Lesson 1 | Introduction of this course, organization, motivation</p>

                <p>Lesson 2 | How does branching work in git</p>
                
                <p>Lesson 3 | Fixing mistakes</p>
                
                <p>Lesson 4 | Working as a team with a git repository</p>
                
                <p>Lesson 5 | Git Etiquette</p>
                
                <p>Lesson 6 | Git features and common open source git workflows</p>
            </div>
	</div>
    </div>
<!--    <img src="/assets/images/openshift.png" class="mw-100" alt="Plakát na kurz"> -->
    
    
</section>

@endsection

@include('_layouts.footercz')
