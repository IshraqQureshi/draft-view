@extends('layouts.frontend')

@section('content')
    
    <section id="hero-section" class="section top-section">
        <div class="container">
            <div class="flex-row">
                <div class="hero--content col-2">
                    <h1>Showcase your professional experience with an <span class="highlight">expertly</span> <span class="highlight">written resume</span></h1>
                    <p>Showcase your professional experience with an expertly written resume</p>
                    <div class="hero--content-btn_wraper">
                        <a href="#" class="btn">Upgrade My Resume</a>
                    </div>
                </div>
                <div class="hero--image col-2">
                    <img src="/images/hero.png" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>

    <section id="options-section">
        <div class="container">
            <div class="flex-row flex-align">
                <div class="options-heading col-5">
                    <h3>Are You <span class="highlight-2">Looking</span> For?</h3>
                </div>
                <div class="options-box col-5">
                    <div class="options--icon">
                        <img src="/images/cv-write.png" alt="Resume & CV Writing">
                    </div>
                    <div class="options--name">
                        <h4>Resume & CV Writing</h4>
                    </div>
                </div>
                <div class="options-box col-5">
                    <div class="options--icon">
                        <img src="images/cover-letter.png" alt="Cover Letter">
                    </div>
                    <div class="options--name">
                        <h4>Cover Letter</h4>
                    </div>
                </div>
                <div class="options-box col-5">
                    <div class="options--icon">
                        <img src="images/cv-edit.png" alt="Resume & CV Editing">
                    </div>
                    <div class="options--name">
                        <h4>Resume & CV Editing</h4>
                    </div>
                </div>
                <div class="options-box col-5">
                    <div class="options--icon">
                        <img src="images/linked-write.png" alt="Linkedin Resume Writing">
                    </div>
                    <div class="options--name">
                        <h4>Linkedin Resume Writing</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="calculate-section" class="section">
        <div class="container">
            <div class="calculate-section--header">
                <h2>Land On Your <span class="highlight">Dream Job</span> With Professional Resume</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            </div>
            <div class="flex-row calculate-section--row">
                <div class="calculate-section--content col-60">
                    <h3>How Much Would resume writing service Cost Me?</h3>
                    <ul class="calculate-section--list">
                        <li>There are roughly 3-Level Resume builder
                            <ol>
                                <li data-number="01">Junior Level Resume</li>
                                <li data-number="02">Mid Level Resume</li>
                                <li data-number="03">Senior / Executive Resume</li>
                            </ol>
                        </li>
                        <li><strong>Professional CV</strong> writing costs starting from <strong>$50-$70</strong> for Junior level and it goes up to <strong>$150</strong> for executive level.</li>
                        <li><strong>Professional CV</strong> writing costs starting from <strong>$50-$70</strong> for Junior level and it goes up to <strong>$150</strong> for executive level.</li>
                        <li><strong>Professional CV</strong> writing costs starting from <strong>$50-$70</strong> for Junior level and it goes up to <strong>$150</strong> for executive level.</li>
                    </ul>
                </div>
                <div class="calculate-section--calculator col-40">
                    <div class="calculate-section--calculator-wrapper">
                        <h3>Calculate the price</h3>
                        <form>
                            <div class="calculator--field">
                                <select name="type">
                                    <option value="resume">Resume</option>
                                    <option value="resume">Cover Letter</option>
                                    <option value="resume">LinkedIn Resume</option>
                                </select>
                            </div>
                            <div class="calculator--field">
                                <select name="experience">
                                    <option value="entry">Junior/Entry Level</option>
                                    <option value="mid">Mid Level</option>
                                    <option value="senior">Senior Level</option>
                                </select>
                            </div>
                            <div class="calculator--field">
                                <select name="duration">
                                    <option value="3">3-Days</option>
                                    <option value="5">5-Days</option>
                                    <option value="7">7-Days</option>
                                </select>
                            </div>
                            <div class="calculator--submit">
                                <div class="calculator--price">
                                    <img src="/images/coin.svg" alt="Coin">
                                    <h3>$50<span>.00</span></h3>
                                </div>
                                <div class="calculator--btn">
                                    <button name="calculate">Proceed to Order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="process-section" class="section">
        <div class="container">
            <div class="flex-row process--row">
                <div class="process--content">
                    <h2>This is How Draft View can take your career to <span class="highlight">new </span><span class="highlight">heights</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod teficia deserunt mollit anim id est laborum.</p>
                    <div class="process--content-btn_wraper">
                        <a href="#" class="btn">Upgrade My Resume</a>
                    </div>
                </div>
                <div class="process--slider-nav">
                    <div class="process--slider-circular">
                        <div class="process--slider-circular-inner">
                            <div class="process--slider-sliderNav">
                                <div class="process--slider-circular-slideNav">
                                    <img src="/images/get-started-icon.png" alt="Get Started">
                                </div>
                                <div class="process--slider-circular-slideNav">
                                    <img src="/images/get-started-icon.png" alt="Get Started">
                                </div>
                                <div class="process--slider-circular-slideNav">
                                    <img src="/images/get-started-icon.png" alt="Get Started">
                                </div>
                                <div class="process--slider-circular-slideNav">
                                    <img src="/images/get-started-icon.png" alt="Get Started">
                                </div>
                                <div class="process--slider-circular-slideNav">
                                    <img src="/images/get-started-icon.png" alt="Get Started">
                                </div>
                                <div class="process--slider-circular-slideNav">
                                    <img src="/images/get-started-icon.png" alt="Get Started">
                                </div>
                                <div class="process--slider-circular-slideNav">
                                    <img src="/images/get-started-icon.png" alt="Get Started">
                                </div>
                            </div>
                            <div class="process--slider-circular-ciclegraph">
                                <div class="process--slider-circular-circle process--slider-circular-circle-btn" data-slide="0">
                                    <h3>01</h3>
                                </div>
                                <div class="process--slider-circular-circle process--slider-circular-circle-btn" data-slide="1">
                                    <h3>02</h3>
                                </div>
                                <div class="process--slider-circular-circle process--slider-circular-circle-btn" data-slide="2">
                                    <h3>03</h3>
                                </div>
                                <div class="process--slider-circular-circle process--slider-circular-circle-btn" data-slide="3">
                                    <h3>04</h3>
                                </div>
                                <div class="process--slider-circular-circle process--slider-circular-circle-btn" data-slide="4">
                                    <h3>05</h3>
                                </div>
                                <div class="process--slider-circular-circle process--slider-circular-circle-btn" data-slide="5">
                                    <h3>06</h3>
                                </div>
                                <div class="process--slider-circular-circle process--slider-circular-circle-btn" data-slide="6">
                                    <h3>07</h3>
                                </div>
                            </div>
                        </div>
                        <div class="process--slider-circular-circle">
                            <div class="process--slider-circle-bar process--slider-circle-left">
                                <div class="process--slider-circle-progress" id="leftRotate">
                                </div>
                            </div>
                            <div class="process--slider-circle-bar process--slider-circle-right">
                                <div class="process--slider-circle-progress" id="rightRotate">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="process--slider">
                    <div class="process--slider-wrapper">
                        <div class="process--slider-slide">
                            <h3>01</h3>
                            <h4>Getting Started</h4>
                            <p>Once you land on our page, you’ll get greeted with our services at a glance. This is when you’ll place your order and asked to submit your present Profile or Resume for an initial review after which we will review and revert with our unique ‘DraftView Profile Assessment Questionnaire.</p>
                        </div>
                        <div class="process--slider-slide">
                            <h3>02</h3>
                            <h4>Getting Started</h4>
                            <p>Once you land on our page, you’ll get greeted with our services at a glance. This is when you’ll place your order and asked to submit your present Profile or Resume for an initial review after which we will review and revert with our unique ‘DraftView Profile Assessment Questionnaire.</p>
                        </div>
                        <div class="process--slider-slide">
                            <h3>03</h3>
                            <h4>Getting Started</h4>
                            <p>Once you land on our page, you’ll get greeted with our services at a glance. This is when you’ll place your order and asked to submit your present Profile or Resume for an initial review after which we will review and revert with our unique ‘DraftView Profile Assessment Questionnaire.</p>
                        </div>
                        <div class="process--slider-slide">
                            <h3>04</h3>
                            <h4>Getting Started</h4>
                            <p>Once you land on our page, you’ll get greeted with our services at a glance. This is when you’ll place your order and asked to submit your present Profile or Resume for an initial review after which we will review and revert with our unique ‘DraftView Profile Assessment Questionnaire.</p>
                        </div>
                        <div class="process--slider-slide">
                            <h3>05</h3>
                            <h4>Getting Started</h4>
                            <p>Once you land on our page, you’ll get greeted with our services at a glance. This is when you’ll place your order and asked to submit your present Profile or Resume for an initial review after which we will review and revert with our unique ‘DraftView Profile Assessment Questionnaire.</p>
                        </div>
                        <div class="process--slider-slide">
                            <h3>06</h3>
                            <h4>Getting Started</h4>
                            <p>Once you land on our page, you’ll get greeted with our services at a glance. This is when you’ll place your order and asked to submit your present Profile or Resume for an initial review after which we will review and revert with our unique ‘DraftView Profile Assessment Questionnaire.</p>
                        </div>
                        <div class="process--slider-slide">
                            <h3>07</h3>
                            <h4>Getting Started</h4>
                            <p>Once you land on our page, you’ll get greeted with our services at a glance. This is when you’ll place your order and asked to submit your present Profile or Resume for an initial review after which we will review and revert with our unique ‘DraftView Profile Assessment Questionnaire.</p>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="warranty-section">
        <div class="container">
            <div class="warranty--wrapper flex-row">
                <div class="warranty--col">
                    <div class="warranty--img">
                        <img src="/images/delivery-badge.png" alt="Delivery Badge">
                    </div>
                    <div class="warranty--content">
                        <h3>3 Hours Same Day Service</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="warranty--col">
                    <div class="warranty--img">
                        <img src="/images/money-back-badge.png" alt="Money Back Badge">
                    </div>
                    <div class="warranty--content">
                        <h3>60 Days Money Back Guarntee</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="warranty--col">
                    <div class="warranty--img">
                        <img src="/images/interview-badge.png" alt="Delivery Badge">
                    </div>
                    <div class="warranty--content">
                        <h3>04 Weeks Interview Gurantee</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="packages-section">
        <div class="container">
            <div class="packages--header">
                <h2>Our professional resume-writing service has helped over <span class="highlight">600,000</span> professionals land more interviews and get hired faster.</h2>
            </div>
            <div class="packages--wrapper flex-row">
                <div class="packages--list">
                    <div class="packages--package current-package" data-package="basic">
                        <div class="packages--package-img">
                            <img src="/images/basic-package-icon.png" alt="Basic Package">
                        </div>
                        <div class="packages--package-content">
                            <h3>Basic</h3>
                            <p>An expertly written and keyword-optimized resume that sets you apart.</p>
                        </div>
                    </div>
                    <div class="packages--package" data-package="starter">
                        <div class="packages--package-img">
                            <img src="/images/starter-package-icon.png" alt="Starter Package">
                        </div>
                        <div class="packages--package-content">
                            <h3>Starter</h3>
                            <p>Everything you need to apply to jobs, including a resume and cover letter.</p>
                        </div>
                    </div>
                    <div class="packages--package" data-package="premium">
                        <div class="packages--package-img">
                            <img src="/images/premium-package-icon.png" alt="Premium Package">
                        </div>
                        <div class="packages--package-content">
                            <h3>Premium</h3>
                            <p>Resume, cover letter, and LinkedIn profile, created by an executive writer.</p>
                        </div>
                    </div>
                </div>
                <div class="packages--features">
                    <div class="packages--features-heading">
                        <h3>What’s Include:</h3>
                    </div>
                    <div class="packages--features-list">
                        <ul>
                            <li data-basic="1" data-starter="1" data-premium="1">Lorem ipsum dolor sit amet</li>
                            <li data-basic="1" data-starter="1" data-premium="1">Lorem ipsum dolor sit amet</li>
                            <li data-basic="1" data-starter="1" data-premium="1">Lorem ipsum dolor sit amet</li>
                            <li data-basic="1" data-starter="1" data-premium="1">Lorem ipsum dolor sit amet</li>
                            <li data-basic="1" data-starter="1" data-premium="1">Lorem ipsum dolor sit amet</li>
                            <li data-basic="1" data-starter="1" data-premium="1">Lorem ipsum dolor sit amet</li>
                            <li data-basic="0" data-starter="1" data-premium="1">Lorem ipsum dolor sit amet</li>
                            <li data-basic="0" data-starter="1" data-premium="1">Lorem ipsum dolor sit amet</li>
                            <li data-basic="0" data-starter="1" data-premium="1">Lorem ipsum dolor sit amet</li>
                            <li data-basic="0" data-starter="1" data-premium="1">Lorem ipsum dolor sit amet</li>
                            <li data-basic="0" data-starter="0" data-premium="1">Lorem ipsum dolor sit amet</li>
                            <li data-basic="0" data-starter="0" data-premium="1">Lorem ipsum dolor sit amet</li>
                            <li data-basic="0" data-starter="0" data-premium="1">Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>
                    <div class="packages--meta-wrapper">
                        <div class="packages--price">
                            <div class="packages--price-coin">
                                <img src="/images/coin-2.svg" alt="Coin">
                            </div>
                            <h3 class="packages--price-txt">$50<span>.00</span></h3>
                        </div>
                        <div class="packages--btn_wraper">
                            <a href="#" class="btn">Proceed To Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="policy-section">
        <div class="container">
            <div class="policy--wrapper flex-row">
                <div class="policy--col">
                    <div class="policy--img">
                        <img src="/images/no-charges.png" alt="No Hidden Charges">
                    </div>
                    <div class="policy--content">
                        <h3>No Hidden Charges</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="policy--col">
                    <div class="policy--img">
                        <img src="/images/money-back.png" alt="Money Back">
                    </div>
                    <div class="policy--content">
                        <h3>60 Days Money Back Guarntee</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="policy--col">
                    <div class="policy--img">
                        <img src="/images/short-list.png" alt="Delivery Badge">
                    </div>
                    <div class="policy--content">
                        <h3>6 Weeks Shortlist Guarantee</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="resume-section">
        <div class="container">
            <div class="resume--header">
                <h2>Land On Your <span class="highlight">Dream Job</span> With Professional Resume</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            </div>
            <div class="resume--slider-wrapper">
                <div class="resume--slider">
                    <div class="resume--slide">
                        <div class="resume--slide-before">
                            <span class="resume--slide-label">Before</span>
                            <img src="/images/resume-before.jpg" alt="Resume">
                        </div>
                        <div class="resume--slide-after">
                            <span class="resume--slide-label">After</span>
                            <img src="/images/resume-after.jpg" alt="Resume">
                        </div>
                    </div>
                    <div class="resume--slide">
                        <div class="resume--slide-before">
                            <span class="resume--slide-label">Before</span>
                            <img src="/images/resume-after.jpg" alt="Resume">
                        </div>
                        <div class="resume--slide-after">
                            <span class="resume--slide-label">After</span>
                            <img src="/images/resume-before.jpg" alt="Resume">
                        </div>
                    </div>
                </div>
            </div>
            <div class="resume--btn-wrapper">
                <a href="#" class="btn">Upgrade My Resume</a>
            </div>
        </div>
    </section>

    <section id="testimonial-section">
        <div class="container">
            <div class="testimonial--header">
                <h2>Our Users Are Being Hired at the World's <span class="highlight">Leading</span> Companies.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            </div>
            <div class="testimonial--wrapper">
                <div class="testimonial--slider">
                    <div class="testimonial--slide">
                        <div class="testimonial--slide-img">
                            <img src="/images/brandon.png" alt="Brandon Klein">
                        </div>
                        <div class="testimonial--slide-name">
                            <h3>Brandon Klein</h3>
                            <p>Senior Product Marketing Manager at Badu</p>
                        </div>
                        <div class="testimonial--slide-content">
                            <p>Absolutely love DraftView! The layouts are phenomenal and enhancement hints that the tool provides you with is like having your own personal resume consultant! So much better than spending hours creating my own design files. Even better, the $16 you pay for the month doesn't auto-renew! Seems like a company that really wants to provide you with value instead of just take your money.</p>
                        </div>
                    </div>
                    <div class="testimonial--slide">
                        <div class="testimonial--slide-img">
                            <img src="/images/linn.png" alt="Linn Mollberg">
                        </div>
                        <div class="testimonial--slide-name">
                            <h3>Linn Mollberg</h3>
                            <p>Junior Marketing Assistant</p>
                        </div>
                        <div class="testimonial--slide-content">
                            <p>Absolutely love DraftView! The layouts are phenomenal and enhancement hints that the tool provides you with is like having your own personal resume consultant! So much better than spending hours creating my own design files. Even better, the $16 you pay for the month doesn't auto-renew! Seems like a company that really wants to provide you with value instead of just take your money.</p>
                        </div>
                    </div>
                    <div class="testimonial--slide">
                        <div class="testimonial--slide-img">
                            <img src="/images/hichaam.png" alt="Hicham Berkouk">
                        </div>
                        <div class="testimonial--slide-name">
                            <h3>Hicham Berkouk</h3>
                            <p>Programming Laboratory Instructor</p>
                        </div>
                        <div class="testimonial--slide-content">
                            <p>Absolutely love DraftView! The layouts are phenomenal and enhancement hints that the tool provides you with is like having your own personal resume consultant! So much better than spending hours creating my own design files. Even better, the $16 you pay for the month doesn't auto-renew! Seems like a company that really wants to provide you with value instead of just take your money.</p>
                        </div>
                    </div>
                    <div class="testimonial--slide">
                        <div class="testimonial--slide-img">
                            <img src="/images/brandon.png" alt="Brandon Klein">
                        </div>
                        <div class="testimonial--slide-name">
                            <h3>Brandon Klein</h3>
                            <p>Senior Product Marketing Manager at Badu</p>
                        </div>
                        <div class="testimonial--slide-content">
                            <p>Absolutely love DraftView! The layouts are phenomenal and enhancement hints that the tool provides you with is like having your own personal resume consultant! So much better than spending hours creating my own design files. Even better, the $16 you pay for the month doesn't auto-renew! Seems like a company that really wants to provide you with value instead of just take your money.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-us-section">
        <div class="container">
            <div class="flex-row why-us--row">
                <div class="why-us--content">
                    <h2>Why <br /><span class="highlight">Draft View</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderitdolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco in voluptate velit.</p>
                    <div class="why-us--teams-wrapper">
                        <h3>Well Qualified Team From</h3>
                        <div class="why-us--teams">
                            <div class="why-us--team">
                                <img src="/images/american-university.png" alt="American University">
                            </div>
                            <div class="why-us--team">
                                <img src="/images/aup.png" alt="American University of Paris">
                            </div>
                            <div class="why-us--team">
                                <img src="/images/aau.png" alt="Association of American University">
                            </div>
                            <div class="why-us--team">
                                <img src="/images/nau.png" alt="North American University">
                            </div>
                            <div class="why-us--team">
                                <img src="/images/nau-2.png" alt="National American University">
                            </div>
                        </div>
                    </div>
                    <div class="why-us--btn-wrapper">
                        <a href="#" class="btn">Upgrade My Resume</a>
                    </div>
                </div>
                <div class="why-us--img">
                    <img src="/images/why-draft-view.png" alt="Why Draft View">
                </div>
            </div>
        </div>
    </section>

    <section id="fact-section">
        <div class="container">
            <div class="fact--header">
                <h2>Some <span class="highlight">Facts</span> & Figures</h2>
            </div>
            <div class="fact--wrapper">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Maecenas scelerisque nibh vel metus porta, id volutpat commodo.</li>
                    <li>Suspendisse sed enim in tellus iaculis blandit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Proin in metus commodo, fermentum lorem at, laoreet leo.</li>
                    <li>Suspendisse sed enim in tellus iaculis blandit.</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="faq-section">
        <div class="container">
            <div class="faq--header">
                <h2>Land On Your <span class="highlight">Dream</span> Job With Professional Resume</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            </div>
            <div class="faq--wrapper flex-row">
                <div class="faq--list">
                    <div class="faq--box active">
                        <div class="faq--box-header">
                            <h3>Why should you opt for Professional Resume Building Service in the first place?</h3>
                        </div>
                        <div class="faq--box-body" style="display: block">
                            <p>Resume building is no longer something that you can simply copy or make from the internet. It’s a science. A science which involved optimization, based on what the Employer’s seek, especially with ATS.</p>
                        </div>
                    </div>
                    <div class="faq--box">
                        <div class="faq--box-header">
                            <h3>Are we reliable?</h3>
                        </div>
                        <div class="faq--box-body">
                            <p>Resume building is no longer something that you can simply copy or make from the internet. It’s a science. A science which involved optimization, based on what the Employer’s seek, especially with ATS.</p>
                        </div>
                    </div>
                    <div class="faq--box">
                        <div class="faq--box-header">
                            <h3>What if I’m not happy with the draft?</h3>
                        </div>
                        <div class="faq--box-body">
                            <p>Resume building is no longer something that you can simply copy or make from the internet. It’s a science. A science which involved optimization, based on what the Employer’s seek, especially with ATS.</p>
                        </div>
                    </div>
                    <div class="faq--box">
                        <div class="faq--box-header">
                            <h3>What other services do we offer?</h3>
                        </div>
                        <div class="faq--box-body">
                            <p>Resume building is no longer something that you can simply copy or make from the internet. It’s a science. A science which involved optimization, based on what the Employer’s seek, especially with ATS.</p>
                        </div>
                    </div>
                    <div class="faq--box">
                        <div class="faq--box-header">
                            <h3>How long does your process takes?</h3>
                        </div>
                        <div class="faq--box-body">
                            <p>Resume building is no longer something that you can simply copy or make from the internet. It’s a science. A science which involved optimization, based on what the Employer’s seek, especially with ATS.</p>
                        </div>
                    </div>
                    <div class="faq--box">
                        <div class="faq--box-header">
                            <h3>Can I get my Resume sooner?</h3>
                        </div>
                        <div class="faq--box-body">
                            <p>Resume building is no longer something that you can simply copy or make from the internet. It’s a science. A science which involved optimization, based on what the Employer’s seek, especially with ATS.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection