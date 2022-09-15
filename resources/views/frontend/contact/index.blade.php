@extends('layouts.app')
@section('title', 'Contact us')
@section('content')

<!-- Subheader Start -->
<div class="andro_subheader pattern-bg primary-bg">
    <div class="container">
        <div class="andro_subheader-inner">
            <h1>Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Subheader End -->
<!-- Icons Start -->
<div class="section section-padding pt-0">
    <div class="container">
        <div class="contact-title">
            @include('partials.frontend.flash')
        </div>
        <div class="row">

            <div class="col-lg-4">
                <div class="andro_icon-block">
                    <a href="tel:+123456789">
                        <i class="flaticon-call"></i>
                        <h5>Call Center</h5>
                        <p>{!! getSettingsOf('phone_number') !!}</p>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg">
                        <rect height="500" width="500" class="andro_svg-stroke-shape-anim"></rect>
                    </svg>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="andro_icon-block">
                    <a href="mailto:example@outlook.com">
                        <i class="flaticon-email"></i>
                        <h5>Mail Us</h5>
                        <p>{!! getSettingsOf('site_email') !!}</p>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg">
                        <rect height="500" width="500" class="andro_svg-stroke-shape-anim"></rect>
                    </svg>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="andro_icon-block">
                    <a href="#">
                        <i class="flaticon-location"></i>
                        <h5>Nearest Branch</h5>
                        <p>{!! getSettingsOf('address') !!}</p>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg">
                        <rect height="500" width="500" class="andro_svg-stroke-shape-anim"></rect>
                    </svg>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Icons End -->

<!-- FAQ & Contact Form Start -->
<div class="section pt-0">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 mb-lg-30">

                <div class="section-title">
                    <h4 class="title">FAQ</h4>
                </div>

                <div class="accordion with-gap" id="generalFAQExample">
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" role="button" data-target="#generalOne" aria-expanded="true" aria-controls="generalOne">
                            What is Automobile?
                        </div>

                        <div id="generalOne" class="collapse show" data-parent="#generalFAQExample">
                            <div class="card-body">
                                Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" role="button" data-target="#generalTwo" aria-expanded="false" aria-controls="generalTwo">
                            Getting Started with Automobile
                        </div>

                        <div id="generalTwo" class="collapse" data-parent="#generalFAQExample">
                            <div class="card-body">
                                Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" role="button" data-target="#generalThree" aria-expanded="false" aria-controls="generalThree">
                            Do i have the latest version?
                        </div>

                        <div id="generalThree" class="collapse" data-parent="#generalFAQExample">
                            <div class="card-body">
                                Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" role="button" data-target="#generalFour" aria-expanded="false" aria-controls="generalFour">
                            How many times can I use Automobile?
                        </div>

                        <div id="generalFour" class="collapse" data-parent="#generalFAQExample">
                            <div class="card-body">
                                Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" role="button" data-target="#generalFive" aria-expanded="false" aria-controls="generalFive">
                            How to migrate my website?
                        </div>

                        <div id="generalFive" class="collapse" data-parent="#generalFAQExample">
                            <div class="card-body">
                                Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-7">

                <div class="section-title">
                    <h4 class="title">Contact Us</h4>
                </div>

                <form class="mf_form_validate" action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name">
                            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Title">
                            @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea name="message" class="form-control" placeholder="Your message" rows="8">{{ old('message') }}</textarea>
                            @error('message')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <button type="submit" class="andro_btn-custom primary">Send Message</button>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- FAQ & Contact Form End -->

<!-- Instagram Start -->
<div class="row no-gutters">
    <div class="col-lg-4 secondary-bg pattern-bg">
        <div class="andro_instagram">
            <h3 class="text-white">Follow Us On Instagram</h3>
            <a href="#" class="andro_btn-custom light">Follow Us</a>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
                <a href="#" class="andro_ig-item">
                    <img src="{{ asset('frontend/img/ig/1.jpg') }}" alt="ig">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
                <a href="#" class="andro_ig-item">
                    <img src="{{ asset('frontend/img/ig/2.jpg') }}" alt="ig">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
                <a href="#" class="andro_ig-item">
                    <img src="{{ asset('frontend/img/ig/3.jpg') }}" alt="ig">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
                <a href="#" class="andro_ig-item">
                    <img src="{{ asset('frontend/img/ig/4.jpg') }}" alt="ig">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
                <a href="#" class="andro_ig-item">
                    <img src="{{ asset('frontend/img/ig/5.jpg') }}" alt="ig">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
                <a href="#" class="andro_ig-item">
                    <img src="{{ asset('frontend/img/ig/6.jpg') }}" alt="ig">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->

@endsection