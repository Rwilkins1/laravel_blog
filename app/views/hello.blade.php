@extends('layouts.master')

@section('content')
    <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Welcome to
                        <strong>my blog</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/me.png" alt="">
                    <hr class="visible-xs">
                    <p>My purpose in creating this blog is to consolidate my work into one place and give the world a sample of the types of web experiences I can create with just a laptop and a week's time.</p>
                    <p>The resume tab in the navbar will take you to a detailed description of my educational and volunteering history. There, you will also learn which programming languages I am proficient in.</p>
                    <p>The portfolio tab in the navbar will take you to a list of major projects that I've completed both as a solo developer and in a group setting. Each project will have a link to it, if one is available, so you will be able to use the various applications that I have built for yourself.</p>
                    <p>Finally, the contact tab in the navbar will take you to an email form with which you can contact me. Whether you are looking to hire a dedicated full-stack web developer and think I fit the bill or whether you are just a fellow coder with questions or comments about my work, feel free to get in touch! Why don't you roll some dice?</p>
                    	<p>
	                    	<a href="{{{action('HomeController@rolldice', array(1))}}}">Guess a 1</a>
	                    	<a href="{{{action('HomeController@rolldice', array(2))}}}">Guess a 2</a>
	                    	<a href="{{{action('HomeController@rolldice', array(3))}}}">Guess a 3</a>
                    	</p>
                    	<p>
	                    	<a href="{{{action('HomeController@rolldice', array(4))}}}">Guess a 4</a>
	                    	<a href="{{{action('HomeController@rolldice', array(5))}}}">Guess a 5</a>
	                    	<a href="{{{action('HomeController@rolldice', array(6))}}}">Guess a 6</a>
                    	</p>
                    </p>
                </div>
            </div>
        </div>
@stop
