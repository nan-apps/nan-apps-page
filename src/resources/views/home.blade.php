@extends('layouts.app')

@section('title', 'Inicio')


@section('content')   
	
	@verbatim	
	
	<div id="app" >
		<header-section :developer="attributes['developer']" 
						:title="attributes['title']" 
						v-on:show_contact="toggleSection( '#contact-section', true, $event )" >
		</header-section>

		<div class="container sections-wrapper main-container">            

			<div class="row">
				<div class="primary col-md-8 col-sm-12 col-xs-12">

					<contact-section v-show="show_contact_section" 
									 :email="attributes['email']" 
									 v-on:hide_contact="toggleSection( '#contact-section', false )"
									 >
					</contact-section>
					
					<about-section :fetching_attrs="fetching_attrs" :content="attributes['about_me']" :developer="attributes['developer']" >
					</about-section>

					<projects-section></projects-section>

				</div>
				<div class="secondary col-md-4 col-sm-12 col-xs-12">
					
					<info-section :fetching_attrs="fetching_attrs" 
								  :location="attributes['location']" 
								  :email="attributes['email']" 
								  :developer="attributes['developer']">						
					</info-section>

					<skills-section :fetching_attrs="fetching_attrs" :description="attributes['skills']" >
					</skills-section>

				</div>
			</div>		

		</div>
		
	</div>
	

	@endverbatim

	@include('partials/footer') 

@endsection