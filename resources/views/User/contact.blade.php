@extends('layouts.user.main')
@section('title', 'Contact')

@section('content')

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Contact Us</h3>
          <span class="breadcrumb"><a href="{{ route('home') }}">Home</a>  >  Contact Us</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h6>Contact Us</h6>
              <h2>Say Hello!</h2>
            </div>
            <p>Got a question, comment, or suggestion? We'd love to hear from you! Fill out the form below to get in touch with our friendly and knowledgeable customer service team. We're here to help you with anything you need, from product information to order support.</p>
            <ul>
              <li><span>Address</span> Prishtina 10000, Kosova.</li>
              <li><span>Phone</span> +383 49 123 456</li>
              <li><span>Email</span> techx@contact.com</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3108.420255011791!2d21.161899290627762!3d42.66224388860167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1683459291645!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" 
                </div>
              </div>
              <div class="col-lg-12">
                <p>Having issues? Our support team will help you. Contact us!</p>
                <br>
                <form>
                  <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="title" placeholder="Title" autocomplete="on" required>
                    </div>
                    <div class="col-lg-12">
                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="orange-button">Send Message Now</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
@endsection