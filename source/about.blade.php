@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <h2>Professional & Education</h2>

    <p>For the past decade I have worked to distill insights from data. I began my career in academic research working in biomaterial labs to develop donor-identical tissues. In 2012 I left academia for Silicon Valley where I took a job within Operations at Google.  After 2 years I transitioned within Google to analytical consulting for Fortune 500 companies. To enhance my technical development, I attended UC Berkeley’s Masters of Information and Data Science program. I earned my degree in the Summer of 2018. Today I am a Data Scientist at 23andMe.  My work consists of using data to solve company wide business problems and managing a team of Product Analysts. </p>

    <h2>Fun Stuff</h2>

    <p>When I am not staring at a computer screen, I can be found racing cars, playing lacrosse, cooking, or exploring California with my wife and 2 dogs.</p>

    <h2>Links:</h2>

    <ul>
        <li><a href="https://www.linkedin.com/in/patrick-barranger-a870ba3a/" target="_blank">LinkedIn</a></li>
        <li><a href="https://github.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
    </ul>
@endsection
