<?php $page = 'faq'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
        FAQ
        @endslot
        @slot('item1')
           Home
        @endslot
        @slot('item2')
            FAQ
        @endslot
    @endcomponent
  
    <div class="content">
        <div class="container">
            <h2 class="main-title mb-1">Most frequently asked questions</h2>
            <p class="mb-4">Here are the most frequently asked questions you may check before getting started</p>
            <div class="row">
                <div class="col-lg-6">
                
                    <!-- Faq -->							
                    <div class="faq-card">
                        <h6 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqone" aria-expanded="false">Is there a 14-days trial?</a>
                        </h6>
                        <div id="faqone" class="collapse">
                            <div class="faq-detail">
                                <p>No, we currently do not offer a 14-day trial. However, you can explore our platform through free demo courses or contact our team for a personalized walkthrough of the features.</p>
                            </div>
                        </div>
                    </div>
                    
                                                
                    <div class="faq-card">
                        <h6 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">How much time I will need to learn this app?</a>
                        </h6>
                        <div id="faqtwo" class="collapse">
                            <div class="faq-detail">
                                <p>No, we currently do not offer a 14-day trial. However, you can explore our platform through free demo courses or contact our team for a personalized walkthrough of the features.</p>
                            </div>
                        </div>
                    </div>
                    
                                                
                    <div class="faq-card">
                        <h6 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqthree" aria-expanded="false">Is there a month-to-month payment option?</a>
                        </h6>
                        <div id="faqthree" class="collapse">
                            <div class="faq-detail">
                                <p>No, we currently do not offer a 14-day trial. However, you can explore our platform through free demo courses or contact our team for a personalized walkthrough of the features.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Faq -->
                
                </div>	
                
                <div class="col-lg-6">
                
                    <!-- Faq -->							
                    <div class="faq-card">
                        <h6 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">What’s the benefits of the Premium Membership?</a>
                        </h6>
                        <div id="faqfour" class="collapse">
                            <div class="faq-detail">
                                <p>No, we currently do not offer a 14-day trial. However, you can explore our platform through free demo courses or contact our team for a personalized walkthrough of the features.</p>
                            </div>
                        </div>
                    </div>
                    
                                                
                    <div class="faq-card">
                        <h6 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqfive" aria-expanded="false">Are there any free tutorials available?</a>
                        </h6>
                        <div id="faqfive" class="collapse">
                            <div class="faq-detail">
                                <p>No, we currently do not offer a 14-day trial. However, you can explore our platform through free demo courses or contact our team for a personalized walkthrough of the features.</p>
                            </div>
                        </div>
                    </div>
                    
                                                
                    <div class="faq-card">
                        <h6 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqsix" aria-expanded="false">How can I cancel my subscription plan?</a>
                        </h6>
                        <div id="faqsix" class="collapse">
                            <div class="faq-detail">
                                <p>No, we currently do not offer a 14-day trial. However, you can explore our platform through free demo courses or contact our team for a personalized walkthrough of the features.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Faq -->
                
                </div>	
            </div>

            <div class="bg-light border rounded p-4 p-sm-5 mt-4">

                <div class="row">
                    <!-- Title and inputs -->
                    <div class="col-lg-7 text-center mx-auto">
                        <!-- Avatar group -->
                        
    
                        <!-- Title -->
                        <h4 class="mb-2">Still have a question?</h4>
                        <p class="mb-4">We'd be happy to help you with any questions you have! Please let us know what you're looking for, and we'll do our best to assist you.</p>
    
                        <!-- Button -->
                        <a href="{{url('contact-us')}}" class="btn btn-lg btn-dark mb-0">Contact us</a>
                    </div>
                </div> <!-- Row END -->
            </div>
        </div>
    </div>

  
@endsection
